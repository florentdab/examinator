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
    public function exercice1($array)
    {

        //en entrée j'ai un tableau ($array) qui contiens un autre tableau ou il y a une clef et une valeur
        //il y a donc dans ce tableau des codes couleurs allant de 0 à 255 et il y en a d'aute avec l'ajout des transparences allant de 0 à 1

        //je dois rendre en sortie les codes rgb ou rgba dans l'ordre.


    }

    public function exercice2($array)
    {

        $jaime = ["nom" => "Lannister", "prenom" => "Jaime", "role" => "Kingslayer"];
        $arya = ["nom" => "Stark", "prenom" => "Arya", "role" => "A girl"];
        $daenerys = ["nom" => "Targaryen", "prenom" => "Daenerys", "role" => "Mother of dragons"];
        $theon = ["nom" => "Greyjoy", "prenom" => "Theon", "role" => "Prince of Pyk"];
        $cersei = ["nom" => "Lannister", "prenom" => "Cersei", "role" => "Queen Regent of the Seven Kingdoms"];
        $bran = ["nom" => "Stark", "prenom" => "Bran", "role" => "Prince of Winterfell"];
        $oberyn = ["nom" => "Martell", "prenom" => "Oberyn", "role" => "Red Viper"];
        $doran = ["nom" => "Martell", "prenom" => "Doran", "role" => "Prince of Dorne"];

        $personnages = [$jaime, $arya, $daenerys, $theon, $cersei, $bran, $oberyn, $doran];

        //j'ia en entrée une liste de personnages décédé
        //en fonction de cette liste je vais aller chercher dans mon tableau de nom les personnages vivant et
        //les repertoriés avec leur role
        //je vais utiliser la fonction foreach pour recherche dans le tableau $personnages les noms, et un
        //autre foreach pour aller récupérer le role

        $alive = array(
            'Lannister' => array(),
            'Stark' => array(),
            'Targaryen' => array(),
            'Greyjoy' => array(),
            'Martell' => array(),
        );


        foreach ($personnages as $personnage) {
            foreach ($personnage as $role) {
                if ($personnage == $cersei) {
                    $alive[0] = $cersei[3];
                }
                if ($personnage == $arya && $bran) {
                    $alive[1] = $arya[3] . $bran[3];
                }
                if ($personnage == $daenerys) {
                    $alive[2] = $daenerys[3];
                }
                if ($personnage == $theon) {
                    $alive[3] = $theon[3];
                }
                if ($personnage == $oberyn && $doran) {
                    $alive[4] = $oberyn[3] . $doran[3];
                }
            }

            return $alive;

        }
    }
}