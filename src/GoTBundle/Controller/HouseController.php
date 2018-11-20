<?php
// src/GoTBundle/Controller/HouseController.php

namespace GoTBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogBundle\Entity\Comment;
use BlogBundle\Form\CommentType;

/**
 * House controller.
 */
class HouseController extends Controller
{
    public function listAction()
    {
        $houses = $this->get('doctrine')->getManager()->getRepository('GoTBundle:House')->getAllHouses();

        return $this->render('GoTBundle:House:list.html.twig', array('houses' => $houses));
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

        return $this->render('GoTBundle:House:show.html.twig', array('house' => $house));
    }
}
?>