<?php

namespace PlanningInsta2015\PlanningInsta2015Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promo
 *
 * @ORM\Table(name="promo")
 * @ORM\Entity
 */
class Promo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpromo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpromo;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="formation", type="string", length=45, nullable=true)
     */
    private $formation;



    /**
     * Get idpromo
     *
     * @return integer 
     */
    public function getIdpromo()
    {
        return $this->idpromo;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return Promo
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set formation
     *
     * @param string $formation
     * @return Promo
     */
    public function setFormation($formation)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation
     *
     * @return string 
     */
    public function getFormation()
    {
        return $this->formation;
    }
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Eleve;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Eleve = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add Eleve
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Promo $eleve
     * @return Promo
     */
    public function addEleve(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Promo $eleve)
    {
        $this->Eleve[] = $eleve;

        return $this;
    }

    /**
     * Remove Eleve
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Promo $eleve
     */
    public function removeEleve(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Promo $eleve)
    {
        $this->Eleve->removeElement($eleve);
    }

    /**
     * Get Eleve
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEleve()
    {
        return $this->Eleve;
    }
}
