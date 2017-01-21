<?php

namespace GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GameBundle:Default:index.html.twig');
    }

    public function houseAction()
    {
        return $this->render('GameBundle:Default:house.html.twig');
    }
}
