<?php

namespace orm\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inventaire
 *
 * @ORM\Table(name="inventaires")
 * @ORM\Entity
 */
class Inventaire
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
     * @ORM\Column(name="nom", type="string", precision=0, scale=0, nullable=false, unique=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", precision=0, scale=0, nullable=false, unique=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="nombre", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $nombre;


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
     * Set nom.
     *
     * @param string $nom
     *
     * @return Inventaire
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
     * @param string $description
     *
     * @return Inventaire
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set nombre.
     *
     * @param int $nombre
     *
     * @return Inventaire
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

    public function copyFrom($inventaire){
        $this->setNom($inventaire->getNom());
        $this->setDescription($inventaire->getDescription());
        $this->setNombre($inventaire->getNombre());
    }
}
