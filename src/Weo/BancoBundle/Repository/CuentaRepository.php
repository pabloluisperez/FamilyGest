<?php
namespace Weo\BancoBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CuentaRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery('SELECT p FROM WeoBancoBundle:Cuenta p ORDER BY p.nombre ASC')
            ->getResult();
    }
}