<?php

namespace orm\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterInventaire
 *
 * @ORM\Table(name="characterInventaire")
 * @ORM\Entity
 */
class CharacterInventaire extends Inventaire
{
    /**
     * @var \orm\Entity\Inventaire
     *
     * @ORM\ManyToOne(targetEntity="orm\Entity\Inventaire", inversedBy="characterInventaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="inventaire_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $inventaire;

    /**
     * @var \orm\Entity\Character
     *
     * @ORM\ManyToOne(targetEntity="orm\Entity\Character", inversedBy="characterInventaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="character_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $character;


    /**
     * Set inventaire.
     *
     * @param \orm\Entity\Inventaire|null $inventaire
     *
     * @return CharacterInventaire
     */
    public function setInventaire(\orm\Entity\Inventaire $inventaire = null)
    {
        $this->inventaire = $inventaire;

        return $this;
    }

    /**
     * Get inventaire.
     *
     * @return \orm\Entity\Inventaire|null
     */
    public function getInventaire()
    {
        return $this->inventaire;
    }

    /**
     * Set character.
     *
     * @param \orm\Entity\Character|null $character
     *
     * @return CharacterInventaire
     */
    public function setCharacter(\orm\Entity\Character $character = null)
    {
        $this->character = $character;

        return $this;
    }

    /**
     * Get character.
     *
     * @return \orm\Entity\Character|null
     */
    public function getCharacter()
    {
        return $this->character;
    }
}
