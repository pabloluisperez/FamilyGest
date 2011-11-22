<?php
namespace Weo\BancoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="Pablo\CarteraBundle\Repository\CategoriaApunteRepository")
 * @ORM\Table(name="categoria_apunte")
 */
class CategoriaApunte
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=500)
     */
    protected $nombre;


    /**
     * @ORM\OneToMany(targetEntity="Apunte", mappedBy="categoria_apunte")
     */    
    protected $apuntes;
    
    public function __construct()
    {
        $this->apuntes = new ArrayCollection();
    }
     
}