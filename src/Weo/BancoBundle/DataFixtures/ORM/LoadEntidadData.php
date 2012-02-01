<?php 
namespace Weo\BancoBundle\DataFixtures\ORM;

use Weo\BancoBundle\Entity\EntidadBanco;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Acme\HelloBundle\Entity\User;

class LoadEntidadData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
    	$banco = new EntidadBanco();
    	$banco->setCodigoEntidad("2108");
    	$banco->setNombre("Caja España");
        $manager->persist($banco);
        $manager->flush();
    }
}