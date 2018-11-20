<?php
// src/GoTBundle/Controller/BlogController.php
namespace GoTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{

	public function listAction()
	{
		$houses = $this->get('doctrine')->getManager()->getRepository('GoTBundle:House')->getAllHouses();

		return $this->render('GoTBundle:Blog:list.html.twig', array('houses' => $houses));
	}

	public function showAction($id)
	{
		$personaje = $this->get('doctrine')->getManager()->getRepository('GoTBundle:Personaje')->find($id);

		if (!$personaje)
		{
			// cause the 404 page not found to be displayed
			throw $this->createNotFoundException('No se ha encontrado la casa.');
		}

		return $this->render('GoTBundle:Blog:show.html.twig', array('personaje' => $personaje));
	}
}
?>