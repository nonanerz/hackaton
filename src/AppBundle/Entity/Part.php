<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PartRepository")
 */
class Part
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PartCategory", inversedBy="parts")
     */
    private $categoty;


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
     *
     * @return Part
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
     *
     * @return Part
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
     * Set categoty
     *
     * @param \AppBundle\Entity\PartCategory $categoty
     *
     * @return Part
     */
    public function setCategoty(\AppBundle\Entity\PartCategory $categoty = null)
    {
        $this->categoty = $categoty;

        return $this;
    }

    /**
     * Get categoty
     *
     * @return \AppBundle\Entity\PartCategory
     */
    public function getCategoty()
    {
        return $this->categoty;
    }
}
