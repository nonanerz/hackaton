<?php

namespace AppBundle\Repository;

use AppBundle\Form\Model\Filter;

/**
 * PartRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PartRepository extends \Doctrine\ORM\EntityRepository
{
    public function selectByFilter(Filter $filter) {

        $qb = $this->createQueryBuilder('p');

        if ($filter->getKind()) {
            $qb
                ->andWhere('p.kind = :kind')
                ->setParameter('kind', $filter->getKind());
        }

        if ($filter->getSearchTerm()) {
            $qb
                ->andWhere('p.name = :searchTerm')
                ->setParameter('search', '%' . $filter->getSearchTerm() . '%');
            ;
        }

        if ($filter->getAfterId()) {
            $qb
                ->andWhere('p.id > :afterId')
                ->setParameter('afterId', $filter->getAfterId())
            ;
        }

        if ($filter->getBeforeId()) {
            $qb
                ->andWhere('p.id < :beforeId')
                ->setParameter('beforeId', $filter->getBeforeId())
            ;
        }

        return $qb->getQuery()->getResult();

    }
}
