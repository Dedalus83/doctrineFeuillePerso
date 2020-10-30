<?php

namespace orm\Entity;

use orm\Interfaces\IEntityWithTabTitle;
use orm\Traits\EntityWithTabTitleTrait;
use Doctrine\ORM\Mapping as ORM;


/**
 * Magie
 * @ORM\Table(name="magies")
 * @ORM\Entity
 */
class Magie implements IEntityWithTabTitle
{
    const TAB_TITLE = "Magie";
    use EntityWithTabTitleTrait;
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="orm\Generator\IdGenerator")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", precision=0, scale=0, nullable=false, unique=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", precision=0, scale=0, nullable=false, unique=false)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="degats", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $degats;

    /**
     * @var int|null
     *
     * @ORM\Column(name="critique", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $critique;

    /**
     * @var int|null
     *
     * @ORM\Column(name="malus", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $malus;

    /**
     * @var int
     *
     * @ORM\Column(name="mana", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $mana;

    /**
     * @var int
     *
     * @ORM\Column(name="nombre", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="effet", type="string", precision=0, scale=0, nullable=true, unique=false)
     */
    private $effet;


    /**
     * Get id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id.
     *
     * @param string $id
     *
     * @return Magie
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set type.
     *
     * @param string $type
     *
     * @return Magie
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Magie
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
     * Set description.
     *
     * @param string|null $description
     *
     * @return Magie
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set degats.
     *
     * @param int|null $degats
     *
     * @return Magie
     */
    public function setDegats($degats = null)
    {
        $this->degats = $degats;

        return $this;
    }

    /**
     * Get degats.
     *
     * @return int|null
     */
    public function getDegats()
    {
        return $this->degats;
    }

    /**
     * Set critique.
     *
     * @param int|null $critique
     *
     * @return Magie
     */
    public function setCritique($critique = null)
    {
        $this->critique = $critique;

        return $this;
    }

    /**
     * Get critique.
     *
     * @return int|null
     */
    public function getCritique()
    {
        return $this->critique;
    }

    /**
     * Set malus.
     *
     * @param int|null $malus
     *
     * @return Magie
     */
    public function setMalus($malus = null)
    {
        $this->malus = $malus;

        return $this;
    }

    /**
     * Get malus.
     *
     * @return int|null
     */
    public function getMalus()
    {
        return $this->malus;
    }

    /**
     * Set mana.
     *
     * @param int $mana
     *
     * @return Magie
     */
    public function setMana($mana)
    {
        $this->mana = $mana;

        return $this;
    }

    /**
     * Get mana.
     *
     * @return int
     */
    public function getMana()
    {
        return $this->mana;
    }

    /**
     * Set nombre.
     *
     * @param int $nombre
     *
     * @return Magie
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre.
     *
     * @return int
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set effet.
     *
     * @param string|null $effet
     *
     * @return Magie
     */
    public function setEffet($effet = null)
    {
        $this->effet = $effet;

        return $this;
    }

    /**
     * Get effet.
     *
     * @return string|null
     */
    public function getEffet()
    {
        return $this->effet;
    }

    public function copyFrom($magie){
        // $this->setId($magie->getId());
        $this->setType($magie->getType());
        $this->setNom($magie->getNom());
        $this->setDescription($magie->getDescription());
        $this->setDegats($magie->getDegats());
        $this->setCritique($magie->getCritique());
        $this->setMana($magie->getMana());
        $this->setMalus($magie->getMalus());
        $this->setNombre($magie->getNombre());
        $this->setEffet($magie->getEffet());
    }
}
