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


77
Ô Dieu, prête l'oreille
Ps 55
Ô Dieu, prête l'oreille et entends ma prière !
Ô Dieu, ne te dérobe pas à mes supplications !
Écoute-moi et réponds-moi !
J'erre çà et là dans mon chagrin et mon âme s'agite,
Car l'ennemi m'entoure, il me poursuit ! Il me poursuit !

Et moi, je crie à Dieu, l'Éternel me sauvera !
Le soir, le matin, à midi, je soupire et je gémis
Et mon Sauveur entend ma voix.
Il me rend la paix et me délivre; quand je suis dans la crainte
Je me confie en toi ! tu me soutiendras, tu me soutiendras !


78
Mon Dieu, mon Dieu pourquoi ?
Ps 22
Mon Dieu, mon Dieu, pourquoi m'as-tu abandonné,
Et t'éloignes-tu sans me secourir ?
Mon Dieu, mon Dieu, pourquoi, sans écouter mes plaintes,
T'éloignes-tu sans me secourir ?
Des scélérats rôdent autour de moi,
Semblables au lion qui déchire et rugit.
Mon Dieu, je crie le jour et tu ne réponds pas.
Dans la nuit, et je n'ai point de repos.

Oh ! Ne T’éloigne pas, quand la détresse est proche,
Quand personne ne vient à mon secours.
Ils ont percé mes mains, ils ont percé mes pieds,
Et je pourrais compter tous mes os.
Ils se sont partagé mes vêtements,
Ils ont tiré au sort ma tunique.
Pourtant tu es le Saint, tu délivrais nos pères.
Ils criaient à toi; ils étaient sauvés.
Oh ! Ne t'éloigne pas, ne cache pas Ta face
Toi qui es ma force, viens à mon secours,
Éternel, Éternel !


79
Je vous exhorte donc
Rm 12
\tJe vous exhorte donc, mes frères, oui mes frères,
\tPar les compassions de Dieu,
\tJe vous exhorte donc, mes frères,
\tÀ offrir vos corps comme un sacrifice vivant,
\tSaint, agréable à Dieu,
\tCe qui sera de votre part
\tUn culte raisonnable, un culte raisonnable.

Ne vous conformez pas au monde, mais soyez transformés
Par le renouvellement de l'intelligence.

Afin de discerner la volonté, la volonté de Dieu,
Ce qui est bon et parfait, bon et agréable.


80
Les sacrifices
Ps 32;51
\tLes sacrifices qui plaisent à l'Éternel,
\tC'est un esprit brisé et une âme humiliée.
\tÉternel ! Crée en moi un cœur purifié,
\tUn esprit disposé à écouter ta voix.

Éternel Dieu ! Tant que je me suis tu,
Mes os se consumaient, mon âme gémissait.
Alors je dis : \"Mon Dieu, j'avoue mes transgressions,
Ne me rejette pas, accorde Ton pardon !\"
Tu détournas les yeux de mon iniquité.
Tu me rendis la joie, la joie de mon salut.


81
Mon fils
Pr 1;Jc 1
\tMon fils, si des pécheurs te séduisent,
\tNe te laisse pas gagner par eux.
\tMon fils, s'ils te disent : \"Viens avec nous !\"
\tDétourne ton pied de leur sentier,
\tNe te mets pas en chemin avec eux. (fin : bis)

Quelqu'un mettra-t-il du feu dans son sein
Sans danger qu'il ne s'enflamme ?
Peut-on marcher sur des charbons ardents
Sans que les pieds ne soient brûlés ?

Chacun de nous est tenté,
Amorcé par sa propre convoitise.
La convoitise enfante le péché,
Et le péché produit la mort !

Supporte avec patience la tentation,
Persévère dans l'épreuve;
Tu recevras la couronne de vie
Que le Seigneur nous a promise.


82
Heureux tous ceux...
Ps 119
\tHeureux tous ceux qui sont intègres dans leur voie,
\tQui marchent dans la loi de Dieu.
\tHeureux ceux qui gardent ses commandements,
\tQui le suivent de tout leur cœur.

Celui qui marche dans ses voies
Ne commet plus d'iniquités.
Tu as prescrit tes ordonnances
Pour qu'on les observe avec soin.

\tPuissent mes actions être bien réglées,
\tEt que je garde tes statuts !
\tAlors je ne rougirai point devant toi,
\tDevant tous tes commandements.

