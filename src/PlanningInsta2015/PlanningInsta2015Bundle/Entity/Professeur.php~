<?php

namespace PlanningInsta2015\PlanningInsta2015Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Professeur
 *
 * @ORM\Table(name="professeur")
 * @ORM\Entity
 */
class Professeur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idprofesseur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprofesseur;

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
     * Get idprofesseur
     *
     * @return integer 
     */
    public function getIdprofesseur()
    {
        return $this->idprofesseur;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Professeur
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
     * @return Professeur
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
     * @return Professeur
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
     * @return Professeur
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
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $User;

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
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Professeur $user
     * @return Professeur
     */
    public function addUser(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Professeur $user)
    {
        $this->User[] = $user;

        return $this;
    }

    /**
     * Remove User
     *
     * @param \PlanningInsta2015\PlanningInsta2015Bundle\Entity\Professeur $user
     */
    public function removeUser(\PlanningInsta2015\PlanningInsta2015Bundle\Entity\Professeur $user)
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
}
