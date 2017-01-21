<?php

namespace GotBundle\Entity;

/**
 * House
 */
class House
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
     * @var int
     */
    private $money;


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
     * @return House
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
     * @return House
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
     * Set money
     *
     * @param integer $money
     *
     * @return House
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money
     *
     * @return int
     */
    public function getMoney()
    {
        return $this->money;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $soldiers;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->soldiers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add soldier
     *
     * @param \GotBundle\Entity\Soldier $soldier
     *
     * @return House
     */
    public function addSoldier(\GotBundle\Entity\Soldier $soldier)
    {
        $this->soldiers[] = $soldier;

        return $this;
    }

    /**
     * Remove soldier
     *
     * @param \GotBundle\Entity\Soldier $soldier
     */
    public function removeSoldier(\GotBundle\Entity\Soldier $soldier)
    {
        $this->soldiers->removeElement($soldier);
    }

    /**
     * Get soldiers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSoldiers()
    {
        return $this->soldiers;
    }
}
