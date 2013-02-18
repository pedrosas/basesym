<?php

namespace Sp\PaisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paises
 *
 * @ORM\Table(name="paises")
 * @ORM\Entity
 */
class Paises
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
     * @ORM\Column(name="pais", type="string", length=80, nullable=true)
     */
    private $pais;



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
     * Set pais
     *
     * @param string $pais
     * @return Paises
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    
        return $this;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
    }
}