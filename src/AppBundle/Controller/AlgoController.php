<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 21/01/17
 * Time: 09:05
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgoController extends Controller
{
    public function exercice1($array){

        //Write your code here

    }

    public function exercice2($array){

        $jaime = ["nom" => "Lannister", "prenom" => "Jaime", "role" => "Kingslayer"];
        $arya = ["nom" => "Stark", "prenom" => "Arya", "role" => "A girl"];
        $daenerys = ["nom" => "Targaryen", "prenom" => "Daenerys", "role" => "Mother of dragons"];
        $theon = ["nom" => "Greyjoy", "prenom" => "Theon", "role" => "Prince of Pyk"];
        $cersei = ["nom" => "Lannister", "prenom" => "Cersei", "role" => "Queen Regent of the Seven Kingdoms"];
        $bran = ["nom" => "Stark", "prenom" => "Bran", "role" => "Prince of Winterfell"];
        $oberyn = ["nom" => "Martell", "prenom" => "Oberyn", "role" => "Red Viper"];
        $doran = ["nom" => "Martell", "prenom" => "Doran", "role" => "Prince of Dorne"];

        $personnages = [$jaime, $arya, $daenerys, $theon, $cersei, $bran, $oberyn, $doran];

        //Write your code here

    }
}