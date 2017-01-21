<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 21/01/17
 * Time: 16:13
 */

namespace GameBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GameBundle\Entity\Houses;

class LoadHousesData implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $h1=new Houses();
        $h1->setName('Stark');
        $h1->setSigil('');
        $h1->setArmy('none');
        $h1->setAmountOfMoney(1000);
        $h1->getMembersOfTheFamily();

        $h2=new Houses();
        $h2->setName('Lannister');
        $h2->setSigil('');
        $h2->setArmy('none');
        $h2->setAmountOfMoney(2000);
        $h2->getMembersOfTheFamily();

        $h3=new Houses();
        $h3->setName('Targaryen');
        $h3->setSigil('');
        $h3->setArmy('none');
        $h3->setAmountOfMoney(0);
        $h3->getMembersOfTheFamily();



        $manager->persist($h1);
        $manager->persist($h2);
        $manager->persist($h3);

        $manager->flush();
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 1;
    }

}