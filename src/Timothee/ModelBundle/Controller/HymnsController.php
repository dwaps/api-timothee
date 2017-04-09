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


336
Vous qui êtes parmi ceux
Lc 22
Vous qui êtes parmi ceux qui ont persévéré
Avec moi dans mon chemin au sein de mes épreuves,
Voici que je dispose du royaume en votre faveur. (bis)

Votre ennemi sans relâche vient vous assaillir.
Comme le froment votre âme est passée au crible
Mais sans cesse je prie que votre foi jamais ne défaille. (bis)

Je suis toujours avec vous jusqu'à la fin du monde.
Conservez votre courage, j'ai vaincu le monde.
À ma table dans mon royaume je vous inviterai. (bis)


337
Toi tu dis
Ap 3
Toi tu dis : Je me suis enrichi.
Toi tu dis : Je n'ai besoin de rien.
Mais tu ne vois pas
Que tu es misérable,
Aveugle et nu.

\tC’est pourquoi je te conseille
\tD’acheter de moi,
\tOui, de l’or éprouvé par le feu,
\tUn collyre pour oindre tes yeux
\tEt un vêtement blanc,
\tPour que tu sois riche et que tu voies,
\tPour que tu sois vêtu.

Moi je suis Jésus-Christ, ton Seigneur.
Je reprends et châtie ceux que j'aime.
Repens-toi, mon fils,
Reviens et sois fidèle,
Rempli de zèle.


338
Nous te contemplons
Hb 2
Nous te contemplons, Jésus le Seigneur,
Nous te contemplons couronné d’honneur,
Toi qui as souffert pour nous, pécheurs,
Toi notre sacrificateur.
Tu es remonté auprès de ton Père
Et tu t’es assis à sa droite.
Tu règnes avec lui
Et tu intercèdes pour les tiens.
Nous te contemplons
Et nous t’adorons, Seigneur.


339
Nous espérons en toi
Cl 1
Nous espérons en toi,
Toi, l’image du vrai Dieu
En qui tout fut créé,
Et qui réconcilias
Ce qui est dans les cieux,
Ce qui est sur la terre,
Avec notre Dieu, le Père.

Nous confessons ton nom,
Toi en qui Dieu a placé
Toute vraie plénitude.
Jésus, nous te louons
Car tu es le premier,
Tu soutiens toute chose.
Tous tes rachetés t’adorent.


340
Écoute-moi
Ps 50
Écoute-moi, ainsi je parlerai,
Prête l’oreille et je t’avertirai.
Je suis ton Dieu, ton sauveur et ton Père,
Ma main a fondé les cieux et la terre.

\tOffre des actions de grâce à ton Dieu,
\tEnvers le très-haut, accomplis tes voeux,
\tEt dans la détresse invoque-moi,
\tCar je te délivrerai et tu me glorifieras.

Je ne recevrai pas en sacrifice
Tes oeuvres bonnes, fruits de ta justice.
M’offrirais-tu tes richesses et tes biens ?
Tout ce qui est sous les cieux m’appartient.


341
Les tourments et le chagrin
Ps 16;116
Les tourments et le chagrin me tenaient,
La mort et l'angoisse m'environnaient.
Je me disais : Je suis bien malheureux.
Mais dans ta compassion tu m'as fait grâce, ô Dieu !
Éternel tu as entendu ma voix
Et tu as tendu ton oreille vers moi.
Tu m'as sauvé de toutes mes détresses
Et tu as changé mon deuil en allégresse.

\tComment rendrai-je à l’Éternel
\tSes nombreux bienfaits envers moi ?
\tJ'élèverai la coupe des délivrances.
\tJ'invoquerai son nom.

Celui qui a cultivé dans les pleurs
Moissonnera dans la joie, le bonheur.
Celui qui s'en est allé en pleurant
Récoltera les gerbes en un chant triomphant.
Ô Dieu, j'offrirai ma reconnaissance
Dans ta maison où règne ta puissance.
J'accomplirai mes voeux dans l'assemblée
Et je te louerai car tu m'as délivré.


