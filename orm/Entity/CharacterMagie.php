<?php

namespace orm\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterMagie
 *
 * @ORM\Table(name="characterMagie")
 * @ORM\Entity
 */
class CharacterMagie extends Magie
{

    /**
     * Get magie.
     *
     * @return \orm\Entity\Magie|null
     */
    public function getMagie()
    {
        return $this->magie;
    }

    /**
     * Set magie.
     *
     * @param \orm\Entity\Magie|null $magie
     *
     * @return CharacterMagie
     */
    public function setMagie(\orm\Entity\Magie $magie = null)
    {
        $this->magie = $magie;

        return $this;
    }

    /**
     * @var \orm\Entity\Character
     *
     * @ORM\ManyToOne(targetEntity="orm\Entity\Character", inversedBy="characterMagie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="character_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $character;


    /**
     * Set character.
     *
     * @param \orm\Entity\Character|null $character
     *
     * @return CharacterMagie
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
