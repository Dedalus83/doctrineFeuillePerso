<?php

namespace orm\Entity;

use Doctrine\ORM\Mapping as ORM;

use orm\Interfaces\IEntityWithTabTitle;
use orm\Traits\EntityWithTabTitleTrait;

/**
 * Contact
 *
 * @ORM\Table(name="contacts")
 * @ORM\Entity
 */
class Contact implements IEntityWithTabTitle
{
    const TAB_TITLE = "Contact";
    use EntityWithTabTitleTrait;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nameContact", type="string", precision=0, scale=0, nullable=true, unique=false)
     */
    private $nameContact;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numberTel", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $numberTel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="chance", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $chance;

    /** @ORM\ManyToOne(targetEntity="orm\Entity\Character", inversedBy="Contact") */
    private $character;

    /**
     * @var int|null
     *
     * @ORM\Column(name="character_id", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $character_id;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameContact.
     *
     * @param string|null $nameContact
     *
     * @return Contact
     */
    public function setNameContact($nameContact = null)
    {
        $this->nameContact = $nameContact;

        return $this;
    }

    /**
     * Get nameContact.
     *
     * @return string|null
     */
    public function getNameContact()
    {
        return $this->nameContact;
    }

    /**
     * Set numberTel.
     *
     * @param int|null $numberTel
     *
     * @return Contact
     */
    public function setNumberTel($numberTel = null)
    {
        $this->numberTel = $numberTel;

        return $this;
    }

    /**
     * Get numberTel.
     *
     * @return int|null
     */
    public function getNumberTel()
    {
        return $this->numberTel;
    }

    /**
     * Set chance.
     *
     * @param int|null $chance
     *
     * @return Contact
     */
    public function setChance($chance = null)
    {
        $this->chance = $chance;

        return $this;
    }

    /**
     * Get chance.
     *
     * @return int|null
     */
    public function getChance()
    {
        return $this->chance;
    }

    /**
     * Set character_id.
     *
     * @param int|null $character_id
     *
     * @return Contact
     */
    public function setCharacter_id($character_id = null)
    {
        $this->character_id = $character_id;

        return $this;
    }
}
