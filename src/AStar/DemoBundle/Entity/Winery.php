<?php

namespace AStar\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Winery
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Winery
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=false, nullable=false)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, unique=false, nullable=false)
     */
    protected $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="fax", type="integer", nullable=false)
     */
    protected $fax;

    /**
     * @var integer
     *
     * @ORM\Column(name="phone", type="integer", nullable=false)
     */
    protected $phone;

    /**
     * @ORM\ManyToOne(targetEntity="Region", cascade={"persist"})
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    protected $region;

    public function __toString()
    {
        return $this->getName() ? : 'Add new winery';
    }

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
     * @return Winery
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
     * Set description
     *
     * @param string $description
     * @return Winery
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set fax
     *
     * @param integer $fax
     * @return Winery
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return integer 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     * @return Winery
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return integer 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set region
     *
     * @param \AStar\DemoBundle\Entity\Region $region
     * @return Winery
     */
    public function setRegion(\AStar\DemoBundle\Entity\Region $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \AStar\DemoBundle\Entity\Region 
     */
    public function getRegion()
    {
        return $this->region;
    }

}
