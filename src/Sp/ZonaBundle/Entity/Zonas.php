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
     * @ORM\ManyToOne(targetEntity="Paises")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="paises_Id", referencedColumnName="Id")
     * })
     */
    private $paises;

    /**
     * @var \Poblaciones
     *
     * @ORM\ManyToOne(targetEntity="Poblaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="poblaciones_Id", referencedColumnName="Id")
     * })
     */
    private $poblaciones;

    /**
     * @var \Poblaciones
     *
     * @ORM\ManyToOne(targetEntity="Poblaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="poblaciones_Id1", referencedColumnName="Id")
     * })
     */
    private $poblaciones1;



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
     * @param \Sp\ZonaBundle\Entity\Paises $paises
     * @return Zonas
     */
    public function setPaises(\Sp\ZonaBundle\Entity\Paises $paises = null)
    {
        $this->paises = $paises;
    
        return $this;
    }

    /**
     * Get paises
     *
     * @return \Sp\ZonaBundle\Entity\Paises 
     */
    public function getPaises()
    {
        return $this->paises;
    }

    /**
     * Set poblaciones
     *
     * @param \Sp\ZonaBundle\Entity\Poblaciones $poblaciones
     * @return Zonas
     */
    public function setPoblaciones(\Sp\ZonaBundle\Entity\Poblaciones $poblaciones = null)
    {
        $this->poblaciones = $poblaciones;
    
        return $this;
    }

    /**
     * Get poblaciones
     *
     * @return \Sp\ZonaBundle\Entity\Poblaciones 
     */
    public function getPoblaciones()
    {
        return $this->poblaciones;
    }

    /**
     * Set poblaciones1
     *
     * @param \Sp\ZonaBundle\Entity\Poblaciones $poblaciones1
     * @return Zonas
     */
    public function setPoblaciones1(\Sp\ZonaBundle\Entity\Poblaciones $poblaciones1 = null)
    {
        $this->poblaciones1 = $poblaciones1;
    
        return $this;
    }

    /**
     * Get poblaciones1
     *
     * @return \Sp\ZonaBundle\Entity\Poblaciones 
     */
    public function getPoblaciones1()
    {
        return $this->poblaciones1;
    }
}