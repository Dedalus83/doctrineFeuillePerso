<?php

namespace orm\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterDon
 *
 * @ORM\Table(name="characterDon")
 * @ORM\Entity
 */
class CharacterDon extends Don
{
    /**
     * Set don.
     *
     * @param \orm\Entity\Don|null $don
     *
     * @return CharacterDon 
     */
    public function setDon(\orm\Entity\Don $don = null)
    {
        $this->don = $don;

        return $this;
    }

    /**
     * Get don.
     *
     * @return \orm\Entity\Don|null
     */
    public function getDon()
    {
        return $this->don;
    }

    /**
     * @var \orm\Entity\Character
     *
     * @ORM\ManyToOne(targetEntity="orm\Entity\Character", inversedBy="characterDon")
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
     * @return CharacterDon
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
