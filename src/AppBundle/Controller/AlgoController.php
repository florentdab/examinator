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
        // je fais un boucle qui va chercher et stocker la premiere valeur du premier talbeau ,  ensuite je fait une autre boucle avec une condition pour recuperer la premiere valeur tu tableeau 2 et du tableau 3 et recommencer avec la meme valeur du tableau 1 tant que le tableau 2 et 3 n'auront pas ete parcourur.

        $count= "";
        foreach($array[0] as $a ){

            $count .= $array[0][$a];

            foreach($array[1] as $b){
                $count.= $array[1][$b];
            }
            foreach($array[1] as $b){
                $count.= $array[1][$b];
            }
        }
        return $count;
        //var_dump($array[0][0]);
    }



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