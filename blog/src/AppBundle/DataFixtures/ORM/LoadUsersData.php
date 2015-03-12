<?php
// src/AppBundle/DataFixtures/ORM/LoadUsersData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Users;
use AppBundle\Entity\Gender;


class LoadUsersData extends AbstractFixture implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $genders = array('man' => Gender::GENDER_MAN, 'woman' => Gender::GENDER_WOMAN);

        //add Users
        for ($i = 1; $i <= 10; $i++) {
            $object = new Users();
            $object->setName('user' . $i);
            $object->setEmail('user' . $i . '@testmail.com');
            $object->setBirth(new \DateTime(date('Y-m-d')));
            $object->setGender($this->getReference(array_rand($genders)));

            $manager->persist($object);
            $manager->flush();
        }

    }

}