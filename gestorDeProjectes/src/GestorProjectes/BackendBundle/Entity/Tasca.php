<?php

namespace GestorProjectes\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Tasca
 *
 * @ORM\Table(name="Tasca", indexes={@ORM\Index(name="responsable", columns={"responsable"}), @ORM\Index(name="estat", columns={"estat"})})
 * @ORM\Entity
 */
class Tasca
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
     * @Assert|NotNull()
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     * @Assert|NotNull()
     * @Assert|Length(
     *      min = 5,
     *      max = 50,
     *      minMessage = "Necessita mes de 5 caracters",
     *      maxMessage = "Maxim 50 caracters"
     * )
     *
     * @ORM\Column(name="descripcio", type="text", length=65535, nullable=false)
     */
    private $descripcio;

    /**
     * @var \DateTime
     * @Assert|NotNull()
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
     * @var \Usuaris
     *  @Assert|NotNull()
     * @ORM\ManyToOne(targetEntity="Usuaris")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="responsable", referencedColumnName="id")
     * })
     */
    private $responsable;

    /**
     * @var \Estat
     * @Assert|NotNull()
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
     * @return Tasca
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
     * @return Tasca
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
     * Set tempsMaxim
     *
     * @param \DateTime $tempsMaxim
     *
     * @return Tasca
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
     * @return Tasca
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
     * Set responsable
     *
     * @param \GestorProjectes\BackendBundle\Entity\Usuaris $responsable
     *
     * @return Tasca
     */
    public function setResponsable(\GestorProjectes\BackendBundle\Entity\Usuaris $responsable = null)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return \GestorProjectes\BackendBundle\Entity\Usuaris
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set estat
     *
     * @param \GestorProjectes\BackendBundle\Entity\Estat $estat
     *
     * @return Tasca
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
