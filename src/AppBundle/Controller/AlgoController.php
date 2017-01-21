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

        foreach ( $array as $value){
            foreach ( current($array[0]) as $val ){
            $val ++ ;
            };
        }

/* C'est une attaque par force brute mon dieu !!!!
Pour chaque couleur, incrémenter de 1
Si trois caractères de suite sont identiques, on passe à la combinaison suivante;
sinon on décale le test d'un caractère et ce jusqu'à avoir testé toute la combinaison */

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


        foreach ($personnages as $person){
           if ($person["role"] !== $array){
                $result = $person["prenom"]["role"] ;
                }
            }
            return $result ;
/* Pour chaque personnage on vérifie si il est mort on non,
    si oui alors on ne l'affiche pas, on l'enlève du tableau,
    si non alors on l'affiche dans le tableau.
   Ensuite on affiche par famille leur prénom et leur role. Pour cela tout ceux qui on le même nom
(on test cette condition avec un if) si même nom alors même famille.
*/
    }
}