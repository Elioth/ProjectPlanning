<?php

namespace PlanningInsta2015\PlanningInsta2015Bundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="fos_user", indexes={@ORM\Index(name="fk_user_professeur1", columns={"professeur_idprofesseur"}), @ORM\Index(name="fk_user_eleve1", columns={"eleve_ideleve", "eleve_promo_idpromo1"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idUser", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser;

    /**
     * @var integer
     *
     * @ORM\Column(name="role", type="integer", nullable=true)
     */
    private $role;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hasPC", type="boolean", nullable=true)
     */
    private $haspc;

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
     * @ORM\Column(name="mdp", type="string", length=32, nullable=false)
     */
    private $mdp;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=45, nullable=false)
     */
    private $login;

    /**
     * @var \Professeur
     *
     * @ORM\ManyToOne(targetEntity="Professeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="professeur_idprofesseur", referencedColumnName="idprofesseur")
     * })
     */
    private $professeurprofesseur;

    /**
     * @var \Eleve
     *
     * @ORM\ManyToOne(targetEntity="Eleve")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="eleve_ideleve", referencedColumnName="ideleve"),
     *   @ORM\JoinColumn(name="eleve_promo_idpromo1", referencedColumnName="promo_idpromo")
     * })
     */
    private $eleveeleve;


    /**
     * @var \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Eleve
     */
    private $ideleve;

    /**
     * @var \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Professeur
     */
    private $idprofesseur;


    /**
     * Get iduser
     *
     * @return integer 
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set role
     *
     * @param integer $role
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return integer 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set haspc
     *
     * @param boolean $haspc
     * @return User
     */
    public function setHaspc($haspc)
    {
        $this->haspc = $haspc;

        return $this;
    }

    /**
     * Get haspc
     *
     * @return boolean 
     */
    public function getHaspc()
    {
        return $this->haspc;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return User
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
     * @return User
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
     * Set mdp
     *
     * @param string $mdp
     * @return User
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string 
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return User
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set ideleve
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Eleve $ideleve
     * @return User
     */
    public function setIdeleve(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Eleve $ideleve = null)
    {
        $this->ideleve = $ideleve;

        return $this;
    }

    /**
     * Get ideleve
     *
     * @return \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Eleve 
     */
    public function getIdeleve()
    {
        return $this->ideleve;
    }

    /**
     * Set idprofesseur
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Professeur $idprofesseur
     * @return User
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
     * Set professeurprofesseur
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Professeur $professeurprofesseur
     * @return User
     */
    public function setProfesseurprofesseur(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Professeur $professeurprofesseur = null)
    {
        $this->professeurprofesseur = $professeurprofesseur;

        return $this;
    }

    /**
     * Get professeurprofesseur
     *
     * @return \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Professeur 
     */
    public function getProfesseurprofesseur()
    {
        return $this->professeurprofesseur;
    }

    /**
     * Set eleveeleve
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Eleve $eleveeleve
     * @return User
     */
    public function setEleveeleve(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Eleve $eleveeleve = null)
    {
        $this->eleveeleve = $eleveeleve;

        return $this;
    }

    /**
     * Get eleveeleve
     *
     * @return \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Eleve 
     */
    public function getEleveeleve()
    {
        return $this->eleveeleve;
    }
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Eleve
     */
    private $eleve;

    /**
     * @var \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Professeur
     */
    private $professeur;


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
     * Set eleve
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Eleve $eleve
     * @return User
     */
    public function setEleve(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Eleve $eleve = null)
    {
        $this->eleve = $eleve;

        return $this;
    }

    /**
     * Get eleve
     *
     * @return \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Eleve 
     */
    public function getEleve()
    {
        return $this->eleve;
    }

    /**
     * Set professeur
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Professeur $professeur
     * @return User
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
