<?php
// src/AppBundle/Entity/Users.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsersRepository")
 */
class Users
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=64, unique=true)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=128, unique=true)
     */
    protected $email;

    /**
     * @ORM\Column(type="date")
     */
    protected $birth;

    /**
     * @ORM\Column(type="integer")
     */
    protected $genderId;

    /**
     * @ORM\ManyToOne(targetEntity="Gender", inversedBy="users")
     * @ORM\JoinColumn(name="genderId", referencedColumnName="id")
     */
    protected $gender;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Users
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set genderId
     *
     * @param integer $genderId
     * @return Users
     */
    public function setGenderId($genderId)
    {
        $this->genderId = $genderId;

        return $this;
    }

    /**
     * Get genderId
     *
     * @return integer
     */
    public function getGenderId()
    {
        return $this->genderId;
    }

    /**
     * Set gender
     *
     * @param \AppBundle\Entity\Gender $gender
     * @return Users
     */
    public function setGender(\AppBundle\Entity\Gender $gender = null)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return \AppBundle\Entity\Gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set birth
     *
     * @param \DateTime $birth
     * @return Users
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;

        return $this;
    }

    /**
     * Get birth
     *
     * @return \DateTime
     */
    public function getBirth()
    {
        return $this->birth;
    }
}
