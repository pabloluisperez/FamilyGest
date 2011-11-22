<?php
namespace Weo\BancoBundle\Repository;

use Doctrine\ORM\EntityRepository;

class EntidadBancoRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery('SELECT p FROM WeoBancoBundle:EntidadBanco p ORDER BY p.nombre ASC')
            ->getResult();
    }
}