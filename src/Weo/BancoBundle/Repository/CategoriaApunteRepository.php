<?php
namespace Weo\BancoBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CategoriaApunteRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery('SELECT p FROM WeoBancoBundle:CategoriaApunte p ORDER BY p.nombre ASC')
            ->getResult();
    }
}