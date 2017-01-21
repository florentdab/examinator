<?php
/**
 * Created by PhpStorm.
 * User: ciloo
 * Date: 21/01/17
 * Time: 15:23
 */

namespace GotBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GotBundle\Entity\Member;

class LoadMemberData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $characters = array(
            array("Robb", "1200", "80"),
            array("Cersei", "300", "32"),
            array("Daenerys", "2000", "91")
        );
        foreach ($characters as $character) {
            $memberObj = new Member();
            $memberObj->setFirstname($character[0]);
            $memberObj->setHp($character[1]);
            $memberObj->setStrength($character[2]);
            $this->addReference('member-'.$character[0], $memberObj);

            $manager->persist($memberObj);

        }
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