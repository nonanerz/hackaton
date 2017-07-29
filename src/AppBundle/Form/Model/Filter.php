<?php

namespace AppBundle\Form\Model;

class Filter
{
    const LIMIT_10 = 10;
    const LIMIT_12 = 12;
    const LIMIT_20 = 20;
    const LIMIT_50 = 50;
    const LIMIT_100 = 100;
    const LIMIT_200 = 200;

    /**
     * @var string
     */
    private $afterId;

    /**
     * @var string
     */
    private $beforeId;

    /**
     * @var int
     */
    private $limit;

    /**
     * @var boolean
     *
     */
    private $vilki;
    /**
     * @var boolean
     *
     */
    private $kolesa;
    /**
     * @var boolean
     *
     */
    private $zvezdy;
    /**
     * @var boolean
     *
     */
    private $perecluchateli;
    /**
     * @var boolean
     *
     */
    private $tormoza;
    /**
     * @var boolean
     *
     */
    private $kolodki;
    /**
     * @var boolean
     *
     */
    private $ruli;
    /**
     * @var boolean
     *
     */
    private $pedali;
    /**
     * @var boolean
     *
     */
    private $kasety;
    /**
     * @var boolean
     *
     */
    private $tsepi;
    /**
     * @var boolean
     *
     */
    private $kruki;
    /**
     * @var boolean
     *
     */
    private $oboda;
    /**
     * @var boolean
     *
     */
    private $stsepy;
    /**
     * @var boolean
     *
     */
    private $nasosy;
    /**
     * @var boolean
     *
     */
    private $bagazhniki;
    /**
     * @var boolean
     *
     */
    private $fonari;
    /**
     * @var boolean
     *
     */
    private $zamki;
    /**
     * @var boolean
     *
     */
    private $veloSumki;
    /**
     * @var boolean
     *
     */
    private $krilya;
    /**
     * @var boolean
     *
     */
    private $shlem;
    /**
     * @var boolean
     *
     */
    private $perchatki;
    /**
     * @var boolean
     *
     */
    private $ochki;
    /**
     * @var boolean
     *
     */
    private $rukzaki;
    /**
     * @var boolean
     *
     */
    private $kepki;
    /**
     * @var boolean
     *
     */
    private $nakolenniki;
    /**
     * @var boolean
     *
     */
    private $bachily;
    /**
     * @var boolean
     *
     */
    private $baffy;
    /**
     * @var boolean
     *
     */
    private $komputery;
    /**
     * @var boolean
     *
     */
    private $zvonki;
    /**
     * @var boolean
     *
     */
    private $flyagi;
    /**
     * @var boolean
     *
     */
    private $gripsy;
    /**
     * @var boolean
     *
     */
    private $actionKamery;
    /**
     * @var boolean
     *
     */
    private $nakleiki;
    /**
     * @var boolean
     *
     */
    private $podveskaKoles;

    /**
     * @var string
     */
    private $searchTerm;

    public function __construct()
    {
        $this->setLimit();
    }

    /**
     * @return string
     */
    public function getAfterId()
    {
        return $this->afterId;
    }

    /**
     * @param string $afterId
     *
     * @return $this
     */
    public function setAfterId($afterId)
    {
        $this->afterId = $afterId;

        return $this;
    }

    /**
     * @return string
     */
    public function getBeforeId()
    {
        return $this->beforeId;
    }

