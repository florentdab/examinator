<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $ex1Entry = array(
            array(
                124
            ),
            array(
                53
            ),
            array(
                175
            )
        );
        $ex1Exit = array(
            "rgb(124, 53, 175)"
        );

        $ex2Entry = array(
            "Kingslayer"
        );

        $ex2Exit = array(
            "Lannister" => array(
                "Cersei as Queen Regent of the Seven Kingdoms",
            ),
            "Stark" => array(
                "Arya as A girl",
                "Bran as Prince of Winterfell"
            ),
            "Targaryen" => array(
                "Daenerys as Mother of dragons"
            ),
            "Greyjoy" => array(
                "Theon as Prince of Pyk"
            ),
            "Martell" => array(
                "Oberyn as Red Viper",
                "Doran as Prince of Dorne"
            )
        );

        return $this->render('app/main/index.html.twig', array(
            'ex1Entry'  => $ex1Entry,
            'ex1Exit'   => $ex1Exit,
            'ex2Entry'  => $ex2Entry,
            'ex2Exit'   => $ex2Exit
        ));
    }

    public function symfoAction(){
        return $this->render('app/main/symfo.html.twig');
    }
}
