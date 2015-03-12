<?php
// src/AppBundle/Entity/Gender.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="gender")
 */
class Gender
{
    const GENDER_MAN = 'муж';
    const GENDER_WOMAN = 'жен';

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=4, unique=true)
     */
    protected $gender;


    /**
     * @ORM\OneToMany(targetEntity="Users", mappedBy="gender")
     */
    protected $users;

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
     * Set gender
     *
     * @param string $gender
     * @return Gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Add users
     *
     * @param \AppBundle\Entity\Users $users
     * @return Gender
     */
    public function addUser(\AppBundle\Entity\Users $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \AppBundle\Entity\Users $users
     */
    public function removeUser(\AppBundle\Entity\Users $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
}