    /**
     * @param string $beforeId
     *
     * @return $this
     */
    public function setBeforeId($beforeId)
    {
        $this->beforeId = $beforeId;

        return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     *
     * @return $this
     */
    public function setLimit($limit = self::LIMIT_50)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @return bool
     */
    public function isVilki()
    {
        return $this->vilki;
    }

    /**
     * @param bool $vilki
     */
    public function setVilki($vilki)
    {
        $this->vilki = $vilki;
    }

    /**
     * @return bool
     */
    public function isKolesa()
    {
        return $this->kolesa;
    }

    /**
     * @param bool $kolesa
     */
    public function setKolesa($kolesa)
    {
        $this->kolesa = $kolesa;
    }

    /**
     * @return bool
     */
    public function isZvezdy()
    {
        return $this->zvezdy;
    }

    /**
     * @param bool $zvezdy
     */
    public function setZvezdy($zvezdy)
    {
        $this->zvezdy = $zvezdy;
    }

    /**
     * @return bool
     */
    public function isPerecluchateli()
    {
        return $this->perecluchateli;
    }

    /**
     * @param bool $perecluchateli
     */
    public function setPerecluchateli($perecluchateli)
    {
        $this->perecluchateli = $perecluchateli;
    }

    /**
     * @return bool
     */
    public function isTormoza()
    {
        return $this->tormoza;
    }

    /**
     * @param bool $tormoza
     */
    public function setTormoza($tormoza)
    {
        $this->tormoza = $tormoza;
    }

    /**
     * @return bool
     */
    public function isKolodki()
    {
        return $this->kolodki;
    }

    /**
     * @param bool $kolodki
     */
    public function setKolodki($kolodki)
    {
        $this->kolodki = $kolodki;
    }

    /**
     * @return bool
     */
    public function isRuli()
    {
        return $this->ruli;
    }

    /**
     * @param bool $ruli
     */
    public function setRuli($ruli)
    {
        $this->ruli = $ruli;
    }

    /**
     * @return bool
     */
    public function isPedali()
    {
        return $this->pedali;
    }

    /**
     * @param bool $pedali
     */
    public function setPedali($pedali)
    {
        $this->pedali = $pedali;
    }

    /**
     * @return bool
     */
    public function isKasety()
    {
        return $this->kasety;
    }

    /**
     * @param bool $kasety
     */
    public function setKasety($kasety)
    {
        $this->kasety = $kasety;
    }

    /**
     * @return bool
     */
    public function isTsepi()
    {
        return $this->tsepi;
    }

    /**
     * @param bool $tsepi
     */
    public function setTsepi($tsepi)
    {
        $this->tsepi = $tsepi;
    }

    /**
     * @return bool
     */
    public function isKruki()
    {
        return $this->kruki;
    }

    /**
     * @param bool $kruki
     */
    public function setKruki($kruki)
    {
        $this->kruki = $kruki;
    }

    /**
     * @return bool
     */
    public function isOboda()
    {
        return $this->oboda;
    }

    /**
     * @param bool $oboda
     */
    public function setOboda($oboda)
    {
        $this->oboda = $oboda;
    }

    /**
     * @return bool
     */
    public function isStsepy()
    {
        return $this->stsepy;
    }

    /**
     * @param bool $stsepy
     */
    public function setStsepy($stsepy)
    {
        $this->stsepy = $stsepy;
    }

    /**
     * @return bool
     */
    public function isNasosy()
    {
        return $this->nasosy;
    }

    /**
     * @param bool $nasosy
     */
    public function setNasosy($nasosy)
    {
        $this->nasosy = $nasosy;
    }

    /**
     * @return bool
     */
    public function isBagazhniki()
    {
        return $this->bagazhniki;
    }

    /**
     * @param bool $bagazhniki
     */
    public function setBagazhniki($bagazhniki)
    {
        $this->bagazhniki = $bagazhniki;
    }

    /**
     * @return bool
     */
    public function isFonari()
    {
        return $this->fonari;
    }

    /**
     * @param bool $fonari
     */
    public function setFonari($fonari)
    {
        $this->fonari = $fonari;
    }

    /**
     * @return bool
     */
    public function isZamki()
    {
        return $this->zamki;
    }

    /**
     * @param bool $zamki
     */
    public function setZamki($zamki)
    {
        $this->zamki = $zamki;
    }

    /**
     * @return bool
     */
    public function isVeloSumki()
    {
        return $this->veloSumki;
    }

    /**
     * @param bool $veloSumki
     */
    public function setVeloSumki($veloSumki)
    {
        $this->veloSumki = $veloSumki;
    }

    /**
     * @return bool
     */
    public function isKrilya()
    {
        return $this->krilya;
    }

    /**
     * @param bool $krilya
     */
    public function setKrilya($krilya)
    {
        $this->krilya = $krilya;
    }

    /**
     * @return bool
     */
    public function isShlem()
    {
        return $this->shlem;
    }

    /**
     * @param bool $shlem
     */
    public function setShlem($shlem)
    {
        $this->shlem = $shlem;
    }

    /**
     * @return bool
     */
    public function isPerchatki()
    {
        return $this->perchatki;
    }

    /**
     * @param bool $perchatki
     */
    public function setPerchatki($perchatki)
    {
        $this->perchatki = $perchatki;
    }

    /**
     * @return bool
     */
    public function isOchki()
    {
        return $this->ochki;
    }

    /**
     * @param bool $ochki
     */
    public function setOchki($ochki)
    {
        $this->ochki = $ochki;
    }

    /**
     * @return bool
     */
    public function isRukzaki()
    {
        return $this->rukzaki;
    }

    /**
     * @param bool $rukzaki
     */
    public function setRukzaki($rukzaki)
    {
        $this->rukzaki = $rukzaki;
    }

    /**
     * @return bool
     */
    public function isKepki()
    {
        return $this->kepki;
    }

    /**
     * @param bool $kepki
     */
    public function setKepki($kepki)
    {
        $this->kepki = $kepki;
    }

    /**
     * @return bool
     */
    public function isNakolenniki()
    {
        return $this->nakolenniki;
    }

    /**
     * @param bool $nakolenniki
     */
    public function setNakolenniki($nakolenniki)
    {
        $this->nakolenniki = $nakolenniki;
    }

    /**
     * @return bool
     */
    public function isBachily()
    {
        return $this->bachily;
    }

    /**
     * @param bool $bachily
     */
    public function setBachily($bachily)
    {
        $this->bachily = $bachily;
    }

    /**
     * @return bool
     */
    public function isBaffy()
    {
        return $this->baffy;
    }

    /**
     * @param bool $baffy
     */
    public function setBaffy($baffy)
    {
        $this->baffy = $baffy;
    }

    /**
     * @return bool
     */
    public function isKomputery()
    {
        return $this->komputery;
    }

    /**
     * @param bool $komputery
     */
    public function setKomputery($komputery)
    {
        $this->komputery = $komputery;
    }

    /**
     * @return bool
     */
    public function isZvonki()
    {
        return $this->zvonki;
    }

    /**
     * @param bool $zvonki
     */
    public function setZvonki($zvonki)
    {
        $this->zvonki = $zvonki;
    }

    /**
     * @return bool
     */
    public function isFlyagi()
    {
        return $this->flyagi;
    }

    /**
     * @param bool $flyagi
     */
    public function setFlyagi($flyagi)
    {
        $this->flyagi = $flyagi;
    }

    /**
     * @return bool
     */
    public function isGripsy()
    {
        return $this->gripsy;
    }

    /**
     * @param bool $gripsy
     */
    public function setGripsy($gripsy)
    {
        $this->gripsy = $gripsy;
    }

    /**
     * @return bool
     */
    public function isActionKamery()
    {
        return $this->actionKamery;
    }

    /**
     * @param bool $actionKamery
     */
    public function setActionKamery($actionKamery)
    {
        $this->actionKamery = $actionKamery;
    }

    /**
     * @return bool
     */
    public function isNakleiki()
    {
        return $this->nakleiki;
    }

    /**
     * @param bool $nakleiki
     */
    public function setNakleiki($nakleiki)
    {
        $this->nakleiki = $nakleiki;
    }

    /**
     * @return bool
     */
    public function isPodveskaKoles()
    {
        return $this->podveskaKoles;
    }

    /**
     * @param bool $podveskaKoles
     */
    public function setPodveskaKoles($podveskaKoles)
    {
        $this->podveskaKoles = $podveskaKoles;
    }

    /**
     * @return string
     */
    public function getSearchTerm()
    {
        return $this->searchTerm;
    }

    /**
     * @param string $searchTerm
     */
    public function setSearchTerm($searchTerm)
    {
        $this->searchTerm = $searchTerm;
    }


    public static function getLimits()
    {
        return [
            static::LIMIT_10,
            static::LIMIT_12,
            static::LIMIT_20,
            static::LIMIT_50,
            static::LIMIT_100,
            static::LIMIT_200
        ];
    }
}
