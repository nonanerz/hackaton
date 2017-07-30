<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model\Timestampable\Timestampable;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PartRepository")
 */
class Part implements \JsonSerializable
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
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PartCategory", inversedBy="parts")
     */
    private $category;

    /**
     * @ORM\Column(type="string")
     */
    private $price;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $url;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\S3\S3File", fetch="EAGER", cascade={"persist", "remove"}, orphanRemoval=true)
     * @ORM\JoinColumn(onDelete="SET NULL")
     */
    private $image;

    /**
     * @var UploadedFile
     */
    private $tmpFile;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PartKind", inversedBy="parts")
     */
    private $kind;

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
     * Set category
     *
     * @param \AppBundle\Entity\PartCategory $category
     *
     * @return Part
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

    
    function jsonSerialize()
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'description' => $this->getDescription(),
            'price' => $this->getPrice(),
            'url' => $this->getUrl(),
            'image' => $this->getImage(),
            'category' => $this->getCategory() instanceof PartCategory ? $this->getCategory()->getId() : null,
            'kind' => $this->getKind() instanceof PartKind ? $this->getKind()->getId() : null
        ];
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Part
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Part
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Part
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }


    /**
     * Set kind
     *
     * @param \AppBundle\Entity\PartKind $kind
     *
     * @return Part
     */
    public function setKind(\AppBundle\Entity\PartKind $kind = null)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Get kind
     *
     * @return \AppBundle\Entity\PartKind
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @return mixed
     */
    public function getTmpFile()
    {
        return $this->tmpFile;
    }

    /**
     * @param mixed $tmpFile
     */
    public function setTmpFile($tmpFile)
    {
        $this->tmpFile = $tmpFile;
    }

}
