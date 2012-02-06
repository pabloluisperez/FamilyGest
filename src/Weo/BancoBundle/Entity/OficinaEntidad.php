<?php
namespace Weo\BancoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Weo\BancoBundle\Repository\OficinaEntidadRepository")
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
     * @ORM\OneToMany(targetEntity="Cuenta", mappedBy="oficina")
     */    
    protected $cuentas;
    
    public function __construct()
    {
        $this->cuentas = new ArrayCollection();
    }    


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set direccion
     *
     * @param text $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * Get direccion
     *
     * @return text 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set lat
     *
     * @param string $lat
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    }

    /**
     * Get lat
     *
     * @return string 
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lon
     *
     * @param string $lon
     */
    public function setLon($lon)
    {
        $this->lon = $lon;
    }

    /**
     * Get lon
     *
     * @return string 
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * Set nombre_contacto
     *
     * @param string $nombreContacto
     */
    public function setNombreContacto($nombreContacto)
    {
        $this->nombre_contacto = $nombreContacto;
    }

    /**
     * Get nombre_contacto
     *
     * @return string 
     */
    public function getNombreContacto()
    {
        return $this->nombre_contacto;
    }

    /**
     * Set email_contacto
     *
     * @param string $emailContacto
     */
    public function setEmailContacto($emailContacto)
    {
        $this->email_contacto = $emailContacto;
    }

    /**
     * Get email_contacto
     *
     * @return string 
     */
    public function getEmailContacto()
    {
        return $this->email_contacto;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set codigo_oficina
     *
     * @param string $codigoOficina
     */
    public function setCodigoOficina($codigoOficina)
    {
        $this->codigo_oficina = $codigoOficina;
    }

    /**
     * Get codigo_oficina
     *
     * @return string 
     */
    public function getCodigoOficina()
    {
        return $this->codigo_oficina;
    }

    /**
     * Set entidad
     *
     * @param Weo\BancoBundle\Entity\EntidadBanco $entidad
     */
    public function setEntidad(\Weo\BancoBundle\Entity\EntidadBanco $entidad)
    {
        $this->entidad = $entidad;
    }

    /**
     * Get entidad
     *
     * @return Weo\BancoBundle\Entity\EntidadBanco 
     */
    public function getEntidad()
    {
        return $this->entidad;
    }

    /**
     * Add cuentas
     *
     * @param Weo\BancoBundle\Entity\Cuenta $cuentas
     */
    public function addCuenta(\Weo\BancoBundle\Entity\Cuenta $cuentas)
    {
        $this->cuentas[] = $cuentas;
    }

    /**
     * Get cuentas
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCuentas()
    {
        return $this->cuentas;
    }
    
    public function __toString()
    {
    	return $this->getCodigoOficina();
    }
}