342
Oui, voici je conduirai mon serviteur
Es 42;Ps 91
Oui, voici je conduirai mon serviteur,
Je le mènerai sur des sentiers qu'il ne connaît pas.
Oui, voici je bénirai mon serviteur.
J'aplanirai ses voies tortueuses,
Devant lui je changerai
Les ténèbres en lumière.

\tPuisqu'il m'aime, je le délivrerai,
\tJe le protègerai puisqu'il connaît mon nom.
\tS'il m'invoque, moi, je lui répondrai.
\tJe le couvrirai de gloire,
\tJe multiplierai ses jours
\tEt je lui ferai connaître mon salut.

Oui, c'est moi qui ai choisi mon serviteur.
Je le soutiendrai et je mettrai mon Esprit sur lui.
Car je suis l'Éternel, son Dieu, son sauveur.
Parce qu'il a du prix à mes yeux,
Je le prendrai par la main
Et je serai son guide.


343
N'ayez aucune crainte
1 Pi 3;Es 8
N'ayez aucune crainte, ne soyez pas troublés
Devant les épreuves et les dangers
Mais que dans votre coeur et dans votre pensée,
Jésus-Christ soit toujours sanctifié.

Que la crainte de Dieu règne dans votre coeur;
Il sera pour vous un sanctuaire.
Que Dieu soit honoré, toujours seul redouté,
Et le nom de Jésus sanctifié.


344
Aujourd'hui, si tu entends
null
Aujourd'hui si tu entends sa voix
Ne ferme pas ton coeur au Seigneur,
Et s'il frappe à ta porte, ouvre-lui sans tarder,
Reçois Jésus afin d'être sauvé.

Aujourd'hui si Dieu par sa parole
T'appelle à entrer dans son repos,
N'endurcis pas ton coeur, obéis sans tarder,
Viens à Jésus, tu seras déchargé.

Aujourd'hui c'est le jour du salut
Où tu entends la voix de Jésus.
Ne le méprise pas, non ne t'en moque pas,
Et le salut à tes yeux brillera.


345
Béni soit le nom de Dieu
Dn 2
Béni soit le nom de Dieu
D'éternité en éternité
Car c'est à lui qu'appartiennent
Toute puissance et toute sagesse.
C'est lui qui change les temps
Et les circonstances,
Qui renverse et établit
Les rois de la terre.
Aux sages il accorde la sagesse,
La science et l'intelligence,
Il révèle ce qui est caché,
Il sait ce qui est dans les ténèbres.
La lumière demeure avec lui,
Elle demeure avec lui.
Éternel, Dieu, je te loue,
Je te célèbre et te glorifie.
Tu as bien voulu donner
Sagesse et force à ton serviteur.
Ce qu'il t'avait demandé
Tu l'as fait connaître,
Et tu lui as révélé
Tes desseins cachés.
Ô Dieu, soit loué !


346
Louez le Seigneur
Ps 149
Louez le Seigneur, l'Éternel
Dans l'assemblée de ses fidèles !
Que tout son peuple dans la joie
Chante un cantique au roi des rois !
Oui, faites entendre tous vos chants
Et retentir vos instruments !
Par lui les humbles sont vêtus
De la parure du salut.
Que les louanges à notre Dieu
À jamais s'entendent en tout lieu !


347
Je chanterai des cantiques
Ps 108
\tJe chanterai des cantiques au Seigneur
\tEt je jouerai de mes instruments.
\tMon coeur est ferme, je veux louer Dieu sans cesse,
\tC'est là ma gloire !

Dieu a dit : Je triompherai
Oui c'est lui qui me donne la victoire.
Avec lui nous déploierons nos forces,
C'est lui qui détruira notre ennemi.


348
Je suis ton Dieu
Es 48
Je suis ton Dieu et je t'ai appelé
D'une contrée, d'un pays éloignés;
Oui, je savais que tu me serais infidèle
Et que ton coeur depuis toujours était rebelle.
Dans mon amour je t'ai mis à l'épreuve
Pour que tu sois purifié.

