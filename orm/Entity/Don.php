<?php

namespace orm\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Don
 *
 * @ORM\Table(name="dons")
 * @ORM\Entity
 */
class Don
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
     * @return Don
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
     * @return Don
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
    public function copyFrom($don){
        $this->setNom($don->getNom());
        $this->setDescription($don->getDescription());
    }
}
