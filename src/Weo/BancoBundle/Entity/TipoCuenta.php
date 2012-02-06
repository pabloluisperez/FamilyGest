<?php
namespace Weo\BancoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
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
    	return $this->getNombre();
    }
}