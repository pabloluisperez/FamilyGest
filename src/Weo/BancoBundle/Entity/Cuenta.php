<?php
namespace Weo\BancoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

//     id, nombre, tipo, usuario_id, compartida, entidad_id, oficina_id, numero_cuenta_completo


/**
 * @ORM\Entity(repositoryClass="Pablo\CarteraBundle\Repository\CuentaRepository")
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
     * @ORM\JoinColumn(name="entidad_id", referencedColumnName="id")
     */     
    protected $oficina;
    
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $numero_cuenta;

}    