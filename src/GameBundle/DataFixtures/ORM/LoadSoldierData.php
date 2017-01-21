<?php
/**
 * Created by PhpStorm.
 * User: apprenti-thinkpad-t430s
 * Date: 21/01/17
 * Time: 15:33
 */

namespace GameBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GameBundle\Entity\Soldiers;

class LoadSoldierData extends AbstractFixture implements OrderedFixtureInterface
{
   /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $footman = new Soldiers();
        $footman->setType('footman');
        $footman->setCost(100);
        $footman->setHealthPoints(400);
        $footman->setStrength(50);

        $manager->persist($footman);
        $this->addReference('footman', $footman);

        $archer = new Soldiers();
        $archer->setType('archer');
        $archer->setCost(200);
        $archer->setHealthPoints(200);
        $archer->setStrength(600);

        $manager->persist($archer);
        $this->addReference('archer', $archer);

        $knight = new Soldiers();
        $knight->setType('knight');
        $knight->setCost(400);
        $knight->setHealthPoints(600);
        $knight->setStrength(70);

        $manager->persist($knight);
        $manager->flush();

        $this->addReference('knight', $knight);

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