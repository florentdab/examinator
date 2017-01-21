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
     * @var int
     */
    private $army;

    /**
     * @var int
     */
    private $money;

    /**
     * @var string
     */
    private $family;


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
     * @param integer $army
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
     * @return int
     */
    public function getArmy()
    {
        return $this->army;
    }

    /**
     * Set money
     *
     * @param integer $money
     *
     * @return Houses
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
     * Set family
     *
     * @param string $family
     *
     * @return Houses
     */
    public function setFamily($family)
    {
        $this->family = $family;

        return $this;
    }

    /**
     * Get family
     *
     * @return string
     */
    public function getFamily()
    {
        return $this->family;
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
     * @param \GameBundle\Entity\Soldiers $soldier
     *
     * @return Houses
     */
    public function addSoldier(\GameBundle\Entity\Soldiers $soldier)
    {
        $this->soldiers[] = $soldier;

        return $this;
    }

    /**
     * Remove soldier
     *
     * @param \GameBundle\Entity\Soldiers $soldier
     */
    public function removeSoldier(\GameBundle\Entity\Soldiers $soldier)
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
