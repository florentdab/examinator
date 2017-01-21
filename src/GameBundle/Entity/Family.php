<?php

namespace GameBundle\Entity;

/**
 * Family
 */
class Family
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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Family
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
     * @return Family
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
     * @return Family
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
}
