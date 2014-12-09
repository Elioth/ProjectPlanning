<?php

namespace PlanningInsta2015\PlanningInsta2015Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eleve
 *
 * @ORM\Table(name="eleve", indexes={@ORM\Index(name="fk_eleve_promo1", columns={"promo_idpromo"})})
 * @ORM\Entity
 */
class Eleve
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ideleve", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ideleve;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="age", type="string", length=45, nullable=true)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=45, nullable=true)
     */
    private $adresse;

    /**
     * @var \Promo
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Promo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="promo_idpromo", referencedColumnName="idpromo")
     * })
     */
    private $promopromo;


    /**
     * @var \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Promo
     */
    private $idpromo;


    /**
     * Get ideleve
     *
     * @return integer 
     */
    public function getIdeleve()
    {
        return $this->ideleve;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Eleve
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Eleve
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set age
     *
     * @param string $age
     * @return Eleve
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return string 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Eleve
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
     * Set idpromo
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Promo $idpromo
     * @return Eleve
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
     * Set ideleve
     *
     * @param integer $ideleve
     * @return Eleve
     */
    public function setIdeleve($ideleve)
    {
        $this->ideleve = $ideleve;

        return $this;
    }

    /**
     * Set promopromo
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Promo $promopromo
     * @return Eleve
     */
    public function setPromopromo(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Promo $promopromo)
    {
        $this->promopromo = $promopromo;

        return $this;
    }

    /**
     * Get promopromo
     *
     * @return \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Promo 
     */
    public function getPromopromo()
    {
        return $this->promopromo;
    }
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $User;

    /**
     * @var \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Promo
     */
    private $promo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->User = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add User
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Eleve $user
     * @return Eleve
     */
    public function addUser(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Eleve $user)
    {
        $this->User[] = $user;

        return $this;
    }

    /**
     * Remove User
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Eleve $user
     */
    public function removeUser(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Eleve $user)
    {
        $this->User->removeElement($user);
    }

    /**
     * Get User
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * Set promo
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Promo $promo
     * @return Eleve
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
}
