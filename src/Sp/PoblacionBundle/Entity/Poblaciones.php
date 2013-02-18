<?php

namespace Sp\PoblacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poblaciones
 *
 * @ORM\Table(name="poblaciones")
 * @ORM\Entity
 */
class Poblaciones
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
     * @ORM\Column(name="poblacion", type="string", length=80, nullable=true)
     */
    private $poblacion;

    /**
     * @var \Paises
     *
     * @ORM\ManyToOne(targetEntity="Paises")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="paises_Id", referencedColumnName="Id")
     * })
     */
    private $paises;

    /**
     * @var \Provincias
     *
     * @ORM\ManyToOne(targetEntity="Provincias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="provincias_Id", referencedColumnName="Id")
     * })
     */
    private $provincias;



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
     * Set poblacion
     *
     * @param string $poblacion
     * @return Poblaciones
     */
    public function setPoblacion($poblacion)
    {
        $this->poblacion = $poblacion;
    
        return $this;
    }

    /**
     * Get poblacion
     *
     * @return string 
     */
    public function getPoblacion()
    {
        return $this->poblacion;
    }

    /**
     * Set paises
     *
     * @param \Sp\PoblacionBundle\Entity\Paises $paises
     * @return Poblaciones
     */
    public function setPaises(\Sp\PoblacionBundle\Entity\Paises $paises = null)
    {
        $this->paises = $paises;
    
        return $this;
    }

    /**
     * Get paises
     *
     * @return \Sp\PoblacionBundle\Entity\Paises 
     */
    public function getPaises()
    {
        return $this->paises;
    }

    /**
     * Set provincias
     *
     * @param \Sp\PoblacionBundle\Entity\Provincias $provincias
     * @return Poblaciones
     */
    public function setProvincias(\Sp\PoblacionBundle\Entity\Provincias $provincias = null)
    {
        $this->provincias = $provincias;
    
        return $this;
    }

    /**
     * Get provincias
     *
     * @return \Sp\PoblacionBundle\Entity\Provincias 
     */
    public function getProvincias()
    {
        return $this->provincias;
    }
}