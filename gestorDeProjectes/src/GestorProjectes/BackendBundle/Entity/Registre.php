<?php

namespace GestorProjectes\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Registre
 *
 * @ORM\Table(name="registre", indexes={@ORM\Index(name="id_Subtasca", columns={"id_Subtasca"}), @ORM\Index(name="id_Usuari", columns={"id_Usuari"}), @ORM\Index(name="estat", columns={"estat"})})
 * @ORM\Entity
 */
class Registre
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
     * @ORM\Column(name="comentari", type="text", length=65535, nullable=false)
     */
    private $comentari;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hores", type="time", nullable=false)
     */
    private $hores;

    /**
     * @var \Subtasca
     *
     * @ORM\ManyToOne(targetEntity="Subtasca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Subtasca", referencedColumnName="id")
     * })
     */
    private $idSubtasca;

    /**
     * @var \Usuaris
     *
     * @ORM\ManyToOne(targetEntity="Usuaris")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Usuari", referencedColumnName="id")
     * })
     */
    private $idUsuari;

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
     * Set comentari
     *
     * @param string $comentari
     *
     * @return Registre
     */
    public function setComentari($comentari)
    {
        $this->comentari = $comentari;

        return $this;
    }

    /**
     * Get comentari
     *
     * @return string
     */
    public function getComentari()
    {
        return $this->comentari;
    }

    /**
     * Set hores
     *
     * @param \DateTime $hores
     *
     * @return Registre
     */
    public function setHores($hores)
    {
        $this->hores = $hores;

        return $this;
    }

    /**
     * Get hores
     *
     * @return \DateTime
     */
    public function getHores()
    {
        return $this->hores;
    }

    /**
     * Set idSubtasca
     *
     * @param \GestorProjectes\BackendBundle\Entity\Subtasca $idSubtasca
     *
     * @return Registre
     */
    public function setIdSubtasca(\GestorProjectes\BackendBundle\Entity\Subtasca $idSubtasca = null)
    {
        $this->idSubtasca = $idSubtasca;

        return $this;
    }

    /**
     * Get idSubtasca
     *
     * @return \GestorProjectes\BackendBundle\Entity\Subtasca
     */
    public function getIdSubtasca()
    {
        return $this->idSubtasca;
    }

    /**
     * Set idUsuari
     *
     * @param \GestorProjectes\BackendBundle\Entity\Usuaris $idUsuari
     *
     * @return Registre
     */
    public function setIdUsuari(\GestorProjectes\BackendBundle\Entity\Usuaris $idUsuari = null)
    {
        $this->idUsuari = $idUsuari;

        return $this;
    }

    /**
     * Get idUsuari
     *
     * @return \GestorProjectes\BackendBundle\Entity\Usuaris
     */
    public function getIdUsuari()
    {
        return $this->idUsuari;
    }

    /**
     * Set estat
     *
     * @param \GestorProjectes\BackendBundle\Entity\Estat $estat
     *
     * @return Registre
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
