<?php

namespace AppBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model\Timestampable\Timestampable;

/**
 * @ORM\Entity
 */
class PartKind
{
    use Timestampable;

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
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Part", mappedBy="kind")
     */
    private $parts;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PartCategory")
     */
    private $category;

    public function __construct()
    {
        $this->parts = new ArrayCollection();
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
     *
     * @return PartKind
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
     * Add part
     *
     * @param \AppBundle\Entity\Part $part
     *
     * @return PartKind
     */
    public function addPart(\AppBundle\Entity\Part $part)
    {
        $this->parts[] = $part;

        return $this;
    }

    /**
     * Remove part
     *
     * @param \AppBundle\Entity\Part $part
     */
    public function removePart(\AppBundle\Entity\Part $part)
    {
        $this->parts->removeElement($part);
    }

    /**
     * Get parts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParts()
    {
        return $this->parts;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\PartCategory $category
     *
     * @return PartKind
     */
    public function setCategory(\AppBundle\Entity\PartCategory $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\PartCategory
     */
    public function getCategory()
    {
        return $this->category;
    }
}