Je te louerai dans la droiture.
Je serre ta parole dans mon cœur
Afin de ne pas retomber.
Béni sois-Tu, ô Éternel !

\tHeureux tous ceux qui sont intègres dans leur voie,
\tQui marchent dans la loi de Dieu.
\tHeureux ceux qui gardent ses commandements,
\tQui le suivent de tout leur cœur.


83
Demandez
Mt 7;Jn 15;Lc 18
\tDemandez, on vous donnera,
\tOui, cherchez et vous trouverez !
\tFrappez et l'on vous ouvrira,
\tCar quiconque demande reçoit.

Si mes paroles demeurent en vous,
Et si vous demeurez en moi,
Demandez tout ce que vous voudrez;
Cela vous sera accordé.

Priez, ne vous relâchez donc pas !
Dieu justifiera ses élus.
Et ceux qui crient à lui jour et nuit
Sans tarder seront exaucés.


84
Qui est comme toi ?
Ex 15
\tQui est comme toi parmi les dieux ?
\tQui est comme toi, magnifique en sainteté,
\tDigne de louanges, opérant des prodiges ?
\tSoyez saints, car je suis saint !

Par ta bienveillance tu nous as conduits.
Par ta puissance tu me diriges
Vers la demeure de ta sainteté.

Tu m'amèneras, tu m'établiras
Sur la montagne de l'héritage,
Au sanctuaire fondé par tes mains.


85
À lui soit la gloire
Ep 3
\tÀ lui soit la gloire dans l'Église et en Jésus-Christ,
\tDans toutes les générations, aux siècles des siècles !
\tGloire à celui qui peut faire, par la puissance qui agit,
\tInfiniment au-delà de ce que nous demandons.
\tÀ lui soit la gloire dans l'Église, et en Jésus-Christ !

Je fléchis les genoux devant le Père,
Duquel tire son nom toute famille
Dans les cieux et sur la terre,
Afin qu'il nous donne, selon la richesse de sa gloire,
D'être puissament fortifiés
Par son Esprit dans l'homme intérieur.

Que Jésus dans nos cœurs par la foi vive,
Enracinés et fondés dans l'amour,
Pour comprendre sa longueur,
Sa grande profondeur qui surpasse toute connaissance,
En sorte que, par son Esprit,
La plénitude remplisse notre cœur.


86
Louez le nom de l'Éternel
Ps 135
\tLouez ! Louez le nom de l'Éternel !
\tLouez ! Louez le nom de Dieu !
\tLouez, serviteurs de l'Éternel
\tQui vous tenez dans la maison de l'Éternel.
\tLouez ! Louez le nom de l'Éternel ! Louez !
\tLouez dans les parvis de sa maison.
\tLouez l'Éternel, car l'Éternel est bon !
\tChantez à son nom, car il est favorable !
\tCar l'Éternel nous a choisis.

Je sais que l'Éternel est grand !
Oui, notre Seigneur est au-dessus de tous les dieux.
Tout ce que l'Éternel veut, il le fait,
Dans les cieux et sur la terre,
Dans les mers et dans tous les abîmes.


87
Si donc vous êtes ressuscités
Cl 3;Ph 3
Si donc vous êtes ressuscités,
Êtes ressuscités avec Christ,
Alors cherchez les choses d'en-haut,
Où Christ est à la droite de Dieu.
Affectionnez-vous aux choses d'en-haut
Et non à celles qui sont sur la terre.

\tCar vous êtes morts et votre vie est cachée avec Christ.
\tSi donc vous êtes ressuscités,
\tAlors cherchez les choses d'en-haut,
\tOù Christ est à la droite de Dieu.

Mais notre cité est dans les cieux
D'où nous attendons aussi Jésus.
Et quand Christ, notre vie, paraîtra,
Alors nous paraîtrons avec lui.
Dans sa gloire il nous emportera,
Et il nous rendra semblables à lui.


88
Tu es la source d'eau vive
Jr 17
\tTu es la source d'eau vive, grande est ma plaie !
\tGuéris-moi, Éternel, et je serai guéri !
\tJe viens à toi, mon seul refuge et mon appui;
\tÔ mon Dieu, sauve-moi et je serai sauvé !

