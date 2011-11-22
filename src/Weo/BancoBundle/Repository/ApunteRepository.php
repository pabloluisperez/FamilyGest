<?php
namespace Weo\BancoBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ApunteRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery('SELECT p FROM WeoBancoBundle:Apunte p ORDER BY p.concepto ASC')
            ->getResult();
    }
}