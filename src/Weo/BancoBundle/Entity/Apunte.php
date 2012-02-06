<?php
namespace Weo\BancoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="Weo\BancoBundle\Repository\ApunteRepository")
 * @ORM\Table(name="apunte")
 */
class Apunte
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /*
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */  
    protected $usuario_id;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $concepto;
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $fecha_apunte;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="TipoApunte", inversedBy="apuntes")
     * @ORM\JoinColumn(name="tipo_apunte_id", referencedColumnName="id")
     */   
    protected $tipo_apunte;

    /**
     * @ORM\ManyToOne(targetEntity="CategoriaApunte", inversedBy="apuntes")
     * @ORM\JoinColumn(name="categoria_apunte_id", referencedColumnName="id")
     */   
    
    protected $categoria_apunte;

    /**
     * @ORM\ManyToOne(targetEntity="Cuenta", inversedBy="apuntes")
     * @ORM\JoinColumn(name="cuenta_id", referencedColumnName="id")
     */   
    protected $cuenta;



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
     * Set concepto
     *
     * @param text $concepto
     */
    public function setConcepto($concepto)
    {
        $this->concepto = $concepto;
    }

    /**
     * Get concepto
     *
     * @return text 
     */
    public function getConcepto()
    {
        return $this->concepto;
    }

    /**
     * Set fecha_apunte
     *
     * @param datetime $fechaApunte
     */
    public function setFechaApunte($fechaApunte)
    {
        $this->fecha_apunte = $fechaApunte;
    }

    /**
     * Get fecha_apunte
     *
     * @return datetime 
     */
    public function getFechaApunte()
    {
        return $this->fecha_apunte;
    }

    /**
     * Set tipo_apunte
     *
     * @param Weo\BancoBundle\Entity\TipoApunte $tipoApunte
     */
    public function setTipoApunte(\Weo\BancoBundle\Entity\TipoApunte $tipoApunte)
    {
        $this->tipo_apunte = $tipoApunte;
    }

    /**
     * Get tipo_apunte
     *
     * @return Weo\BancoBundle\Entity\TipoApunte 
     */
    public function getTipoApunte()
    {
        return $this->tipo_apunte;
    }

    /**
     * Set categoria_apunte
     *
     * @param Weo\BancoBundle\Entity\CategoriaApunte $categoriaApunte
     */
    public function setCategoriaApunte(\Weo\BancoBundle\Entity\CategoriaApunte $categoriaApunte)
    {
        $this->categoria_apunte = $categoriaApunte;
    }

    /**
     * Get categoria_apunte
     *
     * @return Weo\BancoBundle\Entity\CategoriaApunte 
     */
    public function getCategoriaApunte()
    {
        return $this->categoria_apunte;
    }

    /**
     * Set cuenta
     *
     * @param Weo\BancoBundle\Entity\Cuenta $cuenta
     */
    public function setCuenta(\Weo\BancoBundle\Entity\Cuenta $cuenta)
    {
        $this->cuenta = $cuenta;
    }

    /**
     * Get cuenta
     *
     * @return Weo\BancoBundle\Entity\Cuenta 
     */
    public function getCuenta()
    {
        return $this->cuenta;
    }
}