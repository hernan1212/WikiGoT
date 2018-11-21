<?php
// src/GoTBundle/Controller/BlogController.php
namespace GoTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{

	public function listAction()
	{
		$personajes = $this->get('doctrine')->getManager()->getRepository('GoTBundle:Personaje')->getOneCharacterForHouse();

		return $this->render('GoTBundle:Blog:list.html.twig', array('personajes' => $personajes));
	}

	public function showAction($id)
	{
		$personaje = $this->get('doctrine')->getManager()->getRepository('GoTBundle:Personaje')->find($id);

		if (!$personaje)
		{
			// cause the 404 page not found to be displayed
			throw $this->createNotFoundException('No se ha encontrado la casa.');
		}
		$house = $personaje->getHouse();
		$seasons = $personaje->getSeasons();

		return $this->render('GoTBundle:Blog:show.html.twig', array('personaje' => $personaje, 'house' => $house, 'seasons' => $seasons));
	}
    public function contactAction()
	{
		return $this->render('GoTBundle:Blog:contact.html.twig');
	}
}
?>