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


101
J'aime l'éternel
Ps 116
J'aime l'Éternel, car il entend ma voix,
(J'aime l'Éternel, car il entend ma voix)
Et il a penché son oreille vers moi.
Et je le loue, parce qu'il m'a exaucé.
(Et je le loue parce qu'il m'a exaucé)
Il est devenu mon salut.
J'étais malheureux, mais mon Dieu m'a sauvé.
(J'étais malheureux, mais mon Dieu m'a sauvé)
Il a délivré mon âme de la mort,
Et mes yeux des larmes, mes pieds de la chute.
Il a détaché mes liens (il a délivré mon âme de la mort !)

J'aime l'Éternel, car il m'a fait du bien.
Il est mon secours et mon bouclier.
(J'aime l'Éternel, car il m'a fait du bien)
L'Éternel est un Dieu plein de compassion,
Je l'invoquerai toute ma vie.
(L'Éternel est un Dieu plein de compassion)
J'invoquerai le nom, le nom de l'Éternel,
Et j'élèverai la coupe des délivrances.
(J'invoquerai le nom, le nom de l'Éternel)
Et je chanterai devant tout son peuple,
Tous ses bienfaits envers moi.
(Et je chanterai ses bienfaits envers moi)


102
Car je sais
Rm 8
\tCar je sais que ni la mort, ni la vie,
\tNi les anges, ni les dominations,
\tNi les choses à venir, ni les choses présentes,
\tNe pourront me séparer de mon Dieu.
\tCar je sais qu'aucune autre créature,
\tNi la hauteur, même la profondeur,
\tNe pourront me séparer de l'amour de Dieu,
\tManifesté en Jésus-Christ, notre Seigneur.

Si Dieu est pour nous, qui sera contre nous ?
Lui qui n'a pas épargné son Fils
Mais qui l'a livré pour nous,
Comment ne nous donnera-t-il pas aussi
Toutes choses avec Lui ?


103
Celui qui vaincra
Ap 2;3
Celui qui vaincra, je ferai de lui (bis)
Une colonne dans le temple de mon Dieu.
Je le ferai asseoir avec moi sur mon trône.
Celui qui vaincra sera revêtu (bis)
De vêtements blancs.
Je confesserai son nom devant mon Père et devant ses anges
Parce qu'il en est digne.

Celui qui vaincra, je lui donnerai (bis)
L'étoile du matin. Je lui donnerai à manger
De l'arbre de la vie du paradis de Dieu.
Entends ce que l'Esprit dit aux églises, (bis)
Et sois vigilant.
Sois fidèle jusqu'à la mort, et je te donnerai la couronne,
La couronne de vie. (bis)


104
Ton trône, ô Dieu, est éternel
Hb 1
Ton trône, ô Dieu, est éternel. (bis)
Le sceptre de ton règne est un sceptre d'équité.
Tu as aimé la justice, tu as haï l'iniquité.
C'est pourquoi, ô Dieu, ton Dieu t'a oint
D'une huile de joie au-dessus de tes égaux.
Mais toi, Seigneur, tu restes le même,
Tes années ne finiront pas.

Toi, Seigneur, au commencement (bis)
Tu as fondé la terre et tu as formé les cieux.
Ils sont l'ouvrage de tes mains;
Tu subsistes, mais ils passeront.
Ils vieilliront tous; tu les rouleras
Comme un manteau et tous ils seront changés.
Mais toi, Seigneur, tu restes le même,
Tes années ne finiront pas.


105
Béni soit notre Dieu
1 Pi 1
Béni soit notre Dieu, Père de notre Seigneur Jésus-Christ,
Qui nous a régénérés selon sa grande miséricorde,
Oui, pour une espérance vivante,
Par la résurrection de Jésus-Christ
D'entre les morts, oui, pour un héritage
Réservé dans les cieux, réservé dans les cieux.

Il nous a rachetés, non pas par de l'argent ou de l'or,
De la vaine manière de vivre héritée de nos pères,
Mais par le sang précieux de Christ,
Comme d'un agneau, comme d'un agneau sans tache
Et sans défaut, prédestiné avant
La fondation du monde. Loué soit notre Dieu !


106
Dieu a choisi
1 Co 1;Rm 5
Dieu a choisi les choses folles du monde
Pour confondre les sages.
Dieu a choisi les choses faibles du monde
Pour confondre les fortes.
Dieu a choisi les choses viles du monde,
Celles qu'on méprise, celles qui ne sont pas,
Pour réduire à rien celles qui sont.
Afin que nulle chair ne se glorifie devant Dieu.

\tOr, c'est par lui que vous êtes en Jésus-Christ
\tQui, de par Dieu, a été fait pour vous sagesse,
\tJustice, sanctification et rédemption.

Lorsque nous étions encore pécheurs,
Oui, Christ est mort pour nous.
(bis)
Et maintenant que nous sommes justifiés,
Nous sommes justifiés par la foi,
Nous sommes réconciliés avec Dieu.
De la colère, nous serons sauvés par Jésus-Christ.


107
Ce n'est pas nous
Ep 2;Jn 14;15
Ce n'est pas nous qui l'avons choisi
Mais c'est lui qui nous a établis
Afin que nous allions et que nous portions du fruit.

\tCar nous sommes son ouvrage.
\tNous avons été créés en Jésus-Christ
\tPour de bonnes œuvres
\tQue Dieu a préparées d'avance,
\tPour de bonnes œuvres, qui sont préparées d'avance
\tAfin que nous les pratiquions. (bis)

Il est le cep, nous sommes les sarments.
Et celui qui demeure en lui
Et en qui il demeure porte beaucoup de fruit.

Celui qui croit, qui croit en Jésus,
Il fera, oui, les œuvres qu'il fit,
Il en fera aussi de plus grandes que lui.


108
Je me réjouirai
Es 61
Je me réjouirai en l'Éternel, mon Dieu, en l'Éternel mon Dieu,
(Oh ! je me réjouirai en Dieu, en l'Éternel !)
Mon âme sera ravie d'allégresse en lui, en l'Éternel.
(Alléluia, alléluia ! Gloire à lui, gloire à notre Dieu !)
Car il m'a revêtu des vêtements du salut,
(Oh ! je me réjouirai dans le Seigneur, je serai ravi d'allégresse)
Et il m'a couvert du manteau de la délivrance.
(En l'Éternel, le Dieu de ma justice)
Il m'a couvert du manteau de la délivrance.
(Car il m'a revêtu de son salut)
Je me réjouirai en l'Éternel, mon Dieu, en l'Éternel mon Dieu
(Oh ! je me réjouirai en Dieu, en l'Éternel !)
Mon âme sera ravie d'allégresse en lui,
(Alléluia, alléluia ! Gloire à lui !)
En l'Éternel, en l'Éternel, mon Dieu.
(Gloire à notre Seigneur, à notre Sauveur !)


109
Je t'instruirai
Ps 32
Je t'instruirai et je te montrerai
La voie que tu dois suivre.
Je te conseillerai, je te conseillerai,
J'aurai le regard sur toi, j'aurai le regard sur toi.
Je t'instruirai et je te montrerai
La voie que tu dois suivre.
Je te conseillerai, j'aurai le regard sur toi.


110
À celui qui peut
Jd 24,25
À celui qui peut nous préserver
De toute chute, oui, de toute chute,
Et nous faire paraître devant lui
Irrépréhensibles et dans l'allégresse,
À notre Dieu, par Jésus notre Seigneur,
À lui soient la gloire et la majesté,
La force et la puissance
Dès avant tous les temps.
Et maintenant, et dans tous les siècles,
À lui soient la gloire et la majesté,
La force et la puissance
Dès avant tous les temps,
Dans tous les siècles, amen !


111
Frères, n'aimez pas le monde
1 Jn 2; Ti 2; 1 Co 2; 1 Pi 1
\tRefrain :
\tFrères, n'aimez pas le monde,
\tNi tout ce qui est dans le monde.
\tSi quelqu'un aime le monde,
\tL'amour du Père n'est point en lui.
\tEt le monde passera et sa convoitise aussi.

\tCoda :
\tMais celui qui fait la volonté de Dieu
\tDemeure éternellement.

Car la grâce de Dieu,
Source de salut pour tous les hommes,
Nous enseigne à renoncer
Aux convoitises mondaines,
Et à vivre dans l'attente
De la bienheureuse espérance,
La manifestation de notre Sauveur Jésus-Christ.

Nous n'avons pas reçu
L'esprit du monde, mais l'Esprit qui vient de Dieu
Afin que nous connaissions
Ce que Dieu nous a donné par sa grâce,
Nous qui sommes gardés
Dans la puissance de Dieu par la foi,
Pour le grand salut qui sera bientôt révélé.


112
Que le Dieu de paix
1 Th 5
Que le Dieu de paix vous sanctifie
Lui-même tout entiers.
Ainsi que tout votre être, l'esprit, l'âme et le corps,
Soit conservé, sans défaut, sans tache
Pour le retour du Seigneur Jésus.
Celui qui vous a appelés est fidèle,
Et c'est lui qui le fera (bis)


113
Servez Christ, le Seigneur
Cl 3;4
\tServez Christ, le Seigneur, rachetez le temps ! (bis)
\tEt chantez à Dieu (bis)
\tDe tout votre cœur
\tSous l'inspiration de la grâce.

Quoi que vous fassiez, en paroles ou en œuvres,
Oui, faites tout au nom du Seigneur Jésus
En rendant grâces, par lui, à Dieu le Père.
Et prenez garde au ministère que vous avez reçu,
Reçu dans le Seigneur,
Afin de le bien remplir, le bien remplir.

Que la paix de Christ, à laquelle vous êtes appelés
Pour former un seul corps, règne dans vos cœurs.
Et que la Parole de Christ habite en vous.
Et revêtez-vous, revêtez-vous de l'amour qui est le lien
Le lien de perfection.
Et soyez reconnaissants, reconnaissants.


114
Heureux celui
Ps 65
\tHeureux celui que tu choisis,
\tQue tu admets dans ta présence,
\tPour qu'il habite dans tes parvis,
\tDans ta maison !

Nous nous rassasieron
Du bonheur de ta maison,
De la sainteté de ton temple.
Nous nous rassasierons,
Du bonheur de ta maison,
De la sainteté de ton temple (bis)


115
Il n'y a de salut
Ac 4;Jn 14
\tIl n'y a de salut en aucun autre nom,
\tIl n'y a de salut en aucun autre nom que celui de Jésus.
\tCar il n'y a sous le ciel
\tAucun autre nom qui ait été donné
\tParmi les hommes,
\tPar lequel nous devions être sauvés. (bis)

Et ce nom, c'est celui de Jésus
Qui a dit : \"Je suis\".
Il a dit : \"Je suis le chemin, la vérité, je suis la vie;
Nul ne vient au Père que par moi.\"


116
Seigneur, tu as été pour nous un refuge
Ps 90
\tSeigneur, tu as été pour nous un refuge,
\tDe génération en génération.
\tAvant que tu aies créé la terre et le monde,
\tD’éternité en éternité tu es Dieu.

Aie pitié de nous Éternel, toi qui fais
Rentrer les hommes dans la poussière,
Et qui leur dis : fils de l’homme,
Retournez, oui, retournez !
Car à tes yeux, Seigneur,
Mille ans sont comme une veille,
Une veille de la nuit, (bis)
De la nuit.

Qui prend garde à la force de ton courroux,
Selon la crainte qui t’est due ?
Nos années s’évanouissent
Comme un son. Enseigne-nous
À bien compter nos jours
Afin que nous appliquions
À la sagesse notre cœur, (bis)
Notre cœur.
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
                dump($hymn); die;
                $hymn->getMusicalPart()->uploadFile();
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
