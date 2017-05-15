<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 15.05.2017
 * Time: 9:31
 */

namespace Blogger\BlogBundle\DataFixtures\ORM;


use Blogger\BlogBundle\Entity\Bidd;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class BiddFixtures  extends AbstractFixture implements OrderedFixtureInterface{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager){
        $bidd = new Bidd();
        $bidd->setFio("Петров Пётр Петрович");
        $bidd->setMark1(50);
        $bidd->setMark2(40);
        $bidd->setMark3(22);
        $bidd->setCheck1(false);

        $bidd->setSpecialty($manager->merge($this->getReference("specialty-1")));
        $manager->persist($bidd);

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