Le péché écrit avec un burin de fer,
Devant Dieu est gravé sur la table des cœurs,
Il attire sur nous le jour du malheur;
Nous avons allumé le feu de sa colère.

Le cœur de l'homme est tortueux par-dessus tout.
L'Éternel éprouve le cœur, sonde les reins,
Rend à chacun selon l'œuvre de ses mains
Et manifeste la grandeur de son courroux.


89
Oh ! Soumettez-vous à Dieu !
Jc 4
\tOh ! Soumettez-vous à Dieu !
\t(Soumettez-vous à Dieu !)
\tApprochez-vous de lui;
\tIl s'approchera de vous.
\t(Approchez-vous de lui !)
\tNe lui résistez plus.
\tHumiliez-vous devant lui, il vous élèvera.

D'où peuvent venir vos luttes
Et d'où viennent vos querelles ?
N'est-ce pas de vos passions
Qui combattent dans vos membres ?

Et si nous aimons le monde
Nous sommes des adultères.
Dieu aime avec jalousie
L'Esprit Saint qui nous habite.

Oui, sentons notre misère,
Soyons dans le deuil, les larmes.
Changeons la joie en tristesse
Nettoyons nos mains souillées !


90
Servez l'Éternel
Ps 100;105;106;116;130
\tServez l'Éternel avec joie !
\tIl nous a faits, nous sommes à lui.
\tServez l'Éternel avec joie !
\tCélébrez-Le, bénissez son nom !

Car si tu gardais le souvenir de nos iniquités, ô Éternel,
Qui donc subsisterait devant toi ?
Seigneur, qui pourrait subsister devant toi ?

\tChantez, chantez à l'Éternel !
\tJ'étais affaibli, il m'a sauvé.
\tChantez, chantez à l'Éternel !
\tGlorifiez-vous de son saint nom !

Car l'Éternel m'a fait du bien,
Il a délivré mon âme de la mort.
Le pardon se trouve auprès de lui.
Heureux qui observe et pratique ses lois !


91
Il t'a fait sortir
Dt 4;6;7;8;11
Il t'a fait sortir de la maison de servitude.
Il a fait jaillir pour toi l'eau vive du rocher.
Il t'a nourri de la manne que tu ne connaissais pas
Afin de t'humilier et de t'éprouver
Pour te faire ensuite du bien !
Si tu écoutes et si tu observes ses ordonnances,
L'Éternel, ton Dieu, t'aimera et te bénira.
Si tu aimes de toutes tes forces
Et de toute ton âme l'Éternel, ton Dieu,
Et si tu le cherches de tout ton cœur, alors tu le trouveras.

Tous les jours de ta vie sur ton âme, sur ton âme,
Veille attentivement et prends garde, prends garde à toi
De crainte que tu n'oublies les choses que tu as vues.
Car l'homme ne vit pas de pain seulement
Mais de toute parole de Dieu !
Ne t'allie pas aux nations qui servent les idoles,
Car tu es un peuple saint pour l'Éternel ton Dieu.
Fais tout ce qui est droit
Et ce qui est bien aux yeux de l'Éternel.
Et garde-toi d'oublier l'Éternel, l'Éternel, ton Dieu.


92
Éternel, mon dieu, je t'invoque
Ps 141;142;143
\tÉternel, mon Dieu, je t'invoque,
\tOh ! Viens en hâte auprès de moi !
\tPrête l'oreille à ma voix !
\tQuand je t'invoque, que ma prière soit devant toi !

Que ma prière soit devant toi comme l'encens,
Et l'élévation de mes mains comme l'offrande,
Comme l'offrande du soir.
De ma voix je crie à lui, de ma voix je l'implore.
Je répands ma plainte, je lui raconte ma détresse.

Et quand mon esprit est abattu dans mon cœur,
Exauce-moi dans ta justice, ô mon Sauveur,
Dans ta justice, Seigneur !
Ô Dieu, tu es mon refuge, mon partage sur la terre,
Mon libérateur, le rocher de mon salut !

\tÉternel, mon Dieu, je t'adore
\tCar par ta grâce tu m'as sauvé
\tJe te livre mon âme, mon corps,
\tPour te servir à la louange de ta gloire (bis)


93
L’Esprit du Seigneur
Es 61
L’Esprit du Seigneur l’Éternel est sur moi,
Car l’Éternel m’a choisi pour porter aux malheureux
De bonnes nouvelles. Il m’a envoyé

