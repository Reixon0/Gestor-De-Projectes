<?php

namespace GestorProjectes\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Usuaris
 *
 * @ORM\Table(name="Usuaris")
 * @ORM\Entity
 */
class Usuaris {

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
     * @ORM\Column(name="username", type="string", length=50, nullable=false)
     * @Assert\NotBlank()
     * @Assert\Length(min=4)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=150, nullable=false)
     * @Assert\NotBlank()
     * @Assert\Length(min=4)
     */
    private $password;

    
    /**
     * @var integer
     *
     * @ORM\Column(name="tipus", type="integer", length=4, nullable=false)
     */
    private $tipus;
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Usuaris
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Usuaris
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }
/**
     * Set tipus
     *
     * @param string $tipus
     *
     * @return int
     */
    public function setTipus($tipus) {
        $this->tipus = $tipus;

        return $this;
    }

    /**
     * Get tipus
     *
     * @return int
     */
    public function getTipus() {
        return $this->tipus;
    }

    public function __toString() {
        return strval($this->id);
    }

}
