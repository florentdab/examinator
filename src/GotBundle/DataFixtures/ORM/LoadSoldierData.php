<?php
/**
 * Created by PhpStorm.
 * User: axcel
 * Date: 21/01/17
 * Time: 15:54
 */

namespace GotBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GotBundle\Entity\Soldier;

class LoadSoldierData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        //Create the first soldier
        $soldier1 = new Soldier();
        $soldier1->setType('footman');
        $soldier1->setCost(100);
        $soldier1->setHealthPoint(400);
        $soldier1->setStrength(50);
        $soldier1->setHouse();

        $manager->persist($soldier1);

        //Create the second soldier
        $soldier2 = new Soldier();
        $soldier2->setType('archer');
        $soldier2->setCost(200);
        $soldier2->setHealthPoint(200);
        $soldier2->setStrength(60);
        $soldier2->setHouse();

        $manager->persist($soldier2);

        //Create the third soldier
        $soldier3 = new Soldier();
        $soldier3->setType('kniths');
        $soldier3->setCost(400);
        $soldier3->setHealthPoint(600);
        $soldier3->setStrength(70);
        $soldier3->setHouse();

        $manager->persist($soldier3);

        //Flush all the soldiers
        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 3;
    }
}