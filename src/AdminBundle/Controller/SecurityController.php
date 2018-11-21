<?php
// src/AdminBundle/Controller/SecurityController.php;

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
	public function loginAction()
	{
		$authenticationUtils = $this->get('security.authentication_utils');
		$error = $authenticationUtils->getLastAuthenticationError();
		$lastUsername = $authenticationUtils->getLastUsername();

		return $this->render('AdminBundle:Security:login.html.twig', array(
			'last_username' => $lastUsername,
			'error' => $error,
		));
	}
}
?>