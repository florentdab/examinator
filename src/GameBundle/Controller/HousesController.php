<?php

namespace GameBundle\Controller;

use GameBundle\Entity\Houses;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * House controller.
 *
 */
class HousesController extends Controller
{
    /**
     * Lists all house entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $houses = $em->getRepository('GameBundle:Houses')->findAll();

        return $this->render('houses/index.html.twig', array(
            'houses' => $houses,
        ));
    }

    /**
     * Finds and displays a house entity.
     *
     */
    public function showAction(Houses $house)
    {

        return $this->render('houses/show.html.twig', array(
            'house' => $house,
        ));
    }
}
