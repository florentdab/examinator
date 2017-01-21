<?php
/**
 * Created by PhpStorm.
 * User: axcel
 * Date: 21/01/17
 * Time: 15:37
 */

namespace GotBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GotBundle\Entity\FamilyMember as FamilyMember;

class LoadMemberData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        //Create the first family member
        $member1 = new FamilyMember();
        $member1->setFirstName('Robb');
        $member1->setHealthPoints(1200);
        $member1->setStrength(82);
        $member1->setHouse($this->getReference('StarkHouse'));
        $manager->persist($member1);

        //Create the first family member
        $member2 = new FamilyMember();
        $member2->setFirstName('Cersei');
        $member2->setHealthPoints(300);
        $member2->setStrength(32);
        $member2->setHouse($this->getReference('LannisterHouse'));
        $manager->persist($member2);

        //Create the first family member
        $member3 = new FamilyMember();
        $member3->setFirstName('Daenerys with Balerion ');
        $member3->setHealthPoints(2000);
        $member3->setStrength(91);
        $member3->setHouse($this->getReference('TargaryenHouse'));
        $manager->persist($member3);


        //Flush all members
        $manager->flush();
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