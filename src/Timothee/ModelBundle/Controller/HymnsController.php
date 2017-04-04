<?php

namespace Timothee\ModelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Timothee\ModelBundle\Entity\Hymn;
use Timothee\ModelBundle\Form\HymnType;


class HymnsController extends Controller
{

    private $hymns = "


75
En vérité, en vérité, je vous le dis
Jn 6;8;10;11;5;14
En vérité, en vérité, je vous le dis:
Je suis le pain, le pain de vie.
(bis)
Ma chair, mon sang sont une nourriture;
Celui qui en mange demeure en moi.
Celui qui vient à moi n'aura plus faim.
Celui qui croit en moi n'aura plus soif.

En vérité, en vérité, je vous le dis:
Je suis la lumière du monde.
(bis)
Cette lumière est la vraie lumière
Qui éclaire le cœur de tous les hommes.
Qui la suit ne marche plus dans la nuit
Mais il a la lumière de la vie.

En vérité, en vérité, je vous le dis:
Je suis la Porte des brebis.
(bis)
Quiconque entre par moi sera sauvé,
Il trouvera de très beaux pâturages.
Je suis venu pour vous donner la vie,
Pour vous combler de vie en abondance.

En vérité, en vérité, je vous le dis:
Je suis le berger des brebis.
(bis)
Le berger donne sa vie pour les brebis.
Elles entendent ma voix, je les connais.
Elles ont la vie, ne périront jamais.
Personne ne les ravira de ma main.

En vérité, en vérité, je vous le dis:
Je suis résurrection et vie.
(bis)
Et l'heure vient, elle est déjà venue,
Où les morts entendront la voix de Dieu.
Tous ceux qui l'auront entendue vivront.
Qui croit en moi vit éternellement.

Coda :
\tEn vérité, en vérité, je vous le dis:
\tJe suis le chemin et la vie.
\tEn vérité, en vérité, je vous le dis:
\tJe suis la vérité, la vie.


76
Réjouissez-vous (canon)
Ph 4;Ep 5
A. Réjouissez-vous...
B. ...réjouissez-vous
C. Réjouissez-vous...
D. ...toujours dans le Seigneur !
Et rendez grâces, et rendez grâces
Et rendez grâces en toute chose au Seigneur !
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
    public function fillBDDAction()
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
                    "lyrics" => $hymn->getLyrics()
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

        $hymn = $em
                ->getRepository("TimotheeModelBundle:Hymn")
                ->findby(array("num" => $num));

        if(empty($hymn))
            return new JsonResponse(array(), Response::HTTP_NOT_FOUND);


        $formatted = [];

        foreach ($hymn as $h) {
            array_push(
                $formatted,
                [
                    "id" => $h->getId(),
                    "title" => $h->getTitle(),
                    "num" => $h->getNum(),
                    "ref" => $h->getRef(),
                    "lyrics" => $h->getLyrics()
                ]
            );       
        }              

        return new JsonResponse($formatted);
    }


    /**
     * @Route("hymns/add", name="addHymn")
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
                dump($hymn); die;
                // $em = $this->getDoctrine()->getManager();
                // $em->persist($hymn);
                // $em->flush();

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
     * @Route("hymns/edit/{num}", name="editHymn", requirements={"num"="\d+a?b?"})
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
