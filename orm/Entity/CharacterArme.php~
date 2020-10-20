<?php

namespace orm\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterArme
 *
 * @ORM\Table(name="characterArme")
 * @ORM\Entity
 */
class CharacterArme extends Arme
{
    /**
     * @var \orm\Entity\Arme
     *
     * @ORM\ManyToOne(targetEntity="orm\Entity\Arme", inversedBy="characterArme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="arme_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $arme;

    /**
     * @var \orm\Entity\Character
     *
     * @ORM\ManyToOne(targetEntity="orm\Entity\Character", inversedBy="characterArme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="character_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $character;


    /**
     * Set arme.
     *
     * @param \orm\Entity\Arme|null $arme
     *
     * @return CharacterArme
     */
    public function setArme(\orm\Entity\Arme $arme = null)
    {
        $this->arme = $arme;

        return $this;
    }

    /**
     * Get arme.
     *
     * @return \orm\Entity\Arme|null
     */
    public function getArme()
    {
        return $this->arme;
    }

    /**
     * Set character.
     *
     * @param \orm\Entity\Character|null $character
     *
     * @return CharacterArme
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
