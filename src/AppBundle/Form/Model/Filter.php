<?php

namespace AppBundle\Form\Model;

use AppBundle\Entity\PartKind;

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
     * @var string
     */
    private $searchTerm;

    /**
     * @var PartKind
     */
    private $kind;

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

    /**
     * @return PartKind
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param PartKind $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
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
