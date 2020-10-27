<?php

namespace orm\Entity;

use Doctrine\ORM\Mapping as ORM;
use orm\Interfaces\IEntityWithTabTitle;
use orm\Traits\EntityWithTabTitleTrait;

/**
 * CharacterInventaire
 *
 * @ORM\Table(name="characterInventaire")
 * @ORM\Entity
 */
class CharacterInventaire extends Inventaire implements IEntityWithTabTitle
{

    const TAB_TITLE = "Inventaire";
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
     * Get inventaire.
     *
     * @return \orm\Entity\Inventaire|null
     */
    public function getInventaire()
    {
        return $this->inventaire;
    }

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
     * @var \orm\Entity\Character
     *
     * @ORM\ManyToOne(targetEntity="orm\Entity\Character", inversedBy="characterInventaire")
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
     * @return CharacterInventaire
     */
    public function setCharacter(\orm\Entity\Character $character = null)
    {
        $this->character = $character;

        return $this;
    }

    

    public function copyFrom($inventaire){
        $this->setNom($inventaire->getNom());
        $this->setDescription($inventaire->getDescription());
        $this->setNombre($inventaire->getNombre());
        
    }
}
