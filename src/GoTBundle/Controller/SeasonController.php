<?php
// src/GoTBundle/Controller/SeasonController.php

namespace GoTBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Season controller.
 */
class SeasonController extends Controller
{
    public function listAction()
    {
        $seasons = $this->get('doctrine')->getManager()->getRepository('GoTBundle:Season')->getAllSeasons();

        return $this->render('GoTBundle:Season:list.html.twig', array('seasons' => $seasons));
    }

    public function showAction($id)
    {
        $season = $this->get('doctrine')->getManager()->getRepository('GoTBundle:Season')->find($id);

        if (!$season)
        {
            // cause the 404 page not found to be displayed
            throw $this->createNotFoundException('No se ha encontrado la temporada.');
        }
        $personajes = $season->getPersonajes();

        return $this->render('GoTBundle:Season:show.html.twig', array('season' => $season, 'personajes' => $personajes));
    }
}
?>