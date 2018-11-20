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
		$house = $this->getHouse($personaje->getId());
		$seasons = $personaje->getSeasons();

		return $this->render('GoTBundle:Blog:show.html.twig', array('personaje' => $personaje, 'house' => $house, 'seasons' => $seasons));
	}

	protected function getHouse($house_id)
    {
        $em = $this->getDoctrine()->getManager();

        $house = $em->getRepository('GoTBundle:House')->find($house_id);

        if (!$house) {
            throw $this->createNotFoundException('Unable to find House.');
        }

        return $house;
    }
}
?>