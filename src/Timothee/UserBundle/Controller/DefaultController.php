<?php

namespace Timothee\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TimotheeUserBundle:Default:index.html.twig');
    }
}
