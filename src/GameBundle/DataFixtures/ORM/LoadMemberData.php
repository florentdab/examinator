<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 21/01/17
 * Time: 16:24
 */

namespace GameBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GameBundle\Entity\Member_of_a_family;


class LoadMemberData
{
    public function load(ObjectManager $manager)
    {
        $m1= new Member_of_a_family();
        $m1->setFirstName('Robb');
        $m1->setHealthPoints(1200);
        $m1->setStrength(82);

        $m2= new Member_of_a_family();
        $m2->setFirstName('Cersei');
        $m2->setHealthPoints(300);
        $m2->setStrength(32);

        $m3= new Member_of_a_family();
        $m3->setFirstName('Daenerys with Balerion (her dragon)');
        $m3->setHealthPoints(2000);
        $m3->setStrength(91);


        $manager->persist($m1);
        $manager->persist($m2);
        $manager->persist($m3);


        $manager->flush();
    }

}