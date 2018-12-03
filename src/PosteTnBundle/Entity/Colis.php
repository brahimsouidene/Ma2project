<?php

namespace PosteTnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Colis
 *
 * @ORM\Table(name="colis")
 * @ORM\Entity(repositoryClass="PosteTnBundle\Repository\ColisRepository")
 */
class Colis
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codeColis", type="string", length=9, nullable=true, unique=true)
     */
    private $codeColis;

    /**
     * @var int
     *
     * @ORM\Column(name="poids", type="integer", nullable=true)
     */
    private $poids;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;
    


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
     * Set codeColis
     *
     * @param string $codeColis
     *
     * @return Colis
     */
    public function setCodeColis($codeColis)
    {
        $this->codeColis = $codeColis;

        return $this;
    }

    /**
     * Get codeColis
     *
     * @return string
     */
    public function getCodeColis()
    {
        return $this->codeColis;
    }

    /**
     * Set poids
     *
     * @param integer $poids
     *
     * @return Colis
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return int
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Colis
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Colis
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
    

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->clients = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add client
     *
     * @param \PosteTnBundle\Entity\Client $client
     *
     * @return Colis
     */
    public function addClient(\PosteTnBundle\Entity\Client $client)
    {
        $this->clients[] = $client;

        return $this;
    }

    /**
     * Remove client
     *
     * @param \PosteTnBundle\Entity\Client $client
     */
    public function removeClient(\PosteTnBundle\Entity\Client $client)
    {
        $this->clients->removeElement($client);
    }

    /**
     * Get clients
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClients()
    {
        return $this->clients;
    }
    /**
     * @param \Client $idClient
     */
    public function setIdClient($idClient)
    {
        $this->$idClient = $idClient;
    }

    /**
     * @return \Client
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $idClient;
 
}
