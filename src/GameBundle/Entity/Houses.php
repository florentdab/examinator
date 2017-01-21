<?php

namespace GameBundle\Entity;

/**
 * Houses
 */
class Houses
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $sigil;

    /**
     * @var string
     */
    private $army;

    /**
     * @var int
     */
    private $amountOfMoney;

    /**
     * @var string
     */
    private $membersOfTheFamily;


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
     * Set name
     *
     * @param string $name
     *
     * @return Houses
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
     * Set sigil
     *
     * @param string $sigil
     *
     * @return Houses
     */
    public function setSigil($sigil)
    {
        $this->sigil = $sigil;

        return $this;
    }

    /**
     * Get sigil
     *
     * @return string
     */
    public function getSigil()
    {
        return $this->sigil;
    }

    /**
     * Set army
     *
     * @param string $army
     *
     * @return Houses
     */
    public function setArmy($army)
    {
        $this->army = $army;

        return $this;
    }

    /**
     * Get army
     *
     * @return string
     */
    public function getArmy()
    {
        return $this->army;
    }

    /**
     * Set amountOfMoney
     *
     * @param integer $amountOfMoney
     *
     * @return Houses
     */
    public function setAmountOfMoney($amountOfMoney)
    {
        $this->amountOfMoney = $amountOfMoney;

        return $this;
    }

    /**
     * Get amountOfMoney
     *
     * @return int
     */
    public function getAmountOfMoney()
    {
        return $this->amountOfMoney;
    }

    /**
     * Set membersOfTheFamily
     *
     * @param string $membersOfTheFamily
     *
     * @return Houses
     */
    public function setMembersOfTheFamily($membersOfTheFamily)
    {
        $this->membersOfTheFamily = $membersOfTheFamily;

        return $this;
    }

    /**
     * Get membersOfTheFamily
     *
     * @return string
     */
    public function getMembersOfTheFamily()
    {
        return $this->membersOfTheFamily;
    }
}

