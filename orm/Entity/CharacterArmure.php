<?php

namespace orm\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterArmure
 *
 * @ORM\Table(name="characterArmure")
 * @ORM\Entity
 */
class CharacterArmure extends Armure
{
    /**
     * @var \orm\Entity\Armure
     *
     * @ORM\ManyToOne(targetEntity="orm\Entity\Armure", inversedBy="characterArmure")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="armure_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $armure;

    /**
     * @var \orm\Entity\Character
     *
     * @ORM\ManyToOne(targetEntity="orm\Entity\Character", inversedBy="characterArmure")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="character_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $character;


    /**
     * Set armure.
     *
     * @param \orm\Entity\Armure|null $armure
     *
     * @return CharacterArmure
     */
    public function setArmure(\orm\Entity\Armure $armure = null)
    {
        $this->armure = $armure;

        return $this;
    }

    /**
     * Get armure.
     *
     * @return \orm\Entity\Armure|null
     */
    public function getArmure()
    {
        return $this->armure;
    }

    /**
     * Set character.
     *
     * @param \orm\Entity\Character|null $character
     *
     * @return CharacterArmure
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
