<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity(repositoryClass="MyApp\UserBundle\Repository\EvenementRepository")
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="affiche", type="string", length=255)
     */
    private $affiche;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime")
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255)
     */
    private $lieu;

    /**
     * @var float
     *
     * @ORM\Column(name="frais", type="float")
     */
    private $frais;

    /**
     * @var string
     *
     * @ORM\Column(name="sommite", type="string", length=255)
     */
    private $sommite;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=255)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="type_E", type="string", length=255)
     */
    private $typeE;
    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255)
     */
    private $color;
    /**
     * @var string
     *
     * @ORM\Column(name="dateDebutstr", type="string", length=255)
     */
    private $dateDebutstr;
    /**
     * @var string
     *
     * @ORM\Column(name="dateFinstr", type="string", length=255)
     */
    private $dateFinstr;
    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;
    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float")
     */
    private $longitude;
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get frais
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get frais
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Evenement
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Evenement
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
     * Set affiche
     *
     * @param string $affiche
     *
     * @return Evenement
     */
    public function setAffiche($affiche)
    {
        $this->affiche = $affiche;

        return $this;
    }

    /**
     * Get affiche
     *
     * @return string
     */
    public function getAffiche()
    {
        return $this->affiche;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Evenement
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
     *
     * @return Evenement
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
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Evenement
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set frais
     *
     * @param float $frais
     *
     * @return Evenement
     */
    public function setFrais($frais)
    {
        $this->frais = $frais;

        return $this;
    }

    /**
     * Get frais
     *
     * @return float
     */
    public function getFrais()
    {
        return $this->frais;
    }

    /**
     * Set sommite
     *
     * @param string $sommite
     *
     * @return Evenement
     */
    public function setSommite($sommite)
    {
        $this->sommite = $sommite;

        return $this;
    }

    /**
     * Get sommite
     *
     * @return string
     */
    public function getSommite()
    {
        return $this->sommite;
    }

    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return Evenement
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set typeE
     *
     * @param string $typeE
     *
     * @return Evenement
     */
    public function setTypeE($typeE)
    {
        $this->typeE = $typeE;

        return $this;
    }

    /**
     * Get typeE
     *
     * @return string
     */
    public function getTypeE()
    {
        return $this->typeE;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get typeE
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
    public function setDateDebutstr($dateDebutstr)
    {
        $this->dateDebutstr = $dateDebutstr;

        return $this;
    }
    public function getDateDebutstr()
    {
        return $this->dateDebutstr;
    }
    public function setDateFinstr($dateFinstr)
    {
        $this->dateFinstr = $dateFinstr;

        return $this;
    }
    public function getDateFinstr()
    {
        return $this->dateFinstr;
    }



}

