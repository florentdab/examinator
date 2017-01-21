<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 21/01/17
 * Time: 16:24
 */

namespace GameBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GameBundle\Entity\Member_of_a_family;


class LoadMemberData extends AbstractFixture implements OrderedFixtureInterface
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


    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 2;
    }

}