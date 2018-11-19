<?php
// src/GoTBundle/Controller/BlogController.php
namespace GoTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{

	public function listAction()
	{
		$personajes = $this->get('doctrine')->getManager()->getRepository('GoTBundle:Personaje')->getAllPersonajes();

		return $this->render('GoTBundle:Blog:list.html.twig', array('personajes' => $personajes));
	}

	public function showAction($id)
	{
		$house = $this->get('doctrine')->getManager()->getRepository('GoTBundle:House')->find($id);

		if (!$house)
		{
			// cause the 404 page not found to be displayed
			throw $this->createNotFoundException('No se ha encontrado la casa.');
		}

		$personajes = $this->get('doctrine')->getManager()->getRepository('GoTBundle:Personaje')->getPersonajesForHouse($house->getId());

		return $this->render('GoTBundle:Blog:show.html.twig', array('house' => $house, 'personajes' => $personajes));
	}
}
?>