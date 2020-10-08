<?php

namespace orm\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Armure
 *
 * @ORM\Table(name="armures")
 * @ORM\Entity
 */
class Armure
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="qualite", type="string", precision=0, scale=0, nullable=false, unique=false)
     */
    private $qualite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", precision=0, scale=0, nullable=false, unique=false)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="vie", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $vie;

    /**
     * @var int
     *
     * @ORM\Column(name="resilience", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $resilience;

    /**
     * @var int
     *
     * @ORM\Column(name="resistance", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $resistance;

    /**
     * @var int
     *
     * @ORM\Column(name="malusEsquive", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $malusEsquive;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amelioration1", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $amelioration1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amelioration2", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $amelioration2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amelioration3", type="string", precision=0, scale=0, nullable=true, unique=false)
     */
    private $amelioration3;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set qualite.
     *
     * @param string $qualite
     *
     * @return Armure
     */
    public function setQualite($qualite)
    {
        $this->qualite = $qualite;

        return $this;
    }

    /**
     * Get qualite.
     *
     * @return string
     */
    public function getQualite()
    {
        return $this->qualite;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Armure
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set vie.
     *
     * @param int $vie
     *
     * @return Armure
     */
    public function setVie($vie)
    {
        $this->vie = $vie;

        return $this;
    }

    /**
     * Get vie.
     *
     * @return int
     */
    public function getVie()
    {
        return $this->vie;
    }

    /**
     * Set resilience.
     *
     * @param int $resilience
     *
     * @return Armure
     */
    public function setResilience($resilience)
    {
        $this->resilience = $resilience;

        return $this;
    }

    /**
     * Get resilience.
     *
     * @return int
     */
    public function getResilience()
    {
        return $this->resilience;
    }

    /**
     * Set resistance.
     *
     * @param int $resistance
     *
     * @return Armure
     */
    public function setResistance($resistance)
    {
        $this->resistance = $resistance;

        return $this;
    }

    /**
     * Get resistance.
     *
     * @return int
     */
    public function getResistance()
    {
        return $this->resistance;
    }

    /**
     * Set malusEsquive.
     *
     * @param int $malusEsquive
     *
     * @return Armure
     */
    public function setMalusEsquive($malusEsquive)
    {
        $this->malusEsquive = $malusEsquive;

        return $this;
    }

    /**
     * Get malusEsquive.
     *
     * @return int
     */
    public function getMalusEsquive()
    {
        return $this->malusEsquive;
    }

    /**
     * Set amelioration1.
     *
     * @param int|null $amelioration1
     *
     * @return Armure
     */
    public function setAmelioration1($amelioration1 = null)
    {
        $this->amelioration1 = $amelioration1;

        return $this;
    }

    /**
     * Get amelioration1.
     *
     * @return int|null
     */
    public function getAmelioration1()
    {
        return $this->amelioration1;
    }

    /**
     * Set amelioration2.
     *
     * @param int|null $amelioration2
     *
     * @return Armure
     */
    public function setAmelioration2($amelioration2 = null)
    {
        $this->amelioration2 = $amelioration2;

        return $this;
    }

    /**
     * Get amelioration2.
     *
     * @return int|null
     */
    public function getAmelioration2()
    {
        return $this->amelioration2;
    }

    /**
     * Set amelioration3.
     *
     * @param string|null $amelioration3
     *
     * @return Armure
     */
    public function setAmelioration3($amelioration3 = null)
    {
        $this->amelioration3 = $amelioration3;

        return $this;
    }

    /**
     * Get amelioration3.
     *
     * @return string|null
     */
    public function getAmelioration3()
    {
        return $this->amelioration3;
    }

    public function copyFrom($armure){
        $this->setQualite($armure->getNom());
        $this->setNom($armure->getNom());
        $this->setVie($armure->getVie());
        $this->setResilience($armure->getResilience());
        $this->setResistance($armure->getResistance());
        $this->setMalusEsquive($armure->getMalusEsquive());
        $this->setAmelioration1($armure->getAmelioration1());
        $this->setAmelioration2($armure->getAmelioration2());
        $this->setAmelioration3($armure->getAmelioration3());
    }
}
