<?php

namespace cc\relationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salarie
 *
 * @ORM\Table(name="Salarie")
 * @ORM\Entity(repositoryClass="cc\relationsBundle\Entity\SalarieRepository")
 */
class Salarie
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
     * @ORM\Column(name="nom_salarie", type="string", length=50)
     */
    private $nomSalarie;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_salarie", type="string", length=50)
     */
    private $prenomSalarie;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction_salarie", type="string", length=70)
     */
    private $fonctionSalarie;

    /**
     * @ORM\OneToOne(targetEntity="cc\relationsBundle\Entity\Ordinateur", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $ordinateur;
    
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
     * Set nomSalarie
     *
     * @param string $nomSalarie
     * @return Salarie
     */
    public function setNomSalarie($nomSalarie)
    {
        $this->nomSalarie = $nomSalarie;

        return $this;
    }

    /**
     * Get nomSalarie
     *
     * @return string 
     */
    public function getNomSalarie()
    {
        return $this->nomSalarie;
    }

    /**
     * Set prenomSalarie
     *
     * @param string $prenomSalarie
     * @return Salarie
     */
    public function setPrenomSalarie($prenomSalarie)
    {
        $this->prenomSalarie = $prenomSalarie;

        return $this;
    }

    /**
     * Get prenomSalarie
     *
     * @return string 
     */
    public function getPrenomSalarie()
    {
        return $this->prenomSalarie;
    }

    /**
     * Set fonctionSalarie
     *
     * @param string $fonctionSalarie
     * @return Salarie
     */
    public function setFonctionSalarie($fonctionSalarie)
    {
        $this->fonctionSalarie = $fonctionSalarie;

        return $this;
    }

    /**
     * Get fonctionSalarie
     *
     * @return string 
     */
    public function getFonctionSalarie()
    {
        return $this->fonctionSalarie;
    }

    /**
     * Set ordinateur
     *
     * @param \cc\relationsBundle\Entity\Ordinateur $ordinateur
     * @return Salarie
     */
    public function setOrdinateur(\cc\relationsBundle\Entity\Ordinateur $ordinateur = null)
    {
        $this->ordinateur = $ordinateur;

        return $this;
    }

    /**
     * Get ordinateur
     *
     * @return \cc\relationsBundle\Entity\Ordinateur 
     */
    public function getOrdinateur()
    {
        return $this->ordinateur;
    }
}
