<?php

namespace orm\Entity;

use Doctrine\ORM\Mapping as ORM;

use orm\Interfaces\IEntityWithTabTitle;
use orm\Traits\EntityWithTabTitleTrait;

/**
 * Notebook
 *
 * @ORM\Table(name="notebook")
 * @ORM\Entity
 */
class Notebook implements IEntityWithTabTitle
{
    const TAB_TITLE = "Carnet";
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
     * @ORM\Column(name="note", type="string", precision=0, scale=0, nullable=true, unique=false)
     */
    private $note;

    /** @ORM\ManyToOne(targetEntity="orm\Entity\Character", inversedBy="Notebook") */
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
     * Set note.
     *
     * @param string|null $note
     *
     * @return Notebook
     */
    public function setNote($note = null)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note.
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set character_id.
     *
     * @param int|null $character_id
     *
     * @return Notebook
     */
    public function setCharacter_id($character_id = null)
    {
        $this->character_id = $character_id;

        return $this;
    }
}
