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
    
    private $magie;

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
     * Constructor
     */
    public function __construct()
    {
        
    }


    /**
     * Add character.
     *
     * @param \orm\Entity\Character $character
     *
     * @return CharacterMagie
     */
    public function setCharacter(\orm\Entity\Character $character)
    {
        $this->character = $character;

        return $this;
    }

    /**
     * Get character.
     *
     * @return \orm\Entity\Character
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * Add magie.
     *
     * @param \orm\Entity\Magie $magie
     *
     * @return CharacterMagie
     */
    public function setMagie(\orm\Entity\Magie $magie)
    {
        $this->magie = $magie;

        return $this;
    }

    /**
     * Get magie.
     *
     * @return \orm\Entity\Magie
     */
    public function getMagie()
    {
        return $this->magie;
    }
}
