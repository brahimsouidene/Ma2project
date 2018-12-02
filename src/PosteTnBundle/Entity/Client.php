<?php

namespace PosteTnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="PosteTnBundle\Repository\ClientRepository")
 */
class Client
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
     * @ORM\Column(name="Cin", type="string", length=8, unique=true)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=20, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50, nullable=true)
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="codePostale", type="integer", nullable=true)
     */
    private $codePostale;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroTele", type="string", length=8)
     */
    private $numeroTele;
    
    /**
     * @var enum
     *
     * @ORM\Column(name="typeClient", type="string", columnDefinition="enum('recepteur','emetteur')")
     */
    private $typeClient;
    
    /**
     *
     * @ORM\ManyToMany(targetEntity="Colis", inversedBy="clients", mappedBy="clients", cascade={"persist","merge"})
     */
    
    private $coliss;


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
     * Set cin
     *
     * @param string $cin
     *
     * @return Client
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Client
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
     *
     * @return Client
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Client
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
     * Set codePostale
     *
     * @param integer $codePostale
     *
     * @return Client
     */
    public function setCodePostale($codePostale)
    {
        $this->codePostale = $codePostale;

        return $this;
    }

    /**
     * Get codePostale
     *
     * @return int
     */
    public function getCodePostale()
    {
        return $this->codePostale;
    }

    /**
     * Set numeroTele
     *
     * @param string $numeroTele
     *
     * @return Client
     */
    public function setNumeroTele($numeroTele)
    {
        $this->numeroTele = $numeroTele;

        return $this;
    }

    /**
     * Get numeroTele
     *
     * @return string
     */
    public function getNumeroTele()
    {
        return $this->numeroTele;
    }
    
    /**
     * Get type
     *
     * @return \enum 
     */
    function getTypeClient() {
        return $this->typeClient;
    }
    
    /**
     * Set type
     *
     * @param \enum $typeClient
     * 
     * @return client
    */

    function setTypeClient(enum $type) {
        $this->typeClient = $type;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->coliss = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add coliss
     *
     * @param \PosteTnBundle\Entity\Colis $coliss
     *
     * @return Client
     */
    public function addColiss(\PosteTnBundle\Entity\Colis $coliss)
    {
        $this->coliss[] = $coliss;

        return $this;
    }

    /**
     * Remove coliss
     *
     * @param \PosteTnBundle\Entity\Colis $coliss
     */
    public function removeColiss(\PosteTnBundle\Entity\Colis $coliss)
    {
        $this->coliss->removeElement($coliss);
    }

    /**
     * Get coliss
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getColiss()
    {
        return $this->coliss;
    }
}
