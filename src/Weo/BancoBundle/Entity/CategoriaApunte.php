<?php
namespace Weo\BancoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="Weo\BancoBundle\Repository\CategoriaApunteRepository")
 * @ORM\Table(name="categoria_apunte")
 */
class CategoriaApunte
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
     * @ORM\OneToMany(targetEntity="Apunte", mappedBy="categoria_apunte")
     */    
    protected $apuntes;
    
    public function __construct()
    {
        $this->apuntes = new ArrayCollection();
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
     * Add apuntes
     *
     * @param Weo\BancoBundle\Entity\Apunte $apuntes
     */
    public function addApunte(\Weo\BancoBundle\Entity\Apunte $apuntes)
    {
        $this->apuntes[] = $apuntes;
    }

    /**
     * Get apuntes
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getApuntes()
    {
        return $this->apuntes;
    }
}