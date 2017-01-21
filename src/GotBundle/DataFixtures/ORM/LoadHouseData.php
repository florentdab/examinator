<?php
/**
 * Created by PhpStorm.
 * User: axcel
 * Date: 21/01/17
 * Time: 15:35
 */

namespace GotBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GotBundle\Entity\House as House;

class LoadHouseData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        //Create the first House
        $house1 = new House();
        $house1->setName('Stark');
        $house1->setSigil('/images/starksigil.png');
        $house1->setMoney(1000);
        $this->addReference('StarkHouse', $house1);

        $manager->persist($house1);

        //Create the second House
        $house2 = new House();
        $house2->setName('Lannister');
        $house2->setSigil('/images/sigil1.png');
        $house2->setMoney(2000);
        $this->addReference('LannisterHouse', $house2);

        $manager->persist($house2);

        //Create the third House
        $house3 = new House();
        $house3->setName('Targaryen');
        $house3->setSigil('/images/dragon1.png');
        $house3->setMoney(0);
        $this->addReference('TargaryenHouse', $house3);

        $manager->persist($house3);

        //Flush all the houses
        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 1;
    }
}