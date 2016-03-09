<?php

namespace cc\relationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordinateur
 *
 * @ORM\Table(name="Ordinateur")
 * @ORM\Entity(repositoryClass="cc\relationsBundle\Entity\OrdinateurRepository")
 */
class Ordinateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_ordi", type="string", length=100)
     */
    private $libelleOrdi;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=50)
     */
    private $marque;


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
     * Set libelleOrdi
     *
     * @param string $libelleOrdi
     * @return Ordinateur
     */
    public function setLibelleOrdi($libelleOrdi)
    {
        $this->libelleOrdi = $libelleOrdi;

        return $this;
    }

    /**
     * Get libelleOrdi
     *
     * @return string 
     */
    public function getLibelleOrdi()
    {
        return $this->libelleOrdi;
    }

    /**
     * Set marque
     *
     * @param string $marque
     * @return Ordinateur
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string 
     */
    public function getMarque()
    {
        return $this->marque;
    }
}
