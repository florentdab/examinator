<?php

namespace GameBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use GameBundle\Entity\Houses;

/**
 * Created by PhpStorm.
 * User: apprenti-thinkpad-t430s
 * Date: 21/01/17
 * Time: 14:58
 */
class LoadHousesData extends AbstractFixture implements OrderedFixtureInterface
{


    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     */
    public function load(\Doctrine\Common\Persistence\ObjectManager $manager)
    {
        $house1 = new Houses();
        $house1->setName('Stark');
        $house1->setSigil('http://vignette4.wikia.nocookie.net/gameofthrones/images/8/8a/House-Stark-Main-Shield.PNG/revision/latest/scale-to-width-down/250?cb=20170101103142');
        $house1->setArmy('');
        $house1->setMoney(0);
        $house1->setFamily('Stark');

        $manager->persist($house1);
        $this->addReference('house1', $house1);

        $house2 = new Houses();
        $house2->setName('Lannister');
        $house2->setSigil('http://vignette2.wikia.nocookie.net/iceandfire/images/3/38/House_Lannister.jpg/revision/latest?cb=20130706180606');
        $house2->setArmy('');
        $house2->setMoney(0);
        $house2->setFamily('Lannister');

        $manager->persist($house2);
        $this->addReference('house2', $house2);

        $house3 = new Houses();
        $house3->setName('Targaryen');
        $house3->setSigil('http://vignette2.wikia.nocookie.net/gameofthrones/images/4/43/House-Targaryen-Main-Shield.PNG/revision/latest/scale-to-width-down/250?cb=20161206005534');
        $house3->setArmy('');
        $house3->setMoney(0);
        $house3->setFamily('Targaryen');

        $manager->persist($house3);
        $manager->flush();

        $this->addReference('house3', $house3);
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