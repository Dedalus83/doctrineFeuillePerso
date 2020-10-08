<?php

namespace orm\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterArgent
 *
 * @ORM\Table(name="characterArgent")
 * @ORM\Entity
 */
class CharacterArgent extends Argent
{
    /**
     * @var \orm\Entity\Argent
     *
     * @ORM\ManyToOne(targetEntity="orm\Entity\Argent", inversedBy="characterArgent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="argent_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $argent;

    /**
     * @var \orm\Entity\Character
     *
     * @ORM\ManyToOne(targetEntity="orm\Entity\Character", inversedBy="characterArgent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="character_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $character;


    /**
     * Set argent.
     *
     * @param \orm\Entity\Argent|null $argent
     *
     * @return CharacterArgent
     */
    public function setArgent(\orm\Entity\Argent $argent = null)
    {
        $this->argent = $argent;

        return $this;
    }

    /**
     * Get argent.
     *
     * @return \orm\Entity\Argent|null
     */
    public function getArgent()
    {
        return $this->argent;
    }

    /**
     * Set character.
     *
     * @param \orm\Entity\Character|null $character
     *
     * @return CharacterArgent
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
