<?php
namespace Weo\BancoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="tipo_apunte")
 */
class TipoApunte
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
     * @ORM\OneToMany(targetEntity="Apunte", mappedBy="tipo_apunte")
     */    
    protected $apuntes;
    
    public function __construct()
    {
        $this->apuntes = new ArrayCollection();
    }
     
}