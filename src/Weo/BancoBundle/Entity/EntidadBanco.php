<?php
namespace Weo\BancoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Pablo\CarteraBundle\Repository\EntidadBancoRepository")
 * @ORM\Table(name="entidad_banco")
 */
class EntidadBanco
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $nombre;

    /**
     * @ORM\Column(type="string", length=4)
     */
    protected $codigo_entidad;
    
    /**
     * @ORM\OneToMany(targetEntity="OficinaEntidad", mappedBy="entidad_banco")
     */    
    protected $oficinas;

    /**
     * @ORM\OneToMany(targetEntity="Cuenta", mappedBy="entidad_banco")
     */    
    protected $cuentas;
    
    
    public function __construct()
    {
        $this->oficinas = new ArrayCollection();
        $this->cuentas = new ArrayCollection();
    }
        
        
}