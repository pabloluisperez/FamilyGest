<?php
namespace Weo\BancoBundle\Repository;

use Doctrine\ORM\EntityRepository;

class EntidadOficinaRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery('SELECT p FROM WeoBancoBundle:EntidadOficina p ORDER BY p.nombre ASC')
            ->getResult();
    }
}