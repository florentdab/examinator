<?php
/**
 * Created by PhpStorm.
 * User: apprenti-thinkpad-t430s
 * Date: 21/01/17
 * Time: 15:56
 */

namespace GameBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GameBundle\Entity\Family;

class LoadMemberData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $stark = new Family();
        $stark->setFirstName('Robb');
        $stark->setHealthPoints(1200);
        $stark->setStrength(82);

        $manager->persist($stark);
        $manager->flush();

        $this->addReference('stark-family', $stark);

        $lannister = new Family();
        $lannister->setFirstName('Cersei');
        $lannister->setHealthPoints(300);
        $lannister->setStrength(32);

        $manager->persist($lannister);
        $manager->flush();

        $this->addReference('lannister-family', $lannister);

        $targaryen = new Family();
        $targaryen->setFirstName('Daenerys');
        $targaryen->setHealthPoints(2000);
        $targaryen->setStrength(91);

        $manager->persist($targaryen);
        $manager->flush();

        $this->addReference('targaryen-family', $targaryen);

    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 2;
    }
}