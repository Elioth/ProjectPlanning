<?php

namespace PlanningInsta2015\PlanningInsta2015Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Site
 *
 * @ORM\Table(name="site")
 * @ORM\Entity
 */
class Site
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idsite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsite;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=100, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=10, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=200, nullable=true)
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Planning", mappedBy="sitesite")
     */
    private $planningplanning;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->planningplanning = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idsite
     *
     * @return integer 
     */
    public function getIdsite()
    {
        return $this->idsite;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Site
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Site
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Site
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add planningplanning
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Planning $planningplanning
     * @return Site
     */
    public function addPlanningplanning(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Planning $planningplanning)
    {
        $this->planningplanning[] = $planningplanning;

        return $this;
    }

    /**
     * Remove planningplanning
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Planning $planningplanning
     */
    public function removePlanningplanning(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Planning $planningplanning)
    {
        $this->planningplanning->removeElement($planningplanning);
    }

    /**
     * Get planningplanning
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlanningplanning()
    {
        return $this->planningplanning;
    }
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Salle;


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
     * Add Salle
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Site $salle
     * @return Site
     */
    public function addSalle(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Site $salle)
    {
        $this->Salle[] = $salle;

        return $this;
    }

    /**
     * Remove Salle
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Site $salle
     */
    public function removeSalle(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Site $salle)
    {
        $this->Salle->removeElement($salle);
    }

    /**
     * Get Salle
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSalle()
    {
        return $this->Salle;
    }
}
