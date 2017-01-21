<?php

/**
 * Created by PhpStorm.
 * User: ciloo
 * Date: 21/01/17
 * Time: 15:02
 */
namespace GotBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GotBundle\Entity\House;

class LoadHouseData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $houses = array(
            array("Stark", "starksigil.png", "1000", "member-Robb"),
            array("Lannister", "sigillannister.png", "2000", "member-Cersei"),
            array("Targaryen", "sigiltargaryen.png", "0", "member-Daenerys")
        );
        foreach ($houses as $house) {
            $houseObj = new House();
            $houseObj->setName($house[0]);
            $houseObj->setSigil($house[1]);
            $houseObj->setMoney($house[2]);

            $houseObj->setMember($this->getReference($house[3]));

            $manager->persist($houseObj);
            unset($houseObj);
        }
            $manager->flush();
            $manager->clear();
    }

    public function getOrder()
    {
        return 2;
    }
}