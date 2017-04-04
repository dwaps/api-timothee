<?php

namespace Timothee\ModelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Timothee\ModelBundle\Entity\Hymn;
use Timothee\ModelBundle\Entity\MusicalPart;
use Timothee\ModelBundle\Form\HymnType;


class HymnsController extends Controller
{

    private $hymns = "


33a
Je ne sais pourquoi dans sa grâce
AF 370
Je ne sais pourquoi, dans sa grâce,
Jésus m'a tant aimé,
Pourquoi par son sang il efface
Ma dette, mon péché.

    Mais je sais qu'en lui j'ai la vie,
    Il m'a sauvé dans son amour;
    Et gardé par sa main meurtrie,
    J'attends l'heure de son retour.

Je ne sais comment la lumière
Eclaire tout mon coeur,
Comment je compris ma misère,
Et reçus mon sauveur.

Je ne sais quelle est la mesure
De joie et de douleur,
Que pour moi faible créature,
Réserve mon sauveur.

Je ne sais quand de la victoire
L'heure enfin sonnera,
Quand l'Agneau, l'Époux, dans sa gloire
Avec lui me prendra.


34a
Tel que je suis sans rien à moi
AF 253
Tel que je suis, sans rien à moi,
Sinon ton sang versé pour moi,
Et ta voix qui m'appelle à toi,
Agneau de Dieu, je viens, je viens.

Tel que je suis, bien vacillant,
En proie au doute à chaque instant;
Luttes au dehors, craintes au dedans,
Agneau de Dieu, je viens, je viens.

Tel que je suis, ton coeur est prêt
À prendre le mien tel qu'il est,
Pour tout changer, Sauveur parfait,
Agneau de Dieu, je viens, je viens.

Tel que je suis, ton grand amour
A tout pardonné sans retour.
Je veux être à toi dès ce jour,
Agneau de Dieu, je viens, je viens.
    ";

    /**
     * @Route("/", name="home")
     */
    public function homeAction(Request $request)
    {
        if($request->isMethod('POST'))
        {
            if($request->request->get('numberShowHymn'))
            {
                $numberHymn = $request->request->get('numberShowHymn');
                $numberHymn = trim($numberHymn);
                if(preg_match("/^\d{1,3}a?b?$/", $numberHymn))
                    $route = "hymn";
                else
                    $numberHymn = "";
            }
            else
            {
                $numberHymn = $request->request->get('numberEditHymn');
                $numberHymn = trim($numberHymn);
                if(preg_match("/^\d{1,3}a?b?$/", $numberHymn))
                    $route = "editHymn";
                else
                    $numberHymn = "";
            }

            if(null !== $numberHymn AND $numberHymn != "")
                return $this->redirectToRoute($route, array('num' => $numberHymn));
        }

        return $this->render("TimotheeModelBundle:Hymns:home.html.twig");
    }


    /**
     * @Route("/fill-bdd", name="fillBDD")
     */
    public function fillBDDAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $tab = explode("\n\n\n", $this->hymns);
        $hymns = [];

        foreach ($tab as $hymn) {
            $tab = explode("\n", $hymn);


            if(!empty($tab) AND $tab[0] != "")
            {
                $num = trim($tab[0]);
                $title = trim($tab[1]);
                $ref = trim($tab[2]);
                $text = "";

                for ($i = 3; $i < sizeof($tab); $i++) { 
                    $text .= trim(
                        preg_replace("/\t/", "<span style='padding-left:15px'></span>", $tab[$i])."<br>"
                    );
                }

                $text = preg_replace("/<br>\s*$/", "", $text);

                $hymn = new Hymn($title,$num,$ref,$text);
                $em->persist($hymn);

                array_push($hymns, $hymn);
            }

        }

        dump($hymns); die;

        // if(sizeof($hymns)>0) $em->flush();

