<?php

namespace PlanningInsta2015\PlanningInsta2015Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle", indexes={@ORM\Index(name="fk_salle_site1", columns={"site_idsite"})})
 * @ORM\Entity
 */
class Salle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idsalle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsalle;

    /**
     * @var string
     *
     * @ORM\Column(name="numerosalle", type="string", length=10, nullable=true)
     */
    private $numerosalle;

    /**
     * @var integer
     *
     * @ORM\Column(name="place", type="integer", nullable=true)
     */
    private $place;

    /**
     * @var \Site
     *
     * @ORM\ManyToOne(targetEntity="Site")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="site_idsite", referencedColumnName="idsite")
     * })
     */
    private $sitesite;


    /**
     * @var \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Site
     */
    private $idsite;


    /**
     * Get idsalle
     *
     * @return integer 
     */
    public function getIdsalle()
    {
        return $this->idsalle;
    }

    /**
     * Set numerosalle
     *
     * @param string $numerosalle
     * @return Salle
     */
    public function setNumerosalle($numerosalle)
    {
        $this->numerosalle = $numerosalle;

        return $this;
    }

    /**
     * Get numerosalle
     *
     * @return string 
     */
    public function getNumerosalle()
    {
        return $this->numerosalle;
    }

    /**
     * Set place
     *
     * @param integer $place
     * @return Salle
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return integer 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set idsite
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Site $idsite
     * @return Salle
     */
    public function setIdsite(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Site $idsite = null)
    {
        $this->idsite = $idsite;

        return $this;
    }

    /**
     * Get idsite
     *
     * @return \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Site 
     */
    public function getIdsite()
    {
        return $this->idsite;
    }

    /**
     * Set sitesite
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Site $sitesite
     * @return Salle
     */
    public function setSitesite(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Site $sitesite = null)
    {
        $this->sitesite = $sitesite;

        return $this;
    }

    /**
     * Get sitesite
     *
     * @return \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Site 
     */
    public function getSitesite()
    {
        return $this->sitesite;
    }
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Cours;

    /**
     * @var \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Site
     */
    private $site;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Cours = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add Cours
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Salle $cours
     * @return Salle
     */
    public function addCour(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Salle $cours)
    {
        $this->Cours[] = $cours;

        return $this;
    }

    /**
     * Remove Cours
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Salle $cours
     */
    public function removeCour(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Salle $cours)
    {
        $this->Cours->removeElement($cours);
    }

    /**
     * Get Cours
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCours()
    {
        return $this->Cours;
    }

    /**
     * Set site
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Site $site
     * @return Salle
     */
    public function setSite(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Site $site = null)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Site 
     */
    public function getSite()
    {
        return $this->site;
    }
}
