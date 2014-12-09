<?php

namespace PlanningInsta2015\PlanningInsta2015Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planning
 *
 * @ORM\Table(name="planning", indexes={@ORM\Index(name="fk_planning_cours1", columns={"cours_idcours"})})
 * @ORM\Entity
 */
class Planning
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idplanning", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idplanning;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="cours_professeur_idprofesseur", type="integer", nullable=false)
     */
    private $coursProfesseurIdprofesseur;

    /**
     * @var integer
     *
     * @ORM\Column(name="cours_promo_idpromo", type="integer", nullable=false)
     */
    private $coursPromoIdpromo;

    /**
     * @var \Cours
     *
     * @ORM\ManyToOne(targetEntity="Cours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cours_idcours", referencedColumnName="idcours")
     * })
     */
    private $courscours;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Site", inversedBy="planningplanning")
     * @ORM\JoinTable(name="planning_has_site",
     *   joinColumns={
     *     @ORM\JoinColumn(name="planning_idplanning", referencedColumnName="idplanning")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="site_idsite", referencedColumnName="idsite")
     *   }
     * )
     */
    private $sitesite;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sitesite = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @var \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Cours
     */
    private $idcours;

    /**
     * @var \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Site
     */
    private $idsite;


    /**
     * Get idplanning
     *
     * @return integer 
     */
    public function getIdplanning()
    {
        return $this->idplanning;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Planning
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set idcours
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Cours $idcours
     * @return Planning
     */
    public function setIdcours(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Cours $idcours = null)
    {
        $this->idcours = $idcours;

        return $this;
    }

    /**
     * Get idcours
     *
     * @return \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Cours 
     */
    public function getIdcours()
    {
        return $this->idcours;
    }

    /**
     * Set idsite
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Site $idsite
     * @return Planning
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
     * Set coursProfesseurIdprofesseur
     *
     * @param integer $coursProfesseurIdprofesseur
     * @return Planning
     */
    public function setCoursProfesseurIdprofesseur($coursProfesseurIdprofesseur)
    {
        $this->coursProfesseurIdprofesseur = $coursProfesseurIdprofesseur;

        return $this;
    }

    /**
     * Get coursProfesseurIdprofesseur
     *
     * @return integer 
     */
    public function getCoursProfesseurIdprofesseur()
    {
        return $this->coursProfesseurIdprofesseur;
    }

    /**
     * Set coursPromoIdpromo
     *
     * @param integer $coursPromoIdpromo
     * @return Planning
     */
    public function setCoursPromoIdpromo($coursPromoIdpromo)
    {
        $this->coursPromoIdpromo = $coursPromoIdpromo;

        return $this;
    }

    /**
     * Get coursPromoIdpromo
     *
     * @return integer 
     */
    public function getCoursPromoIdpromo()
    {
        return $this->coursPromoIdpromo;
    }

    /**
     * Set courscours
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Cours $courscours
     * @return Planning
     */
    public function setCourscours(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Cours $courscours = null)
    {
        $this->courscours = $courscours;

        return $this;
    }

    /**
     * Get courscours
     *
     * @return \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Cours 
     */
    public function getCourscours()
    {
        return $this->courscours;
    }

    /**
     * Add sitesite
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Site $sitesite
     * @return Planning
     */
    public function addSitesite(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Site $sitesite)
    {
        $this->sitesite[] = $sitesite;

        return $this;
    }

    /**
     * Remove sitesite
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Site $sitesite
     */
    public function removeSitesite(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Site $sitesite)
    {
        $this->sitesite->removeElement($sitesite);
    }

    /**
     * Get sitesite
     *
     * @return \Doctrine\Common\Collections\Collection 
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
     * @var \DateTime
     */
    private $dateDebut;

    /**
     * @var \DateTime
     */
    private $dateFin;

    /**
     * @var \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Cours
     */
    private $cours;


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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Planning
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Planning
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set cours
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Cours $cours
     * @return Planning
     */
    public function setCours(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Cours $cours = null)
    {
        $this->cours = $cours;

        return $this;
    }

    /**
     * Get cours
     *
     * @return \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Cours 
     */
    public function getCours()
    {
        return $this->cours;
    }
}
