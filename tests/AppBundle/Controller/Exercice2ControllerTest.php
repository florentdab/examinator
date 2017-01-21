<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 21/01/17
 * Time: 09:08
 */

namespace tests\AppBundle\Controller;


use AppBundle\Controller\AlgoController;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class Exercice1ControllerTest extends WebTestCase
{
    private $controller;

    public function __construct()
    {
        $this->controller = new AlgoController();
    }

    public function testInit()
    {
        $this->assertEquals(true, true);
    }

    public function test1()
    {
        $killed = array(
            "Prince of Pyk"
        );

        $result = array(
            "Lannister" => array(
                "Jaime as Kingslayer",
                "Cersei as Queen Regent of the Seven Kingdoms",
            ),
            "Stark" => array(
                "Arya as A girl",
                "Bran as Prince of Winterfell"
            ),
            "Targaryen" => array(
                "Daenerys as Mother of dragons"
            ),
            "Martell" => array(
                "Oberyn as Red Viper",
                "Doran as Prince of Dorne"
            )
        );
        $this->assertEquals($this->controller->exercice2($killed), $result);
    }

    public function test2()
    {
        $killed = array(
            'Prince of Dorne',
            'Kingslayer'
        );

        $result = array(
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
            )
        );

        $this->assertEquals($this->controller->exercice2($killed), $result);
    }
}