Pour guérir ceux qui ont le cœur brisé,
Pour proclamer aux captifs la liberté,
Et aux prisonniers la délivrance.
Pour consoler tous les affligés,
Pour leur donner un diadème,
Au lieu de cendre, au lieu du deuil,
Un vêtement de louange,
Une huile de joie, au lieu d’un esprit abattu.

L’Esprit du Seigneur, l’Éternel est sur Christ,
Car l’Éternel l'a choisi pour porter aux malheureux
De bonnes nouvelles. Il L’a envoyé (Pour guérir...)


94
Réjouis-toi
null
Réjouis-toi, réjouis-toi en l'Éternel !
Mets en lui ton espoir; il entend ta voix.
Sois sans crainte, car il vient à ton secours.
Car il est avec toi pour te délivrer.
Il fait jaillir des fleuves sur les dunes,
Et il change le désert en sources d'eau.
Il fait germer l'herbe sur les montagnes.
Alléluia, bénissons-le !
Lui qui fait marcher les aveugles
Sur un chemin nouveau.

Car l'Éternel est un Dieu juste,
Heureux tous ceux qui espèrent en lui;
Il leur donne du pain dans l'angoisse,
Et dans la détresse donne de l'eau.
Il te fera grâce, quand tu crieras.
Quand tu crieras, il t'exaucera,
Car ainsi a parlé l'Éternel, le Dieu d'Israël.

Réjouis-toi, réjouis-toi en l'Éternel.
Il pardonne, il guérit, il est un soutien,
Un appui, un refuge et un secours.
Je le célébrerai tant que je vivrai.
C'est dans la tranquillité et le repos
Que sera, que sera notre salut,
Et dans notre foi sera notre force.
Alléluia, bénissons-le !
Il est près de ceux qui l'invoquent avec sincérité


95
Du fond de l'abîme
Ps
Du fond de l'abîme je t'invoque, ô Éternel !
Je suis abattu, courbé, entièrement brisé.
J'ai péché contre toi et j'ai fait ce qui est mal.
Ne me châtie pas dans ta fureur, ô Éternel,
Car je reconnais mes iniquités.
Comme un lourd fardeau, elles sont trop pesantes pour moi.
Ô Seigneur, délivre-moi, aie pitié, pitié de moi !

Éternel ! Ô Éternel ! C’est en toi que j'espère.
Crée en moi un cœur pur, un esprit bien disposé.
Sois pour moi un rocher protecteur, un sûr abri;
Je ne chancellerai plus.
Car je n'ai plus de vigueur à cause de mes péchés,
Et il n'y a rien de sain ni de bon dans mon cœur.
Ne t'éloigne pas, ne t'éloigne pas !
Aie pitié de moi et viens à mon secours !

Garde-moi, ô Dieu, car je cherche en toi mon refuge.
J'ai crié à toi; tu m'as guéri, tu m'as sauvé.
En lui mon cœur se confie et je suis secouru.
Il est le rocher des délivrances de son oint.
Le secours de l'homme n'est que vanité.
Mais la bonté de l'Éternel vaut mieux que la vie.
Le Seigneur m'a exaucé, et de lui vient mon salut.


96
Je m'écrie : \"Loué soit l'Éternel !\"
Ps 18
\tJe m'écrie : \"Loué soit l'Éternel !\" et je suis délivré !
\tJe m'écrie : \"Loué !\"; je suis délivré de tous mes ennemis !

Les liens de la mort m'avaient environné,
Ceux du sépulcre m'avaient entouré.
Dans ma détresse, j'ai crié vers mon Dieu.
Mon cri est parvenu à ses oreilles.

Et la terre fut ébranlée et trembla;
Il abaissa les cieux et descendit.
Le Très-Haut tonna, fit retentir sa voix,
Dispersa mes ennemis de ses flèches.

Il étendit sa main d'en-haut, me saisit,
Et il me retira des grandes eaux.
Il me délivra de l'ennemi puissant.
Il m'a mis au large parce qu'il m'aime.


97
Ma grâce te suffit
2 Co 12;Hb 13;1 Co 15
\tMa grâce te suffit
\tCar Ma puissance s'accomplit
\tDans la faiblesse.
\tMa grâce te suffit
\tTous les jours de ta vie.

Quand dans la maladie ou bien la souffrance
Ta force vient à faiblir, n'oublie pas ceci :

