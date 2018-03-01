<?php

namespace GestorProjectes\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subtasca
 *
 * @ORM\Table(name="Subtasca", indexes={@ORM\Index(name="id_Tasca", columns={"id_Tasca"}), @ORM\Index(name="Subtasca_ibfk_2", columns={"estat"})})
 * @ORM\Entity
 */
class Subtasca
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcio", type="text", length=65535, nullable=false)
     */
    private $descripcio;

    /**
     * @var string
     *
     * @ORM\Column(name="participants", type="string", length=500, nullable=false)
     */
    private $participants;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="temps_maxim", type="time", nullable=false)
     */
    private $tempsMaxim;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="temps_restant", type="time", nullable=false)
     */
    private $tempsRestant;

    /**
     * @var \Tasca
     *
     * @ORM\ManyToOne(targetEntity="Tasca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Tasca", referencedColumnName="id")
     * })
     */
    private $idTasca;

    /**
     * @var \Estat
     *
     * @ORM\ManyToOne(targetEntity="Estat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estat", referencedColumnName="id")
     * })
     */
    private $estat;



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
     * Set nom
     *
     * @param string $nom
     *
     * @return Subtasca
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
     * Set descripcio
     *
     * @param string $descripcio
     *
     * @return Subtasca
     */
    public function setDescripcio($descripcio)
    {
        $this->descripcio = $descripcio;

        return $this;
    }

    /**
     * Get descripcio
     *
     * @return string
     */
    public function getDescripcio()
    {
        return $this->descripcio;
    }

    /**
     * Set participants
     *
     * @param string $participants
     *
     * @return Subtasca
     */
    public function setParticipants($participants)
    {
        $this->participants = $participants;

        return $this;
    }

    /**
     * Get participants
     *
     * @return string
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * Set tempsMaxim
     *
     * @param \DateTime $tempsMaxim
     *
     * @return Subtasca
     */
    public function setTempsMaxim($tempsMaxim)
    {
        $this->tempsMaxim = $tempsMaxim;

        return $this;
    }

    /**
     * Get tempsMaxim
     *
     * @return \DateTime
     */
    public function getTempsMaxim()
    {
        return $this->tempsMaxim;
    }

    /**
     * Set tempsRestant
     *
     * @param \DateTime $tempsRestant
     *
     * @return Subtasca
     */
    public function setTempsRestant($tempsRestant)
    {
        $this->tempsRestant = $tempsRestant;

        return $this;
    }

    /**
     * Get tempsRestant
     *
     * @return \DateTime
     */
    public function getTempsRestant()
    {
        return $this->tempsRestant;
    }

    /**
     * Set idTasca
     *
     * @param \GestorProjectes\BackendBundle\Entity\Tasca $idTasca
     *
     * @return Subtasca
     */
    public function setIdTasca(\GestorProjectes\BackendBundle\Entity\Tasca $idTasca = null)
    {
        $this->idTasca = $idTasca;

        return $this;
    }

    /**
     * Get idTasca
     *
     * @return \GestorProjectes\BackendBundle\Entity\Tasca
     */
    public function getIdTasca()
    {
        return $this->idTasca;
    }

    /**
     * Set estat
     *
     * @param \GestorProjectes\BackendBundle\Entity\Estat $estat
     *
     * @return Subtasca
     */
    public function setEstat(\GestorProjectes\BackendBundle\Entity\Estat $estat = null)
    {
        $this->estat = $estat;

        return $this;
    }

    /**
     * Get estat
     *
     * @return \GestorProjectes\BackendBundle\Entity\Estat
     */
    public function getEstat()
    {
        return $this->estat;
    }
}
