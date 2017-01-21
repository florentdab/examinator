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
    public function test1 ()
    {
        $colors = array(
            array(
                122
            ),
            array(
                5
            ),
            array(
                125
            )
        );
        $result = array(
            "rgb(122, 5, 125)"
        );
        $this->assertEquals($this->controller->exercice1($colors), $result);
    }

    public function test2 ()
    {
        $colors = array(
            array(
                124,
                125
            ),
            array(
                5,
                73
            ),
            array(
                122
            )
        );
        $result = array(
            "rgb(124, 5, 122)",
            "rgb(124, 73, 122)",
            "rgb(125, 5, 122)",
            "rgb(125, 73, 122)",
        );
        $this->assertEquals($this->controller->exercice1($colors), $result);
    }

    public function test3 ()
    {
        $colors = array(
            array(
                124,
                125
            ),
            array(
                5,
                73
            ),
            array(
                122,
                245,
                255
            )
        );
        $result = array(
            "rgb(124, 5, 122)",
            "rgb(124, 5, 245)",
            "rgb(124, 5, 255)",
            "rgb(124, 73, 122)",
            "rgb(124, 73, 245)",
            "rgb(124, 73, 255)",
            "rgb(125, 5, 122)",
            "rgb(125, 5, 245)",
            "rgb(125, 5, 255)",
            "rgb(125, 73, 122)",
            "rgb(125, 73, 245)",
            "rgb(125, 73, 255)",
        );
        $this->assertEquals($this->controller->exercice1($colors), $result);
    }

    public function test4 ()
    {
        $colors = array(
            array(
                124,
                125
            ),
            array(
                5,
                73
            ),
            array(
                122
            ),
            array(
                0.4,
                0.9
            )
        );
        $result = array(
            "rgba(124, 5, 122, 0.4)",
            "rgba(124, 5, 122, 0.9)",
            "rgba(124, 73, 122, 0.4)",
            "rgba(124, 73, 122, 0.9)",
            "rgba(125, 5, 122, 0.4)",
            "rgba(125, 5, 122, 0.9)",
            "rgba(125, 73, 122, 0.4)",
            "rgba(125, 73, 122, 0.9)",
        );
        $this->assertEquals($this->controller->exercice1($colors), $result);
    }

    public function test5 ()
    {
        $colors = array(
            array(
                124,
                125
            ),
            array(
                5,
                73
            ),
            array(
                122,
                245,
                255
            ),
            array(
                0.4,
                0.7,
                1
            )
        );
        $result = array(
            "rgba(124, 5, 122, 0.4)",
            "rgba(124, 5, 122, 0.7)",
            "rgba(124, 5, 122, 1)",
            "rgba(124, 5, 245, 0.4)",
            "rgba(124, 5, 245, 0.7)",
            "rgba(124, 5, 245, 1)",
            "rgba(124, 5, 255, 0.4)",
            "rgba(124, 5, 255, 0.7)",
            "rgba(124, 5, 255, 1)",
            "rgba(124, 73, 122, 0.4)",
            "rgba(124, 73, 122, 0.7)",
            "rgba(124, 73, 122, 1)",
            "rgba(124, 73, 245, 0.4)",
            "rgba(124, 73, 245, 0.7)",
            "rgba(124, 73, 245, 1)",
            "rgba(124, 73, 255, 0.4)",
            "rgba(124, 73, 255, 0.7)",
            "rgba(124, 73, 255, 1)",
            "rgba(125, 5, 122, 0.4)",
            "rgba(125, 5, 122, 0.7)",
            "rgba(125, 5, 122, 1)",
            "rgba(125, 5, 245, 0.4)",
            "rgba(125, 5, 245, 0.7)",
            "rgba(125, 5, 245, 1)",
            "rgba(125, 5, 255, 0.4)",
            "rgba(125, 5, 255, 0.7)",
            "rgba(125, 5, 255, 1)",
            "rgba(125, 73, 122, 0.4)",
            "rgba(125, 73, 122, 0.7)",
            "rgba(125, 73, 122, 1)",
            "rgba(125, 73, 245, 0.4)",
            "rgba(125, 73, 245, 0.7)",
            "rgba(125, 73, 245, 1)",
            "rgba(125, 73, 255, 0.4)",
            "rgba(125, 73, 255, 0.7)",
            "rgba(125, 73, 255, 1)",
        );
        $this->assertEquals($this->controller->exercice1($colors), $result);
    }
}