\tApproche-toi de moi, écoute-moi
\tCar sur ton coeur est gravé mon saint nom.
\tApproche-toi de moi, obéis-moi;
\tJe rassasierai à jamais ton âme.

Je te conduis sur ta voie, ton chemin
Et je t'instruis pour ta joie, pour ton bien.
Si tu écoutes et reçois mes commandements,
Si tu les gardes et les pratiques en me servant,
Oui, ton bonheur coulera comme un fleuve,
Et ton salut comme la mer.


349
Que mon âme
Ps 145;146
\tQue mon âme, jamais ne se lasse
\tDe bénir le Seigneur et sa grâce.
\tAussi longtemps que je vivrai,
\tÉternel, oui, je te bénirai. (fin : Bis)

Dieu est bon pour ses enfants;
Il connaît tous leurs tourments.
Il soutient ceux qui tombent
Et relève les humiliés.

Dieu entend tous ceux qui crient;
Il est près de ceux qui prient.
Il voit ceux qui le craignent,
Il exauce leurs désirs.


350
Quand en moi
Ps 94;Rm 15
Quand en moi s'agitent mes pensées,
Toi, Seigneur, tu consoles mon âme.
Quand je dis : Il ne voit pas ma cause,
Dieu me parle et je reprends courage.

\tTa parole est ma consolation, Seigneur.
\tElle remplit mon âme de ta joie.
\tPar sa persévérance et sa consolation,
\tJ'ai dans le coeur l'éternelle espérance.
\tEt quand viendra la fin de cet étroit chemin,
\tJ'hériterai du grand salut.

Quand le monde répand sa tristesse,
C'est la mort qui menace mon âme.
Mais les jugements de ta parole
Me reprennent et me donnent ton zèle.


351
Nous savons que notre maison
2 Co 5;2 Th 1;Ap 22
Nous savons que notre maison sur la terre
N’est que passagère et sera détruite,
Mais nous avons une maison dans les cieux
Que le Seigneur a faite pour nous.

\tHeureux ceux qui lavent leur manteau
\t(Heureux ceux qui peuvent entrer)
\tPour entrer dans la cité,
\t(Dans la cité,)
\tEt manger de l’arbre de la vie
\t(Pour avoir la vie)
\tDans la maison du Seigneur.
\t(Du Seigneur : 1ere fois) 

Jamais la chaleur, la soif et la disette,
Dans ce lieu paisible ne pourront nous nuire.
Car notre Dieu veut nous donner du repos
Quand Jésus apparaîtra du ciel.


352
Ce n'est pas par la force
Za;Ti;1 Tm;2 Tm

\tCe n’est pas par la force
\tNi par la puissance,
\tMais par mon Esprit
\tQue s’accomplira cette oeuvre.

\tCoda:
\tQue s’accomplra cette oeuvre.

Toi, petit troupeau,
Garde fidèlement
Le trésor que je t’ai donné
Et accomplis mon oeuvre.

Ne sois pas honteux,
Préserve ta conscience.
Lutte en mettant ton espérance
Dans le Dieu des fidèles.

En gardant la foi,
Combat le bon combat.
Proclame toujours ma parole;
Elle seule sauvera.


353
Bien-aimés, comme des enfants
1 Pi 1
\tBien-aimés, comme des enfants nouveau-nés,
\tToujours il vous faut désirer
\tLe lait divin de la parole de vérité.
\tBien-aimés, si vous avez vraiment goûté
\tDe notre Seigneur la bonté,
\tAlors il vous faut désirer
\tLa parole, bien-aimés !

L'homme vivra non pas de pain seulement
Mais de ce qui sortira de la bouche du Dieu vivant.
Ô, Jésus-Christ, tu es la parole de vie,
Le pain céleste qui fait vivre ceux
Qui, de toi, se nourrissent.


354
Ô Dieu de toute grâce
1 Pi 5
Ô Dieu de toute grâce,
Tu nous as appelés
À ta gloire éternelle
Par Jésus, le sauveur.
Après un peu de temps
Passé dans la souffrance,
Tu nous affermiras,
Ta main nous formera.

