<?php
namespace Weo\BancoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Pablo\CarteraBundle\Repository\OficinaEntidadRepository")
 * @ORM\Table(name="oficina_entidad")
 */
class OficinaEntidad
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
     * @ORM\Column(type="text", length=4000)
     */
    protected $direccion;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $lat;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $lon;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $nombre_contacto;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $email_contacto;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $telefono;

    /**
     * @ORM\Column(type="string", length=4)
     */
    protected $codigo_oficina;


    /**
     * @ORM\ManyToOne(targetEntity="EntidadBanco", inversedBy="oficinas")
     * @ORM\JoinColumn(name="entidad_id", referencedColumnName="id")
     */     
    protected $entidad;
    
    
    
    /**
     * @ORM\OneToMany(targetEntity="Cuenta", mappedBy="oficina_banco")
     */    
    protected $cuentas;
    
    public function __construct()
    {
        $this->cuentas = new ArrayCollection();
    }    

}
