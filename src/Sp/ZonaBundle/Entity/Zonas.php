<?php

namespace Sp\ZonaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zonas
 *
 * @ORM\Table(name="zonas")
 * @ORM\Entity
 */
class Zonas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="zona", type="string", length=80, nullable=true)
     */
    private $zona;

    /**
     * @var \Paises
     *
     * @ORM\ManyToOne(targetEntity="Sp\PaisBundle\Entity\Paises")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="paises_Id", referencedColumnName="Id")
     * })
     */
    private $paises;

    /**
     * @var \Provincias
     *
     * @ORM\ManyToOne(targetEntity="Sp\ProvinciaBundle\Entity\Provincias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="provincias_Id", referencedColumnName="Id")
     * })
     */
    private $provincias;

    /**
     * @var \Poblaciones
     *
     * @ORM\ManyToOne(targetEntity="Sp\PoblacionBundle\Entity\Poblaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="poblaciones_Id", referencedColumnName="Id")
     * })
     */
    private $poblaciones;



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
     * Set zona
     *
     * @param string $zona
     * @return Zonas
     */
    public function setZona($zona)
    {
        $this->zona = $zona;
    
        return $this;
    }

    /**
     * Get zona
     *
     * @return string 
     */
    public function getZona()
    {
        return $this->zona;
    }

    /**
     * Set paises
     *
     * @param \Sp\PaisBundle\Entity\Paises $paises
     * @return Zonas
     */
    public function setPaises(\Sp\PaisBundle\Entity\Paises $paises = null)
    {
        $this->paises = $paises;
    
        return $this;
    }

    /**
     * Get paises
     *
     * @return \Sp\PaisBundle\Entity\Paises 
     */
    public function getPaises()
    {
        return $this->paises;
    }

    /**
     * Set provincias
     *
     * @param \Sp\ProvinciaBundle\Entity\Provincias $provincias
     * @return Zonas
     */
    public function setProvincias(\Sp\ProvinciaBundle\Entity\Provincias $provincias = null)
    {
        $this->provincias = $provincias;
    
        return $this;
    }

    /**
     * Get provincias
     *
     * @return \Sp\ProvinciaBundle\Entity\Provincias 
     */
    public function getProvincias()
    {
        return $this->provincias;
    }

    /**
     * Set poblaciones
     *
     * @param \Sp\PoblacionBundle\Entity\Poblaciones $poblaciones
     * @return Zonas
     */
    public function setPoblaciones(\Sp\PoblacionBundle\Entity\Poblaciones $poblaciones = null)
    {
        $this->poblaciones = $poblaciones;
    
        return $this;
    }

    /**
     * Get poblaciones
     *
     * @return \Sp\PoblacionBundle\Entity\Poblaciones 
     */
    public function getPoblaciones()
    {
        return $this->poblaciones;
    }
}