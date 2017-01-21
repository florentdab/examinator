<?php

namespace GameBundle\Entity;

/**
 * Soldiers
 */
class Soldiers
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $cost;

    /**
     * @var int
     */
    private $healthPoints;

    /**
     * @var int
     */
    private $strength;


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
     * Set type
     *
     * @param string $type
     *
     * @return Soldiers
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set cost
     *
     * @param string $cost
     *
     * @return Soldiers
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set healthPoints
     *
     * @param integer $healthPoints
     *
     * @return Soldiers
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
     * Set strength
     *
     * @param integer $strength
     *
     * @return Soldiers
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;

        return $this;
    }

    /**
     * Get strength
     *
     * @return int
     */
    public function getStrength()
    {
        return $this->strength;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $houses;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->houses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add house
     *
     * @param \GameBundle\Entity\Houses $house
     *
     * @return Soldiers
     */
    public function addHouse(\GameBundle\Entity\Houses $house)
    {
        $this->houses[] = $house;

        return $this;
    }

    /**
     * Remove house
     *
     * @param \GameBundle\Entity\Houses $house
     */
    public function removeHouse(\GameBundle\Entity\Houses $house)
    {
        $this->houses->removeElement($house);
    }

    /**
     * Get houses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHouses()
    {
        return $this->houses;
    }
}
