<?php

namespace Sp\ProvinciaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provincias
 *
 * @ORM\Table(name="provincias")
 * @ORM\Entity
 */
class Provincias
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
     * @ORM\Column(name="provincia", type="string", length=80, nullable=true)
     */
    private $provincia;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     * @return Provincias
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;
    
        return $this;
    }

    /**
     * Get provincia
     *
     * @return string 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set paises
     *
     * @param \Sp\ProvinciaBundle\Entity\Paises $paises
     * @return Provincias
     */
    public function setPaises(\Sp\ProvinciaBundle\Entity\Paises $paises = null)
    {
        $this->paises = $paises;
    
        return $this;
    }

    /**
     * Get paises
     *
     * @return \Sp\ProvinciaBundle\Entity\Paises 
     */
    public function getPaises()
    {
        return $this->paises;
    }
}