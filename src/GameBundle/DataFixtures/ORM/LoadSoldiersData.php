<?php
namespace GameBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GameBundle\Entity\Soldiers;

class LoadSoldiersData implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $soldiers1 = new Soldiers();
        $soldiers1->setType('footman');
        $soldiers1->setCost('100 dragons');
        $soldiers1->setHealthPoints(100);
        $soldiers1->setStrength(50);

        $soldiers2 = new Soldiers();
        $soldiers2->setType('archer');
        $soldiers2->setCost('200 dragons');
        $soldiers2->setHealthPoints(200);
        $soldiers2->setStrength(60);

        $soldiers3 = new Soldiers();
        $soldiers3->setType('knight');
        $soldiers3->setCost('400 dragons');
        $soldiers3->setHealthPoints(600);
        $soldiers3->setStrength(70);


        $manager->persist($soldiers1);
        $manager->persist($soldiers2);
        $manager->persist($soldiers3);

        $manager->flush();
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 3;
    }


}