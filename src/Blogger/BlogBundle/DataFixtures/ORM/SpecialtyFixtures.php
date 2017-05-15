<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 15.05.2017
 * Time: 9:31
 */

namespace Blogger\BlogBundle\DataFixtures\ORM;


use Blogger\BlogBundle\Entity\Specialty;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class SpecialtyFixtures extends AbstractFixture implements OrderedFixtureInterface{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager){
        $specialty1 = new Specialty();
        $specialty1->setTitle("ПОКС");
        $manager->persist($specialty1);

        $specialty2 = new Specialty();
        $specialty2->setTitle("ПОИТ");
        $manager->persist($specialty2);

        $specialty3 = new Specialty();
        $specialty3->setTitle("WEB");
        $manager->persist($specialty3);

        $manager->flush();

        $this->addReference('specialty-1', $specialty1);
        $this->addReference('specialty-2', $specialty2);
        $this->addReference('specialty-3', $specialty3);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder(){
        return 1;
    }
}