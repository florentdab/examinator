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
     * @var int
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
     * @param integer $cost
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
     * @return int
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
     * @var \GameBundle\Entity\Houses
     */
    private $House;


    /**
     * Set house
     *
     * @param \GameBundle\Entity\Houses $house
     *
     * @return Soldiers
     */
    public function setHouse(\GameBundle\Entity\Houses $house = null)
    {
        $this->House = $house;

        return $this;
    }

    /**
     * Get house
     *
     * @return \GameBundle\Entity\Houses
     */
    public function getHouse()
    {
        return $this->House;
    }
}
