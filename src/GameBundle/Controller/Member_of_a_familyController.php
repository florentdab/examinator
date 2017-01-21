<?php

namespace GameBundle\Controller;

use GameBundle\Entity\Member_of_a_family;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Member_of_a_family controller.
 *
 */
class Member_of_a_familyController extends Controller
{
    /**
     * Lists all member_of_a_family entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $member_of_a_families = $em->getRepository('GameBundle:Member_of_a_family')->findAll();

        return $this->render('member_of_a_family/index.html.twig', array(
            'member_of_a_families' => $member_of_a_families,
        ));
    }

    /**
     * Finds and displays a member_of_a_family entity.
     *
     */
    public function showAction(Member_of_a_family $member_of_a_family)
    {

        return $this->render('member_of_a_family/show.html.twig', array(
            'member_of_a_family' => $member_of_a_family,
        ));
    }
}
