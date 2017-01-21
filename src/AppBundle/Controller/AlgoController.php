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
        //en entrée un tableau qui contient des tableaux, dans chaque tableau un ou pls nombre entre 0 et 255
        //en sortie un tableau qui contient toutes les combinaisons possibles, dans l'ordre, des codes rgb.

        //boucler dans le tableau associatif $array
        //pour chaque tableau dans array:
        //prendre le premier index, l'ajouter à mon tableau de sortie
        //passer au tableau et recommencer jusqu'à ce qu'il n'y ait plus de valeurs

        //array contient des tableaux
        //newarray contient un tableau de 3 à 4 index
        //number contient un index d'un tableau de newarray
        $arrayColors = array();

        foreach ($array as $newarray) {

            $arrayColors[] = strval($newarray[0]);

            /*foreach ($newarray as $number) {
                $arrayColors[]= array($number);
            }*/
        }
        $result = "rgb($arrayColors[0], $arrayColors[1], $arrayColors[2])";
        var_dump($result);
        return $result;
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
        $alivePersonnages = array(); //initialisation d'un tableau des personnages encore en vie;

        foreach ($personnages as $personnage) { // pour chaque personnage du tableau personnages

            if(!in_array($personnage["role"], $array)) { // si je ne trouve pas le role du perso dans l'array des perso tués
                $alivePersonnages[] = $personnage;
            }
        }
        //a partir d'ici, j'ai un tableau des personnages encore en vie.

        $sortFamily = array();

        foreach ($alivePersonnages as $alivePersonnage) { //pour chaque perso en vie dans le tableau persos en vie
            $nom = $alivePersonnage["nom"];
            if(in_array($nom, $sortFamily)){ // s'il y a le nom du perso dans le tableau sortfamily
                $sortFamily[$nom][] = $alivePersonnage["prenom"]." as ".$alivePersonnage["role"];// je l'ajoute au tableau qui contient son nom
            }
            else { $sortFamily[$nom]= array($alivePersonnage["prenom"]." as ".$alivePersonnage["role"]); // sinon, je crée un tableau dans le tableau sortfamily avec son nom en guise de clé

            }
        }
        return $sortFamily;
    }
}