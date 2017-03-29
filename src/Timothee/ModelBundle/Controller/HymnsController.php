<?php

namespace Timothee\ModelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

use TimotheeModelBundle\Entity\Hymn;

class HymnsController extends Controller
{
    /**
     * @Route("/hymns", name="hymns")
     * @Method({"GET"})
     */
    public function getHymnsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $hymns = $em->getRepository("TimotheeModelBundle:Hymn")->findAll();

        if(empty($hymns))
            return new JsonResponse(["error" => "La base de donnee est vide !"], Response::HTTP_NOT_FOUND);

        $formatted = [];

        foreach ($hymns as $hymn) {
            $formatted = [
                "id" => $hymn->getId(),
                "title" => $hymn->getTitle(),
                "num" => $hymn->getNum(),
                "ref" => $hymn->getRef(),
                "lyrics" => $hymn->getLyrics()
            ];        
        }

        return new JsonResponse($formatted);
    }

    /**
     * @Route("/hymns/{id}", name="hymn", requirements={"id"="\d+"})
     * @Method({"GET"})
     */
    public function getHymnAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $hymn = $em
                ->getRepository("TimotheeModelBundle:Hymn")
                ->find($id);

        if(empty($hymn))
            return new JsonResponse(["error" => "Ce chant est introuvable !"], Response::HTTP_NOT_FOUND);

        $formatted = [
            "id" => $hymn->getId(),
            "title" => $hymn->getTitle(),
            "num" => $hymn->getNum(),
            "ref" => $hymn->getRef(),
            "lyrics" => $hymn->getLyrics()
        ];                

        return new JsonResponse($formatted);
    }

}