Il est bon que ton cœur en soit affermi.
La grâce est en Jésus-Christ, confie-toi en lui.

Oui, sa grâce envers moi n'est pas restée vaine.
Je ne la rejette pas ! Ne t'en prive pas !


98
Quand ton peuple
1 Rs 8
Quand ton peuple sera battu devant l'ennemi
Pour avoir péché contre toi,
S'il t'adresse des prières et des supplications,
De ton peuple, Seigneur, de ton peuple, Seigneur,
Tu pardonneras le péché !

\tÔ Éternel, ne nous abandonne pas ! (bis)

Quand ton peuple subira des plaies, des maladies,
Seigneur, écoute-le des cieux !
Ta justice rendra à chacun selon ses voies.
Car toi seul tu connais, car toi seul tu connais
Le cœur de tous les humains.

\tÔ Éternel, élève nos cœurs vers toi !
\tAfin que nous marchions dans toutes tes voies !

Éternel, il n'y a pas de Dieu semblable à toi,
Ni dans les cieux, ni sur la terre.
Tu gardes ton alliance envers tes serviteurs
Qui marchent en ta présence, qui marchent en ta présence
Qui marchent de tout leur cœur.

\tÔ Éternel, nous rendons gloire à ton nom ! (bis)


99
Éternel, tu nous donnes la paix
Es 25;26
Éternel, tu nous donnes la paix, oh... !
Car tout ce que nous faisons
C'est toi qui l'accomplis pour nous.
À celui qui écoute ta voix, oh... !
(Oh... ! À celui qui marche dans tes voies)
Tu assures la paix, oui la paix,
(Tu assures la paix, la paix)
Parce qu'il se confie en toi.

Seigneur, tu as été un refuge, oh... !
Et un abri pour le faible,
Le malheureux qui crie à toi.
Mais tu abats l'orgueil des méchants, oh... !
(Oh... ! tu rends à chacun selon ses voies)
Et en toi nous avons espéré,
(En toi nous avons espéré)
Et c'est toi qui nous as sauvés.


100
Reviens à ton Dieu
Os 14
Reviens, reviens à ton Dieu, reviens !
(Reviens à ton Dieu, reviens ! Oui, reviens à ton Dieu, reviens à lui !)
Reviens à lui (Reviens à lui !)
Reviens, reviens à ton Dieu, car tu es tombé.
(Reviens, reviens ! Reviens à ton Dieu ! Oh, oui ! Reviens !)
Tu es tombé par ton péché.
(Tu es tombé, tu es tombé par ton péché ! Ton péché)
Apporte avec toi, apporte avec toi,
(Apporte avec toi, apporte avec toi)
Des paroles, et reviens à ton Dieu !
(Avec toi des paroles et reviens à ton Dieu !)
Oh, oui ! Reviens ! Oh, oui ! Reviens ! (Reviens à ton Dieu !)

Dis-lui : Oh ! Pardonne-moi !
(Oh ! pardonne-moi, pardonne ! Oh, oui ! Pardonne-moi !)
Accueille, accueille-moi ! (Accueille-moi ! Accueille-moi !)
Au lieu, au lieu d'offrande, (Au lieu d'offrande, je t'offrirai)
Je t'offrirai l'hommage de mes lèvres.
(... l'hommage je T'offrirai, je T'offrirai l'hommage de mes lèvres)
Je me confierai, non plus, plus en moi,
(Je me confierai non plus en moi,)
En mes forces, mais en toi, toi en qui je trouve la compassion
(En moi, mais en toi en qui je trouve, je trouve la compassion)

J'aurai, j'aurai, moi, ton Dieu
(J'aurai, moi, ton Dieu, j'aurai, oui j'aurai, moi, ton Dieu)
Pour toi l'amour généreux (Pour toi, l'amour généreux)
Voici, je réparerai l'infidélité, (je réparerai l'infidélité, réparerai)
Ton inconstance envers ton Dieu.
(Ton inconstance, ton inconstance envers ton Dieu, ton Dieu)
Je t'exaucerai, je serai pour toi comme la rosée.
(Je t'exaucerai, je serai pour toi, pour toi)
C'est de moi que viendra ton fruit, oh oui, ton fruit.
(Comme la rosée; c'est de moi que viendra, que viendra ton fruit)
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
