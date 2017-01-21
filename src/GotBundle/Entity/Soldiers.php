<?php

namespace GotBundle\Entity;

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
    private $hp;

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
     * Set hp
     *
     * @param integer $hp
     *
     * @return Soldiers
     */
    public function setHp($hp)
    {
        $this->hp = $hp;

        return $this;
    }

    /**
     * Get hp
     *
     * @return int
     */
    public function getHp()
    {
        return $this->hp;
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
     * @var \GotBundle\Entity\House
     */
    private $house;


    /**
     * Set house
     *
     * @param \GotBundle\Entity\House $house
     *
     * @return Soldiers
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
