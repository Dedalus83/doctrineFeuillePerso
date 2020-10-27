<?php

namespace orm\Entity;

use Doctrine\ORM\Mapping as ORM;

use orm\Interfaces\IEntityWithTabTitle;
use orm\Traits\EntityWithTabTitleTrait;

/**
 * CharacterMagie
 * @ORM\Table(name="CharacterMagie")
 * @ORM\Entity
 */
class CharacterMagie extends Magie implements IEntityWithTabTitle
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
