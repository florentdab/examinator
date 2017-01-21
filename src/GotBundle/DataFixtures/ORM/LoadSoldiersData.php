<?php
/**
 * Created by PhpStorm.
 * User: ciloo
 * Date: 21/01/17
 * Time: 16:02
 */

namespace GotBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GotBundle\Entity\Soldiers;

class LoadSoldiersData extends AbstractFixture implements OrderedFixtureInterface

{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $soldiers = array(
            array("Footman", "100", "400", "50"),
            array("Archer", "200", "200", "60"),
            array("Knight", "400", "600", "70")
        );
        foreach ($soldiers as $soldier) {
            $soldierObj = new Soldiers();
            $soldierObj->setType($soldier[0]);
            $soldierObj->setCost($soldier[1]);
            $soldierObj->setHp($soldier[2]);
            $soldierObj->setStrength($soldier[3]);

            $manager->persist($soldierObj);
            $manager->flush();
            //$this->getReference('member-family', $memberObj);
        }
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