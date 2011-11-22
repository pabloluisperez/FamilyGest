<?php
namespace Weo\BancoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

//     id, nombre, tipo, usuario_id, compartida, entidad_id, oficina_id, numero_cuenta_completo


/**
 * @ORM\Entity
 * @ORM\Table(name="tipo_cuenta")
 */
class TipoCuenta
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
     * @ORM\OneToMany(targetEntity="Cuenta", mappedBy="tipo_cuenta")
     */    
    protected $cuentas;
    
    public function __construct()
    {
        $this->cuentas = new ArrayCollection();
    }
     
}