La foi est épurée
Au travers du creuset.
Mais au jour du Seigneur,
Elle nous vaudra l'honneur
D'avoir aimé Jésus
Sans l'avoir jamais vu;
Nous aurons dans la joie
Le salut de la foi.


355
Nous avons connu
1 Jn 3
Nous avons connu l’amour
Car Jésus s’est donné pour nous.
Nous avons connu l’amour;
Donnons-nous aussi,
Donnons pour les frères notre vie.

Non, je ne veux pas rejeter
La grâce de Dieu,
Car seule elle remplit ma vie
Du fruit de la justice.

Non, rien n’est saint ni bon en moi,
Mais il m’a choisi.
Dieu veut que je porte les fruits
D’amour et de justice.


356
Jésus dit à son Père
Mt 11:1 Co 1
Jésus dit à son Père:
oh ! mon Père, je te loue,
Car les choses célestes
Sont cachées aux sages
De ce monde.

\tMais tu as révélé aux enfants
\tTes merveilles cachées.
\tLe royaume de Dieu est donné
\tÀ tous ceux qui leur ressemblent.
\tTu les as révélées aux enfants,
\tÀ chacun des petits
\tQui confessent la foi en ton nom.
\tJe te loue, ô Père, qu’il en soit ainsi.

Tu détruis la sagesse,
Celle des intelligents.
Où se trouve le sage ?
Ô Dieu, tu le frappes
De folie.


357
Ô vous qui avez faim
Mt 5
Ô vous qui avez faim
Et qui avez soif
D'une vraie justice,
Vous qui êtes blessés
Et qui n'attendez plus de guérison,
Il est une promesse
Donnée par Jésus
Dans son évangile:
Oui, vous serez rassasiés.

Ô vous qui soupirez
Après une paix
Qui soit éternelle,
Oh venez à Jésus
Qui la donne à celui qui croit en lui.
Si vous la procurez
À votre prochain,
Dieu fait la promesse
De vous appeler ses fils.


358
Quand nous étions étrangers
Rm 6;2 Co 5
Quand nous étions étrangers
À la vie éternelle, la vie divine,
Nous n'étions que des pécheurs
Esclaves du péché et de nous-mêmes.
Mais maintenant, étant affranchis du péché,
Nous marchons dans la sainteté.

\tSi quelqu'un est en Jésus
\tVoici tout est nouveau,
\tIl est une nouvelle créature.
\tSi quelqu'un est en Jésus
\tVoici tout est nouveau,
\tLes choses anciennes sont passées,
\tVraiment passées.

Christ étant ressuscité
Et vivant aujourd'hui
Pour Dieu son Père,
Nous devons nous regarder
Comme vivants en lui
Pour notre Père.
Livrons nos membres
Comme instruments de justice
À Dieu qui nous a délivrés.


359
Plus que les gardes
Ps 130
Plus que les gardes s'attendent au matin,
J'espère en l'Éternel, mon Dieu.
Sur sa parole je compte ardemment
Et à lin je m'attends.

Peuple de Dieu fidèle,
Peuple du Seigneur,
Attends-toi à l'Éternel, toujours.
Car en Jésus se trouvent en abondance
La pleine délivrance et le pardon.


360
Prends courage !
null
Prends courage le Seigneur t'appelle,
N'aie donc pas de crainte et fortifie-toi,
Jésus s'adresse à toi, il te dit \"Lève-toi !\"
Sa parole est toute-puissante,
Elle redonne vie à tous ceux qui croient.

\tDites à ceux qui ont le coeur troublé:
\tVoici Jésus, il vient pour vous sauver.
\tOui, reprenez courage et levez-vous !

Prends courage, Jésus te pardonne.
Il a le pouvoir d'ôter les péchés
Car il s'adresse à toi, il te dit : \"Crois en moi !\"
Sa parole est pleine de grâce,
Elle retentit en tous ceux qui croient.
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
