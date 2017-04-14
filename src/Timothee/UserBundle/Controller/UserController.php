<?php

namespace Timothee\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class UserController extends Controller
{
	public function loginAction()
	{
		if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
		{
			return $this-redirectToRoute('home');
		}

		$authenticationUtils = $this->get('security.authentication_utils');

		return $this->render("TimotheeUserBundle:User:login.html.twig", array(
			'last_username' => $authenticationUtils->getLastUserName(),
			'error' => $authenticationUtils->getLastAuthenticationError()
		));
	}
}