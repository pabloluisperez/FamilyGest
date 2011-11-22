<?php
namespace Weo\BancoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="Pablo\CarteraBundle\Repository\ApunteRepository")
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


}