        $request->getSession()->getFlashBag()->add('info', 'Les ' . sizeof($hymns) . ' chants ont bien été enregistrés !');
        return $this->redirectToRoute("home");
    }


    /**
     * @Route("/hymns", name="hymns")
     * @Method({"GET"})
     */
    public function getHymnsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $hymns = $em->getRepository("TimotheeModelBundle:Hymn")->findAll();

        if(empty($hymns))
            return new JsonResponse(array(), Response::HTTP_NOT_FOUND);


        $formatted = [];

        foreach ($hymns as $hymn) {
            array_push(
                $formatted,
                [
                    "id" => $hymn->getId(),
                    "title" => $hymn->getTitle(),
                    "num" => $hymn->getNum(),
                    "ref" => $hymn->getRef(),
                    "lyrics" => $hymn->getLyrics(),
                    "xml" => null !== $hymn->getMusicalPart() ? $hymn->getMusicalPart()->getXML() : null,
                    "xmlPath" => null !== $hymn->getMusicalPart() ? $hymn->getMusicalPart()->getFilePath() : null
                ]
            );       
        }

        return new JsonResponse($formatted);
    }

    /**
     * @Route("/hymns/{num}", name="hymn", requirements={"num"="\d+a?b?"})
     * @Method({"GET"})
     */
    public function getHymnAction($num)
    {
        $em = $this->getDoctrine()->getManager();

        $hymns = $em
                ->getRepository("TimotheeModelBundle:Hymn")
                ->findby(array("num" => $num));
        $hymn = null;

        foreach ($hymns as $h) { $hymn = $h; }

        if(null === $hymn)
            return new JsonResponse(array(), Response::HTTP_NOT_FOUND);


        $formatted = [];

        array_push(
            $formatted,
            [
                "id" => $hymn->getId(),
                "title" => $hymn->getTitle(),
                "num" => $hymn->getNum(),
                "ref" => $hymn->getRef(),
                "lyrics" => $hymn->getLyrics(),
                "xml" => null !== $hymn->getMusicalPart() ? $hymn->getMusicalPart()->getXML() : null,
                "xmlPath" => null !== $hymn->getMusicalPart() ? $hymn->getMusicalPart()->getFilePath() : null
            ]
        );       

        return new JsonResponse($formatted);
    }


    /**
     * @Route("/hymns/add", name="addHymn")
     * @Method({"GET","POST"})
     */
    public function addHymnAction(Request $request)
    {
        $hymn = new Hymn();
        $errors = [];

        $form = $this->createForm(HymnType::class, $hymn);

        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if($form->isValid() AND !$hymn->hasError())
            {
                $hymn->formatLyricsToBDD();
                if(null !== $hymn->getMusicalPart())
                    $hymn->getMusicalPart()->uploadFile();
                // dump($hymn); die;
                $em = $this->getDoctrine()->getManager();
                $em->persist($hymn);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info','Le chant a bien été enregistré en base de donnée !');
                return $this->redirectToRoute('home');
            }
            else
            {
                $errors = $hymn->getErrors();
            }
        }

        return $this->render("TimotheeModelBundle:Hymns:admin-hymn.html.twig",
            array(
                "addHymnForm" => $form->createView(),
                "errors" => $errors
        ));
    }


    /**
     * @Route("/hymns/edit/{num}", name="editHymn", requirements={"num"="\d+a?b?"})
     * @Method({"GET","POST"})
     */
    public function editHymnAction(Request $request, $num)
    {
        $em = $this->getDoctrine()->getManager();
        $hymns = $em->getRepository("TimotheeModelBundle:Hymn")->findBy(array("num" => $num));
        $errors = []; $hymn = null;


        foreach ($hymns as $h) { $hymn = $h; }

        if(null === $hymn)
            return $this->redirectToRoute("home");

        $hymn->formatLyricsFromBDD();
        $form = $this->createForm(HymnType::class, $hymn);

        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if($form->isValid() AND !$hymn->hasError())
            {
                $hymn->formatLyricsToBDD();
                if(null !== $hymn->getMusicalPart())
                    $hymn->getMusicalPart()->uploadFile();
                $em->persist($hymn);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info','Le chant a bien été enregistré en base de donnée !');
                return $this->redirectToRoute('home');
            }
            else
            {
                $errors = $hymn->getErrors();
            }
        }

        return $this->render("TimotheeModelBundle:Hymns:admin-hymn.html.twig",
            array(
                "addHymnForm" => $form->createView(),
                "ref" => $hymn->getRef(),
                "errors" => $errors
        ));
    }

}
