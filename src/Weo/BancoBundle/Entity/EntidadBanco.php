<?php
namespace Weo\BancoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity(repositoryClass="Weo\BancoBundle\Repository\EntidadBancoRepository")
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
     * Set codigo_entidad
     *
     * @param string $codigoEntidad
     */
    public function setCodigoEntidad($codigoEntidad)
    {
        $this->codigo_entidad = $codigoEntidad;
    }

    /**
     * Get codigo_entidad
     *
     * @return string 
     */
    public function getCodigoEntidad()
    {
        return $this->codigo_entidad;
    }

    /**
     * Add oficinas
     *
     * @param Weo\BancoBundle\Entity\OficinaEntidad $oficinas
     */
    public function addOficinaEntidad(\Weo\BancoBundle\Entity\OficinaEntidad $oficinas)
    {
        $this->oficinas[] = $oficinas;
    }

    /**
     * Get oficinas
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getOficinas()
    {
        return $this->oficinas;
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
    	return $this->getCodigoEntidad() . " - ". $this->getNombre();
    }
}