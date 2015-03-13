<?php
// src/AppBundle/DataFixtures/ORM/LoadGenderData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Gender;

class LoadGenderData extends AbstractFixture implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        //add Genders
        $genders = array('man' => Gender::GENDER_MAN, 'woman' => Gender::GENDER_WOMAN);

        foreach ($genders as $key => $gender) {
            $object = new Gender();
            $object->setGender($gender);
            $this->addReference($key, $object);

            $manager->persist($object);
        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}
