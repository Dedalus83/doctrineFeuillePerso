<?php

namespace orm\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterCompetence
 *
 * @ORM\Table(name="characterCompetence")
 * @ORM\Entity
 */
class CharacterCompetence extends Competence
{

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
     * Set competence.
     *
     * @param \orm\Entity\Competence|null $competence
     *
     * @return CharacterCompetence
     */
    public function setCompetence(\orm\Entity\Competence $competence = null)
    {
        $this->competence = $competence;

        return $this;
    }

    /**
     * Get competence.
     *
     * @return \orm\Entity\Competence|null
     */
    public function getCompetence()
    {
        return $this->competence;
    }

    /**
     * @var \orm\Entity\Character
     *
     * @ORM\ManyToOne(targetEntity="orm\Entity\Character", inversedBy="characterCompetence")
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
     * @return CharacterCompetence
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
