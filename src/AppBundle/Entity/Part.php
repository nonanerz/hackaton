<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model\Timestampable\Timestampable;

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
     * @ORM\Column(type="string", nullable=true)
     */
    private $image;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $vilki;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $kolesa;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $zvezdy;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $perecluchateli;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $tormoza;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $kolodki;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $ruli;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $pedali;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $kasety;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $tsepi;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $kruki;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $oboda;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $stsepy;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $nasosy;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $bagazhniki;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $fonari;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $zamki;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $veloSumki;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $krilya;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $shlem;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $perchatki;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $ochki;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $rukzaki;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $kepki;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $nakolenniki;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $bachily;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $baffy;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $komputery;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $zvonki;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $flyagi;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $gripsy;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $actionKamery;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $nakleiki;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default"=0}, nullable=true)
     *
     */
    private $podveskaKoles;

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
            'image' => $this->getImage()
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
     * Set vilki
     *
     * @param boolean $vilki
     *
     * @return Part
     */
    public function setVilki($vilki)
    {
        $this->vilki = $vilki;

        return $this;
    }

    /**
     * Get vilki
     *
     * @return boolean
     */
    public function getVilki()
    {
        return $this->vilki;
    }

    /**
     * Set kolesa
     *
     * @param boolean $kolesa
     *
     * @return Part
     */
    public function setKolesa($kolesa)
    {
        $this->kolesa = $kolesa;

        return $this;
    }

    /**
     * Get kolesa
     *
     * @return boolean
     */
    public function getKolesa()
    {
        return $this->kolesa;
    }

    /**
     * Set zvezdy
     *
     * @param boolean $zvezdy
     *
     * @return Part
     */
    public function setZvezdy($zvezdy)
    {
        $this->zvezdy = $zvezdy;

        return $this;
    }

    /**
     * Get zvezdy
     *
     * @return boolean
     */
    public function getZvezdy()
    {
        return $this->zvezdy;
    }

    /**
     * Set perecluchateli
     *
     * @param boolean $perecluchateli
     *
     * @return Part
     */
    public function setPerecluchateli($perecluchateli)
    {
        $this->perecluchateli = $perecluchateli;

        return $this;
    }

    /**
     * Get perecluchateli
     *
     * @return boolean
     */
    public function getPerecluchateli()
    {
        return $this->perecluchateli;
    }

    /**
     * Set tormoza
     *
     * @param boolean $tormoza
     *
     * @return Part
     */
    public function setTormoza($tormoza)
    {
        $this->tormoza = $tormoza;

        return $this;
    }

    /**
     * Get tormoza
     *
     * @return boolean
     */
    public function getTormoza()
    {
        return $this->tormoza;
    }

    /**
     * Set kolodki
     *
     * @param boolean $kolodki
     *
     * @return Part
     */
    public function setKolodki($kolodki)
    {
        $this->kolodki = $kolodki;

        return $this;
    }

    /**
     * Get kolodki
     *
     * @return boolean
     */
    public function getKolodki()
    {
        return $this->kolodki;
    }

    /**
     * Set ruli
     *
     * @param boolean $ruli
     *
     * @return Part
     */
    public function setRuli($ruli)
    {
        $this->ruli = $ruli;

        return $this;
    }

    /**
     * Get ruli
     *
     * @return boolean
     */
    public function getRuli()
    {
        return $this->ruli;
    }

    /**
     * Set pedali
     *
     * @param boolean $pedali
     *
     * @return Part
     */
    public function setPedali($pedali)
    {
        $this->pedali = $pedali;

        return $this;
    }

    /**
     * Get pedali
     *
     * @return boolean
     */
    public function getPedali()
    {
        return $this->pedali;
    }

    /**
     * Set kasety
     *
     * @param boolean $kasety
     *
     * @return Part
     */
    public function setKasety($kasety)
    {
        $this->kasety = $kasety;

        return $this;
    }

    /**
     * Get kasety
     *
     * @return boolean
     */
    public function getKasety()
    {
        return $this->kasety;
    }

    /**
     * Set tsepi
     *
     * @param boolean $tsepi
     *
     * @return Part
     */
    public function setTsepi($tsepi)
    {
        $this->tsepi = $tsepi;

        return $this;
    }

    /**
     * Get tsepi
     *
     * @return boolean
     */
    public function getTsepi()
    {
        return $this->tsepi;
    }

    /**
     * Set kruki
     *
     * @param boolean $kruki
     *
     * @return Part
     */
    public function setKruki($kruki)
    {
        $this->kruki = $kruki;

        return $this;
    }

    /**
     * Get kruki
     *
     * @return boolean
     */
    public function getKruki()
    {
        return $this->kruki;
    }

    /**
     * Set oboda
     *
     * @param boolean $oboda
     *
     * @return Part
     */
    public function setOboda($oboda)
    {
        $this->oboda = $oboda;

        return $this;
    }

    /**
     * Get oboda
     *
     * @return boolean
     */
    public function getOboda()
    {
        return $this->oboda;
    }

    /**
     * Set stsepy
     *
     * @param boolean $stsepy
     *
     * @return Part
     */
    public function setStsepy($stsepy)
    {
        $this->stsepy = $stsepy;

        return $this;
    }

    /**
     * Get stsepy
     *
     * @return boolean
     */
    public function getStsepy()
    {
        return $this->stsepy;
    }

    /**
     * Set nasosy
     *
     * @param boolean $nasosy
     *
     * @return Part
     */
    public function setNasosy($nasosy)
    {
        $this->nasosy = $nasosy;

        return $this;
    }

    /**
     * Get nasosy
     *
     * @return boolean
     */
    public function getNasosy()
    {
        return $this->nasosy;
    }

    /**
     * Set bagazhniki
     *
     * @param boolean $bagazhniki
     *
     * @return Part
     */
    public function setBagazhniki($bagazhniki)
    {
        $this->bagazhniki = $bagazhniki;

        return $this;
    }

    /**
     * Get bagazhniki
     *
     * @return boolean
     */
    public function getBagazhniki()
    {
        return $this->bagazhniki;
    }

    /**
     * Set fonari
     *
     * @param boolean $fonari
     *
     * @return Part
     */
    public function setFonari($fonari)
    {
        $this->fonari = $fonari;

        return $this;
    }

    /**
     * Get fonari
     *
     * @return boolean
     */
    public function getFonari()
    {
        return $this->fonari;
    }

    /**
     * Set zamki
     *
     * @param boolean $zamki
     *
     * @return Part
     */
    public function setZamki($zamki)
    {
        $this->zamki = $zamki;

        return $this;
    }

    /**
     * Get zamki
     *
     * @return boolean
     */
    public function getZamki()
    {
        return $this->zamki;
    }

    /**
     * Set veloSumki
     *
     * @param boolean $veloSumki
     *
     * @return Part
     */
    public function setVeloSumki($veloSumki)
    {
        $this->veloSumki = $veloSumki;

        return $this;
    }

    /**
     * Get veloSumki
     *
     * @return boolean
     */
    public function getVeloSumki()
    {
        return $this->veloSumki;
    }

    /**
     * Set krilya
     *
     * @param boolean $krilya
     *
     * @return Part
     */
    public function setKrilya($krilya)
    {
        $this->krilya = $krilya;

        return $this;
    }

    /**
     * Get krilya
     *
     * @return boolean
     */
    public function getKrilya()
    {
        return $this->krilya;
    }

    /**
     * Set shlem
     *
     * @param boolean $shlem
     *
     * @return Part
     */
    public function setShlem($shlem)
    {
        $this->shlem = $shlem;

        return $this;
    }

    /**
     * Get shlem
     *
     * @return boolean
     */
    public function getShlem()
    {
        return $this->shlem;
    }

    /**
     * Set perchatki
     *
     * @param boolean $perchatki
     *
     * @return Part
     */
    public function setPerchatki($perchatki)
    {
        $this->perchatki = $perchatki;

        return $this;
    }

    /**
     * Get perchatki
     *
     * @return boolean
     */
    public function getPerchatki()
    {
        return $this->perchatki;
    }

    /**
     * Set ochki
     *
     * @param boolean $ochki
     *
     * @return Part
     */
    public function setOchki($ochki)
    {
        $this->ochki = $ochki;

        return $this;
    }

    /**
     * Get ochki
     *
     * @return boolean
     */
    public function getOchki()
    {
        return $this->ochki;
    }

    /**
     * Set rukzaki
     *
     * @param boolean $rukzaki
     *
     * @return Part
     */
    public function setRukzaki($rukzaki)
    {
        $this->rukzaki = $rukzaki;

        return $this;
    }

    /**
     * Get rukzaki
     *
     * @return boolean
     */
    public function getRukzaki()
    {
        return $this->rukzaki;
    }

    /**
     * Set kepki
     *
     * @param boolean $kepki
     *
     * @return Part
     */
    public function setKepki($kepki)
    {
        $this->kepki = $kepki;

        return $this;
    }

    /**
     * Get kepki
     *
     * @return boolean
     */
    public function getKepki()
    {
        return $this->kepki;
    }

    /**
     * Set nakolenniki
     *
     * @param boolean $nakolenniki
     *
     * @return Part
     */
    public function setNakolenniki($nakolenniki)
    {
        $this->nakolenniki = $nakolenniki;

        return $this;
    }

    /**
     * Get nakolenniki
     *
     * @return boolean
     */
    public function getNakolenniki()
    {
        return $this->nakolenniki;
    }

    /**
     * Set bachily
     *
     * @param boolean $bachily
     *
     * @return Part
     */
    public function setBachily($bachily)
    {
        $this->bachily = $bachily;

        return $this;
    }

    /**
     * Get bachily
     *
     * @return boolean
     */
    public function getBachily()
    {
        return $this->bachily;
    }

    /**
     * Set baffy
     *
     * @param boolean $baffy
     *
     * @return Part
     */
    public function setBaffy($baffy)
    {
        $this->baffy = $baffy;

        return $this;
    }

    /**
     * Get baffy
     *
     * @return boolean
     */
    public function getBaffy()
    {
        return $this->baffy;
    }

    /**
     * Set komputery
     *
     * @param boolean $komputery
     *
     * @return Part
     */
    public function setKomputery($komputery)
    {
        $this->komputery = $komputery;

        return $this;
    }

    /**
     * Get komputery
     *
     * @return boolean
     */
    public function getKomputery()
    {
        return $this->komputery;
    }

    /**
     * Set zvonki
     *
     * @param boolean $zvonki
     *
     * @return Part
     */
    public function setZvonki($zvonki)
    {
        $this->zvonki = $zvonki;

        return $this;
    }

    /**
     * Get zvonki
     *
     * @return boolean
     */
    public function getZvonki()
    {
        return $this->zvonki;
    }

    /**
     * Set flyagi
     *
     * @param boolean $flyagi
     *
     * @return Part
     */
    public function setFlyagi($flyagi)
    {
        $this->flyagi = $flyagi;

        return $this;
    }

    /**
     * Get flyagi
     *
     * @return boolean
     */
    public function getFlyagi()
    {
        return $this->flyagi;
    }

    /**
     * Set gripsy
     *
     * @param boolean $gripsy
     *
     * @return Part
     */
    public function setGripsy($gripsy)
    {
        $this->gripsy = $gripsy;

        return $this;
    }

    /**
     * Get gripsy
     *
     * @return boolean
     */
    public function getGripsy()
    {
        return $this->gripsy;
    }

    /**
     * Set actionKamery
     *
     * @param boolean $actionKamery
     *
     * @return Part
     */
    public function setActionKamery($actionKamery)
    {
        $this->actionKamery = $actionKamery;

        return $this;
    }

    /**
     * Get actionKamery
     *
     * @return boolean
     */
    public function getActionKamery()
    {
        return $this->actionKamery;
    }

    /**
     * Set nakleiki
     *
     * @param boolean $nakleiki
     *
     * @return Part
     */
    public function setNakleiki($nakleiki)
    {
        $this->nakleiki = $nakleiki;

        return $this;
    }

    /**
     * Get nakleiki
     *
     * @return boolean
     */
    public function getNakleiki()
    {
        return $this->nakleiki;
    }

    /**
     * Set podveskaKoles
     *
     * @param boolean $podveskaKoles
     *
     * @return Part
     */
    public function setPodveskaKoles($podveskaKoles)
    {
        $this->podveskaKoles = $podveskaKoles;

        return $this;
    }

    /**
     * Get podveskaKoles
     *
     * @return boolean
     */
    public function getPodveskaKoles()
    {
        return $this->podveskaKoles;
    }
}
