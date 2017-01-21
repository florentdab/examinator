<?php

namespace GotBundle\Entity;

/**
 * FamilyMember
 */
class FamilyMember
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var int
     */
    private $healthPoints;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return FamilyMember
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set healthPoints
     *
     * @param integer $healthPoints
     *
     * @return FamilyMember
     */
    public function setHealthPoints($healthPoints)
    {
        $this->healthPoints = $healthPoints;

        return $this;
    }

    /**
     * Get healthPoints
     *
     * @return int
     */
    public function getHealthPoints()
    {
        return $this->healthPoints;
    }
    /**
     * @var integer
     */
    private $strength;


    /**
     * Set strength
     *
     * @param integer $strength
     *
     * @return FamilyMember
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;

        return $this;
    }

    /**
     * Get strength
     *
     * @return integer
     */
    public function getStrength()
    {
        return $this->strength;
    }
    /**
     * @var \GotBundle\Entity\House
     */
    private $house;


    /**
     * Set house
     *
     * @param \GotBundle\Entity\House $house
     *
     * @return FamilyMember
     */
    public function setHouse(\GotBundle\Entity\House $house = null)
    {
        $this->house = $house;

        return $this;
    }

    /**
     * Get house
     *
     * @return \GotBundle\Entity\House
     */
    public function getHouse()
    {
        return $this->house;
    }
}
