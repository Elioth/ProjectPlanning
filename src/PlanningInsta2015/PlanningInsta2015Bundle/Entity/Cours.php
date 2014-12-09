<?php

namespace PlanningInsta2015\PlanningInsta2015Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours", indexes={@ORM\Index(name="fk_cours_salle1", columns={"idsalle1"}), @ORM\Index(name="fk_cours_professeur1", columns={"professeur_idprofesseur1"}), @ORM\Index(name="fk_cours_promo1", columns={"promo_idpromo1"})})
 * @ORM\Entity
 */
class Cours
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcours", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcours;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=45, nullable=false)
     */
    private $intitule;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="duree", type="time", nullable=true)
     */
    private $duree;

    /**
     * @var integer
     *
     * @ORM\Column(name="salle_site_idsite", type="integer", nullable=false)
     */
    private $salleSiteIdsite;

    /**
     * @var \Salle
     *
     * @ORM\ManyToOne(targetEntity="Salle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idsalle1", referencedColumnName="idsalle")
     * })
     */
    private $idsalle1;

    /**
     * @var \Professeur
     *
     * @ORM\ManyToOne(targetEntity="Professeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="professeur_idprofesseur1", referencedColumnName="idprofesseur")
     * })
     */
    private $professeurprofesseur1;

    /**
     * @var \Promo
     *
     * @ORM\ManyToOne(targetEntity="Promo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="promo_idpromo1", referencedColumnName="idpromo")
     * })
     */
    private $promopromo1;


    /**
     * @var \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Professeur
     */
    private $idprofesseur;

    /**
     * @var \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Promo
     */
    private $idpromo;

    /**
     * @var \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Salle
     */
    private $idsalle;


    /**
     * Get idcours
     *
     * @return integer 
     */
    public function getIdcours()
    {
        return $this->idcours;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     * @return Cours
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Cours
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
     * Set duree
     *
     * @param \DateTime $duree
     * @return Cours
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return \DateTime 
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set idprofesseur
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Professeur $idprofesseur
     * @return Cours
     */
    public function setIdprofesseur(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Professeur $idprofesseur = null)
    {
        $this->idprofesseur = $idprofesseur;

        return $this;
    }

    /**
     * Get idprofesseur
     *
     * @return \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Professeur 
     */
    public function getIdprofesseur()
    {
        return $this->idprofesseur;
    }

    /**
     * Set idpromo
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Promo $idpromo
     * @return Cours
     */
    public function setIdpromo(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Promo $idpromo = null)
    {
        $this->idpromo = $idpromo;

        return $this;
    }

    /**
     * Get idpromo
     *
     * @return \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Promo 
     */
    public function getIdpromo()
    {
        return $this->idpromo;
    }

    /**
     * Set idsalle
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Salle $idsalle
     * @return Cours
     */
    public function setIdsalle(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Salle $idsalle = null)
    {
        $this->idsalle = $idsalle;

        return $this;
    }

    /**
     * Get idsalle
     *
     * @return \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Salle 
     */
    public function getIdsalle()
    {
        return $this->idsalle;
    }

    /**
     * Set salleSiteIdsite
     *
     * @param integer $salleSiteIdsite
     * @return Cours
     */
    public function setSalleSiteIdsite($salleSiteIdsite)
    {
        $this->salleSiteIdsite = $salleSiteIdsite;

        return $this;
    }

    /**
     * Get salleSiteIdsite
     *
     * @return integer 
     */
    public function getSalleSiteIdsite()
    {
        return $this->salleSiteIdsite;
    }

    /**
     * Set idsalle1
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Salle $idsalle1
     * @return Cours
     */
    public function setIdsalle1(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Salle $idsalle1 = null)
    {
        $this->idsalle1 = $idsalle1;

        return $this;
    }

    /**
     * Get idsalle1
     *
     * @return \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Salle 
     */
    public function getIdsalle1()
    {
        return $this->idsalle1;
    }

    /**
     * Set professeurprofesseur1
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Professeur $professeurprofesseur1
     * @return Cours
     */
    public function setProfesseurprofesseur1(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Professeur $professeurprofesseur1 = null)
    {
        $this->professeurprofesseur1 = $professeurprofesseur1;

        return $this;
    }

    /**
     * Get professeurprofesseur1
     *
     * @return \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Professeur 
     */
    public function getProfesseurprofesseur1()
    {
        return $this->professeurprofesseur1;
    }

    /**
     * Set promopromo1
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Promo $promopromo1
     * @return Cours
     */
    public function setPromopromo1(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Promo $promopromo1 = null)
    {
        $this->promopromo1 = $promopromo1;

        return $this;
    }

    /**
     * Get promopromo1
     *
     * @return \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Promo 
     */
    public function getPromopromo1()
    {
        return $this->promopromo1;
    }
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Planning;

    /**
     * @var \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Promo
     */
    private $promo;

    /**
     * @var \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Salle
     */
    private $salle;

    /**
     * @var \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Professeur
     */
    private $professeur;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Planning = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add Planning
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Cours $planning
     * @return Cours
     */
    public function addPlanning(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Cours $planning)
    {
        $this->Planning[] = $planning;

        return $this;
    }

    /**
     * Remove Planning
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Cours $planning
     */
    public function removePlanning(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Cours $planning)
    {
        $this->Planning->removeElement($planning);
    }

    /**
     * Get Planning
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlanning()
    {
        return $this->Planning;
    }

    /**
     * Set promo
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Promo $promo
     * @return Cours
     */
    public function setPromo(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Promo $promo = null)
    {
        $this->promo = $promo;

        return $this;
    }

    /**
     * Get promo
     *
     * @return \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Promo 
     */
    public function getPromo()
    {
        return $this->promo;
    }

    /**
     * Set salle
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Salle $salle
     * @return Cours
     */
    public function setSalle(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Salle $salle = null)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * Get salle
     *
     * @return \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Salle 
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set professeur
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Professeur $professeur
     * @return Cours
     */
    public function setProfesseur(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Professeur $professeur = null)
    {
        $this->professeur = $professeur;

        return $this;
    }

    /**
     * Get professeur
     *
     * @return \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Professeur 
     */
    public function getProfesseur()
    {
        return $this->professeur;
    }
}
