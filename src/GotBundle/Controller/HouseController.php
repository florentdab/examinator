<?php

namespace GotBundle\Controller;

use GotBundle\Entity\House;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * House controller.
 *
 */
class HouseController extends Controller
{
    /**
     * Lists all house entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $houses = $em->getRepository('GotBundle:House')->findAll();

        return $this->render('house/index.html.twig', array(
            'houses' => $houses,
        ));
    }

    /**
     * Finds and displays a house entity.
     *
     */
    public function showAction(House $house)
    {

        return $this->render('house/show.html.twig', array(
            'house' => $house,
        ));
    }
}
