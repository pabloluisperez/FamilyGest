<?php
namespace Weo\BancoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

//     id, nombre, tipo, usuario_id, compartida, entidad_id, oficina_id, numero_cuenta_completo


/**
 * @ORM\Entity(repositoryClass="Weo\BancoBundle\Repository\CuentaRepository")
 * @ORM\Table(name="cuenta")
 */
class Cuenta
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
     * @ORM\ManyToOne(targetEntity="TipoCuenta", inversedBy="cuentas")
     * @ORM\JoinColumn(name="tipo_cuenta_id", referencedColumnName="id")
     */ 
    protected $tipo_cuenta;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $usuario_id;
        
    /**
     * @ORM\Column(type="boolean")
     */
    protected $compartida;
    
    /**
     * @ORM\ManyToOne(targetEntity="EntidadBanco", inversedBy="oficinas")
     * @ORM\JoinColumn(name="entidad_id", referencedColumnName="id")
     */     
    protected $entidad;

    
    /**
     * @ORM\ManyToOne(targetEntity="OficinaEntidad", inversedBy="cuentas")
     * @ORM\JoinColumn(name="oficina_id", referencedColumnName="id")
     */     
    protected $oficina;
    
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $numero_cuenta;


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
     * Set usuario_id
     *
     * @param integer $usuarioId
     */
    public function setUsuarioId($usuarioId)
    {
        $this->usuario_id = $usuarioId;
    }

    /**
     * Get usuario_id
     *
     * @return integer 
     */
    public function getUsuarioId()
    {
        return $this->usuario_id;
    }

    /**
     * Set compartida
     *
     * @param boolean $compartida
     */
    public function setCompartida($compartida)
    {
        $this->compartida = $compartida;
    }

    /**
     * Get compartida
     *
     * @return boolean 
     */
    public function getCompartida()
    {
        return $this->compartida;
    }

    /**
     * Set numero_cuenta
     *
     * @param string $numeroCuenta
     */
    public function setNumeroCuenta($numeroCuenta)
    {
        $this->numero_cuenta = $numeroCuenta;
    }

    /**
     * Get numero_cuenta
     *
     * @return string 
     */
    public function getNumeroCuenta()
    {
        return $this->numero_cuenta;
    }

    /**
     * Set tipo_cuenta
     *
     * @param Weo\BancoBundle\Entity\TipoCuenta $tipoCuenta
     */
    public function setTipoCuenta(\Weo\BancoBundle\Entity\TipoCuenta $tipoCuenta)
    {
        $this->tipo_cuenta = $tipoCuenta;
    }

    /**
     * Get tipo_cuenta
     *
     * @return Weo\BancoBundle\Entity\TipoCuenta 
     */
    public function getTipoCuenta()
    {
        return $this->tipo_cuenta;
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
     * Set oficina
     *
     * @param Weo\BancoBundle\Entity\OficinaEntidad $oficina
     */
    public function setOficina(\Weo\BancoBundle\Entity\OficinaEntidad $oficina)
    {
        $this->oficina = $oficina;
    }

    /**
     * Get oficina
     *
     * @return Weo\BancoBundle\Entity\OficinaEntidad 
     */
    public function getOficina()
    {
        return $this->oficina;
    }
}