<?php

namespace orm\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Character
 *
 * @ORM\Table(name="characters")
 * @ORM\Entity
 */
class Character
{
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
     * @ORM\Column(name="nom", type="string", precision=0, scale=0, nullable=true, unique=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", precision=0, scale=0, nullable=false, unique=false)
     */
    private $prenom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="age", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="race", type="string", precision=0, scale=0, nullable=false, unique=false)
     */
    private $race;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", precision=0, scale=0, nullable=false, unique=false)
     */
    private $sexe;

    /**
     * @var int
     *
     * @ORM\Column(name="taille", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $taille;

    /**
     * @var int
     *
     * @ORM\Column(name="poids", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="yeux", type="string", precision=0, scale=0, nullable=false, unique=false)
     */
    private $yeux;

    /**
     * @var string
     *
     * @ORM\Column(name="cheveux", type="string", precision=0, scale=0, nullable=false, unique=false)
     */
    private $cheveux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rang", type="string", precision=0, scale=0, nullable=true, unique=false)
     */
    private $rang;

    /**
     * @var int
     *
     * @ORM\Column(name="vie", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $vie;

    /**
     * @var int
     *
     * @ORM\Column(name="forceValue", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $force;

    /**
     * @var int
     *
     * @ORM\Column(name="mana", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $mana;

    /**
     * @var int
     *
     * @ORM\Column(name="puissance", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $puissance;

    /**
     * @var int
     *
     * @ORM\Column(name="precis", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $precis;

    /**
     * @var int
     *
     * @ORM\Column(name="initiative", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $initiative;

    /**
     * @var int
     *
     * @ORM\Column(name="agilite", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $agilite;

    /**
     * @var int
     *
     * @ORM\Column(name="mental", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $mental;

    /**
     * @var int
     *
     * @ORM\Column(name="intelligence", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $intelligence;

    /**
     * @var int
     *
     * @ORM\Column(name="volonte", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $volonte;

    /**
     * @var int
     *
     * @ORM\Column(name="perception", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $perception;

    /**
     * @var int
     *
     * @ORM\Column(name="maitrise", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $maitrise;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parade", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $parade;

    /**
     * @var int
     *
     * @ORM\Column(name="esquive", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $esquive;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bloque", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $bloque;

    /**
     * @var int|null
     *
     * @ORM\Column(name="encaissement", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $encaissement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="resilience", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $resilience;

    /**
     * @var int
     *
     * @ORM\Column(name="critique", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $critique;

    /**
     * @var int|null
     *
     * @ORM\Column(name="magRedRes", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $magRedRes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="magWhiteRes", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $magWhiteRes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="magBlueRes", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $magBlueRes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="magGreenRes", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $magGreenRes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="magBlackRes", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $magBlackRes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="magPrismRes", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $magPrismRes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="magRedCrit", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $magRedCrit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="magWhiteCrit", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $magWhiteCrit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="magBlueCrit", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $magBlueCrit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="magGreenCrit", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $magGreenCrit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="magBlackCrit", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $magBlackCrit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="magPrismCrit", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $magPrismCrit;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="orm\Entity\CharacterMagie", mappedBy="character")
     */
    private $characterMagie;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="orm\Entity\CharacterCompetence", mappedBy="character")
     */
    private $characterCompetence;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="orm\Entity\CharacterInventaire", mappedBy="character")
     */
    private $characterInventaire;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="orm\Entity\CharacterDon", mappedBy="character")
     */
    private $characterDon;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="orm\Entity\CharacterArme", mappedBy="character")
     */
    private $characterArme;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="orm\Entity\CharacterArmure", mappedBy="character")
     */
    private $characterArmure;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="orm\Entity\CharacterArgent", mappedBy="character")
     */
    private $characterArgent;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="orm\Entity\arme")
     * @ORM\JoinTable(name="character_arme",
     *   joinColumns={
     *     @ORM\JoinColumn(name="character_id", referencedColumnName="id", nullable=true)
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="arme_id", referencedColumnName="id", nullable=true)
     *   }
     * )
     */
    private $arme;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="orm\Entity\armure")
     * @ORM\JoinTable(name="character_armure",
     *   joinColumns={
     *     @ORM\JoinColumn(name="character_id", referencedColumnName="id", nullable=true)
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="armure_id", referencedColumnName="id", nullable=true)
     *   }
     * )
     */
    private $armure;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="orm\Entity\don")
     * @ORM\JoinTable(name="character_don",
     *   joinColumns={
     *     @ORM\JoinColumn(name="character_id", referencedColumnName="id", nullable=true)
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="don_id", referencedColumnName="id", nullable=true)
     *   }
     * )
     */
    private $don;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="orm\Entity\competence")
     * @ORM\JoinTable(name="character_competence",
     *   joinColumns={
     *     @ORM\JoinColumn(name="character_id", referencedColumnName="id", nullable=true)
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="competence_id", referencedColumnName="id", nullable=true)
     *   }
     * )
     */
    private $competence;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="orm\Entity\argent")
     * @ORM\JoinTable(name="character_argent",
     *   joinColumns={
     *     @ORM\JoinColumn(name="character_id", referencedColumnName="id", nullable=true)
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="argent_id", referencedColumnName="id", nullable=true)
     *   }
     * )
     */
    private $argent;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="orm\Entity\inventaire")
     * @ORM\JoinTable(name="character_inventaire",
     *   joinColumns={
     *     @ORM\JoinColumn(name="character_id", referencedColumnName="id", nullable=true)
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="inventaire_id", referencedColumnName="id", nullable=true)
     *   }
     * )
     */
    private $inventaire;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->characterMagie = new \Doctrine\Common\Collections\ArrayCollection();
        $this->characterCompetence = new \Doctrine\Common\Collections\ArrayCollection();
        $this->characterInventaire = new \Doctrine\Common\Collections\ArrayCollection();
        $this->characterDon = new \Doctrine\Common\Collections\ArrayCollection();
        $this->characterArme = new \Doctrine\Common\Collections\ArrayCollection();
        $this->characterArmure = new \Doctrine\Common\Collections\ArrayCollection();
        $this->characterArgent = new \Doctrine\Common\Collections\ArrayCollection();
        $this->arme = new \Doctrine\Common\Collections\ArrayCollection();
        $this->armure = new \Doctrine\Common\Collections\ArrayCollection();
        $this->don = new \Doctrine\Common\Collections\ArrayCollection();
        $this->competence = new \Doctrine\Common\Collections\ArrayCollection();
        $this->argent = new \Doctrine\Common\Collections\ArrayCollection();
        $this->inventaire = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set nom.
     *
     * @param string|null $nom
     *
     * @return Character
     */
    public function setNom($nom = null)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string|null
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom.
     *
     * @param string $prenom
     *
     * @return Character
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom.
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set age.
     *
     * @param int|null $age
     *
     * @return Character
     */
    public function setAge($age = null)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age.
     *
     * @return int|null
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set race.
     *
     * @param string $race
     *
     * @return Character
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race.
     *
     * @return string
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set sexe.
     *
     * @param string $sexe
     *
     * @return Character
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe.
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set taille.
     *
     * @param int $taille
     *
     * @return Character
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille.
     *
     * @return int
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set poids.
     *
     * @param int $poids
     *
     * @return Character
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids.
     *
     * @return int
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set yeux.
     *
     * @param string $yeux
     *
     * @return Character
     */
    public function setYeux($yeux)
    {
        $this->yeux = $yeux;

        return $this;
    }

    /**
     * Get yeux.
     *
     * @return string
     */
    public function getYeux()
    {
        return $this->yeux;
    }

    /**
     * Set cheveux.
     *
     * @param string $cheveux
     *
     * @return Character
     */
    public function setCheveux($cheveux)
    {
        $this->cheveux = $cheveux;

        return $this;
    }

    /**
     * Get cheveux.
     *
     * @return string
     */
    public function getCheveux()
    {
        return $this->cheveux;
    }

    /**
     * Set rang.
     *
     * @param string|null $rang
     *
     * @return Character
     */
    public function setRang($rang = null)
    {
        $this->rang = $rang;

        return $this;
    }

    /**
     * Get rang.
     *
     * @return string|null
     */
    public function getRang()
    {
        return $this->rang;
    }

    /**
     * Set vie.
     *
     * @param int $vie
     *
     * @return Character
     */
    public function setVie($vie)
    {
        $this->vie = $vie;

        return $this;
    }

    /**
     * Get vie.
     *
     * @return int
     */
    public function getVie()
    {
        return $this->vie;
    }

    /**
     * Set force.
     *
     * @param int $force
     *
     * @return Character
     */
    public function setForce($force)
    {
        $this->force = $force;

        return $this;
    }

    /**
     * Get force.
     *
     * @return int
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * Set mana.
     *
     * @param int $mana
     *
     * @return Character
     */
    public function setMana($mana)
    {
        $this->mana = $mana;

        return $this;
    }

    /**
     * Get mana.
     *
     * @return int
     */
    public function getMana()
    {
        return $this->mana;
    }

    /**
     * Set puissance.
     *
     * @param int $puissance
     *
     * @return Character
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }

    /**
     * Get puissance.
     *
     * @return int
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * Set precis.
     *
     * @param int $precis
     *
     * @return Character
     */
    public function setPrecis($precis)
    {
        $this->precis = $precis;

        return $this;
    }

    /**
     * Get precis.
     *
     * @return int
     */
    public function getPrecis()
    {
        return $this->precis;
    }

    /**
     * Set initiative.
     *
     * @param int $initiative
     *
     * @return Character
     */
    public function setInitiative($initiative)
    {
        $this->initiative = $initiative;

        return $this;
    }

    /**
     * Get initiative.
     *
     * @return int
     */
    public function getInitiative()
    {
        return $this->initiative;
    }

    /**
     * Set agilite.
     *
     * @param int $agilite
     *
     * @return Character
     */
    public function setAgilite($agilite)
    {
        $this->agilite = $agilite;

        return $this;
    }

    /**
     * Get agilite.
     *
     * @return int
     */
    public function getAgilite()
    {
        return $this->agilite;
    }

    /**
     * Set mental.
     *
     * @param int $mental
     *
     * @return Character
     */
    public function setMental($mental)
    {
        $this->mental = $mental;

        return $this;
    }

    /**
     * Get mental.
     *
     * @return int
     */
    public function getMental()
    {
        return $this->mental;
    }

    /**
     * Set intelligence.
     *
     * @param int $intelligence
     *
     * @return Character
     */
    public function setIntelligence($intelligence)
    {
        $this->intelligence = $intelligence;

        return $this;
    }

    /**
     * Get intelligence.
     *
     * @return int
     */
    public function getIntelligence()
    {
        return $this->intelligence;
    }

    /**
     * Set volonte.
     *
     * @param int $volonte
     *
     * @return Character
     */
    public function setVolonte($volonte)
    {
        $this->volonte = $volonte;

        return $this;
    }

    /**
     * Get volonte.
     *
     * @return int
     */
    public function getVolonte()
    {
        return $this->volonte;
    }

    /**
     * Set perception.
     *
     * @param int $perception
     *
     * @return Character
     */
    public function setPerception($perception)
    {
        $this->perception = $perception;

        return $this;
    }

    /**
     * Get perception.
     *
     * @return int
     */
    public function getPerception()
    {
        return $this->perception;
    }

    /**
     * Set maitrise.
     *
     * @param int $maitrise
     *
     * @return Character
     */
    public function setMaitrise($maitrise)
    {
        $this->maitrise = $maitrise;

        return $this;
    }

    /**
     * Get maitrise.
     *
     * @return int
     */
    public function getMaitrise()
    {
        return $this->maitrise;
    }

    /**
     * Set parade.
     *
     * @param int|null $parade
     *
     * @return Character
     */
    public function setParade($parade = null)
    {
        $this->parade = $parade;

        return $this;
    }

    /**
     * Get parade.
     *
     * @return int|null
     */
    public function getParade()
    {
        return $this->parade;
    }

    /**
     * Set esquive.
     *
     * @param int $esquive
     *
     * @return Character
     */
    public function setEsquive($esquive)
    {
        $this->esquive = $esquive;

        return $this;
    }

    /**
     * Get esquive.
     *
     * @return int
     */
    public function getEsquive()
    {
        return $this->esquive;
    }

    /**
     * Set bloque.
     *
     * @param int|null $bloque
     *
     * @return Character
     */
    public function setBloque($bloque = null)
    {
        $this->bloque = $bloque;

        return $this;
    }

    /**
     * Get bloque.
     *
     * @return int|null
     */
    public function getBloque()
    {
        return $this->bloque;
    }

    /**
     * Set encaissement.
     *
     * @param int|null $encaissement
     *
     * @return Character
     */
    public function setEncaissement($encaissement = null)
    {
        $this->encaissement = $encaissement;

        return $this;
    }

    /**
     * Get encaissement.
     *
     * @return int|null
     */
    public function getEncaissement()
    {
        return $this->encaissement;
    }

    /**
     * Set resilience.
     *
     * @param int|null $resilience
     *
     * @return Character
     */
    public function setResilience($resilience = null)
    {
        $this->resilience = $resilience;

        return $this;
    }

    /**
     * Get resilience.
     *
     * @return int|null
     */
    public function getResilience()
    {
        return $this->resilience;
    }

    /**
     * Set critique.
     *
     * @param int $critique
     *
     * @return Character
     */
    public function setCritique($critique)
    {
        $this->critique = $critique;

        return $this;
    }

    /**
     * Get critique.
     *
     * @return int
     */
    public function getCritique()
    {
        return $this->critique;
    }

    /**
     * Set magRedRes.
     *
     * @param int|null $magRedRes
     *
     * @return Character
     */
    public function setMagRedRes($magRedRes = null)
    {
        $this->magRedRes = $magRedRes;

        return $this;
    }

    /**
     * Get magRedRes.
     *
     * @return int|null
     */
    public function getMagRedRes()
    {
        return $this->magRedRes;
    }

    /**
     * Set magWhiteRes.
     *
     * @param int|null $magWhiteRes
     *
     * @return Character
     */
    public function setMagWhiteRes($magWhiteRes = null)
    {
        $this->magWhiteRes = $magWhiteRes;

        return $this;
    }

    /**
     * Get magWhiteRes.
     *
     * @return int|null
     */
    public function getMagWhiteRes()
    {
        return $this->magWhiteRes;
    }

    /**
     * Set magBlueRes.
     *
     * @param int|null $magBlueRes
     *
     * @return Character
     */
    public function setMagBlueRes($magBlueRes = null)
    {
        $this->magBlueRes = $magBlueRes;

        return $this;
    }

    /**
     * Get magBlueRes.
     *
     * @return int|null
     */
    public function getMagBlueRes()
    {
        return $this->magBlueRes;
    }

    /**
     * Set magGreenRes.
     *
     * @param int|null $magGreenRes
     *
     * @return Character
     */
    public function setMagGreenRes($magGreenRes = null)
    {
        $this->magGreenRes = $magGreenRes;

        return $this;
    }

    /**
     * Get magGreenRes.
     *
     * @return int|null
     */
    public function getMagGreenRes()
    {
        return $this->magGreenRes;
    }

    /**
     * Set magBlackRes.
     *
     * @param int|null $magBlackRes
     *
     * @return Character
     */
    public function setMagBlackRes($magBlackRes = null)
    {
        $this->magBlackRes = $magBlackRes;

        return $this;
    }

    /**
     * Get magBlackRes.
     *
     * @return int|null
     */
    public function getMagBlackRes()
    {
        return $this->magBlackRes;
    }

    /**
     * Set magPrismRes.
     *
     * @param int|null $magPrismRes
     *
     * @return Character
     */
    public function setMagPrismRes($magPrismRes = null)
    {
        $this->magPrismRes = $magPrismRes;

        return $this;
    }

    /**
     * Get magPrismRes.
     *
     * @return int|null
     */
    public function getMagPrismRes()
    {
        return $this->magPrismRes;
    }

    /**
     * Set magRedCrit.
     *
     * @param int|null $magRedCrit
     *
     * @return Character
     */
    public function setMagRedCrit($magRedCrit = null)
    {
        $this->magRedCrit = $magRedCrit;

        return $this;
    }

    /**
     * Get magRedCrit.
     *
     * @return int|null
     */
    public function getMagRedCrit()
    {
        return $this->magRedCrit;
    }

    /**
     * Set magWhiteCrit.
     *
     * @param int|null $magWhiteCrit
     *
     * @return Character
     */
    public function setMagWhiteCrit($magWhiteCrit = null)
    {
        $this->magWhiteCrit = $magWhiteCrit;

        return $this;
    }

    /**
     * Get magWhiteCrit.
     *
     * @return int|null
     */
    public function getMagWhiteCrit()
    {
        return $this->magWhiteCrit;
    }

    /**
     * Set magBlueCrit.
     *
     * @param int|null $magBlueCrit
     *
     * @return Character
     */
    public function setMagBlueCrit($magBlueCrit = null)
    {
        $this->magBlueCrit = $magBlueCrit;

        return $this;
    }

    /**
     * Get magBlueCrit.
     *
     * @return int|null
     */
    public function getMagBlueCrit()
    {
        return $this->magBlueCrit;
    }

    /**
     * Set magGreenCrit.
     *
     * @param int|null $magGreenCrit
     *
     * @return Character
     */
    public function setMagGreenCrit($magGreenCrit = null)
    {
        $this->magGreenCrit = $magGreenCrit;

        return $this;
    }

    /**
     * Get magGreenCrit.
     *
     * @return int|null
     */
    public function getMagGreenCrit()
    {
        return $this->magGreenCrit;
    }

    /**
     * Set magBlackCrit.
     *
     * @param int|null $magBlackCrit
     *
     * @return Character
     */
    public function setMagBlackCrit($magBlackCrit = null)
    {
        $this->magBlackCrit = $magBlackCrit;

        return $this;
    }

    /**
     * Get magBlackCrit.
     *
     * @return int|null
     */
    public function getMagBlackCrit()
    {
        return $this->magBlackCrit;
    }

    /**
     * Set magPrismCrit.
     *
     * @param int|null $magPrismCrit
     *
     * @return Character
     */
    public function setMagPrismCrit($magPrismCrit = null)
    {
        $this->magPrismCrit = $magPrismCrit;

        return $this;
    }

    /**
     * Get magPrismCrit.
     *
     * @return int|null
     */
    public function getMagPrismCrit()
    {
        return $this->magPrismCrit;
    }

    /**
     * Add characterMagie.
     *
     * @param \orm\Entity\CharacterMagie $characterMagie
     *
     * @return Character
     */
    public function addCharacterMagie(\orm\Entity\CharacterMagie $characterMagie)
    {
        $this->characterMagie[] = $characterMagie;

        return $this;
    }

    /**
     * Remove characterMagie.
     *
     * @param \orm\Entity\CharacterMagie $characterMagie
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCharacterMagie(\orm\Entity\CharacterMagie $characterMagie)
    {
        return $this->characterMagie->removeElement($characterMagie);
    }

    /**
     * Get characterMagie.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCharacterMagie()
    {
        return $this->characterMagie;
    }

    /**
     * Add characterCompetence.
     *
     * @param \orm\Entity\CharacterCompetence $characterCompetence
     *
     * @return Character
     */
    public function addCharacterCompetence(\orm\Entity\CharacterCompetence $characterCompetence)
    {
        $this->characterCompetence[] = $characterCompetence;

        return $this;
    }

    /**
     * Remove characterCompetence.
     *
     * @param \orm\Entity\CharacterCompetence $characterCompetence
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCharacterCompetence(\orm\Entity\CharacterCompetence $characterCompetence)
    {
        return $this->characterCompetence->removeElement($characterCompetence);
    }

    /**
     * Get characterCompetence.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCharacterCompetence()
    {
        return $this->characterCompetence;
    }

    /**
     * Add characterInventaire.
     *
     * @param \orm\Entity\CharacterInventaire $characterInventaire
     *
     * @return Character
     */
    public function addCharacterInventaire(\orm\Entity\CharacterInventaire $characterInventaire)
    {
        $this->characterInventaire[] = $characterInventaire;

        return $this;
    }

    /**
     * Remove characterInventaire.
     *
     * @param \orm\Entity\CharacterInventaire $characterInventaire
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCharacterInventaire(\orm\Entity\CharacterInventaire $characterInventaire)
    {
        return $this->characterInventaire->removeElement($characterInventaire);
    }

    /**
     * Get characterInventaire.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCharacterInventaire()
    {
        return $this->characterInventaire;
    }

    /**
     * Add characterDon.
     *
     * @param \orm\Entity\CharacterDon $characterDon
     *
     * @return Character
     */
    public function addCharacterDon(\orm\Entity\CharacterDon $characterDon)
    {
        $this->characterDon[] = $characterDon;

        return $this;
    }

    /**
     * Remove characterDon.
     *
     * @param \orm\Entity\CharacterDon $characterDon
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCharacterDon(\orm\Entity\CharacterDon $characterDon)
    {
        return $this->characterDon->removeElement($characterDon);
    }

    /**
     * Get characterDon.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCharacterDon()
    {
        return $this->characterDon;
    }

    /**
     * Add characterArme.
     *
     * @param \orm\Entity\CharacterArme $characterArme
     *
     * @return Character
     */
    public function addCharacterArme(\orm\Entity\CharacterArme $characterArme)
    {
        $this->characterArme[] = $characterArme;

        return $this;
    }

    /**
     * Remove characterArme.
     *
     * @param \orm\Entity\CharacterArme $characterArme
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCharacterArme(\orm\Entity\CharacterArme $characterArme)
    {
        return $this->characterArme->removeElement($characterArme);
    }

    /**
     * Get characterArme.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCharacterArme()
    {
        return $this->characterArme;
    }

    /**
     * Add characterArmure.
     *
     * @param \orm\Entity\CharacterArmure $characterArmure
     *
     * @return Character
     */
    public function addCharacterArmure(\orm\Entity\CharacterArmure $characterArmure)
    {
        $this->characterArmure[] = $characterArmure;

        return $this;
    }

    /**
     * Remove characterArmure.
     *
     * @param \orm\Entity\CharacterArmure $characterArmure
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCharacterArmure(\orm\Entity\CharacterArmure $characterArmure)
    {
        return $this->characterArmure->removeElement($characterArmure);
    }

    /**
     * Get characterArmure.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCharacterArmure()
    {
        return $this->characterArmure;
    }

    /**
     * Add characterArgent.
     *
     * @param \orm\Entity\CharacterArgent $characterArgent
     *
     * @return Character
     */
    public function addCharacterArgent(\orm\Entity\CharacterArgent $characterArgent)
    {
        $this->characterArgent[] = $characterArgent;

        return $this;
    }

    /**
     * Remove characterArgent.
     *
     * @param \orm\Entity\CharacterArgent $characterArgent
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCharacterArgent(\orm\Entity\CharacterArgent $characterArgent)
    {
        return $this->characterArgent->removeElement($characterArgent);
    }

    /**
     * Get characterArgent.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCharacterArgent()
    {
        return $this->characterArgent;
    }

    /**
     * Add arme.
     *
     * @param \orm\Entity\arme $arme
     *
     * @return Character
     */
    public function addArme(\orm\Entity\arme $arme)
    {
        $this->arme[] = $arme;

        return $this;
    }

    /**
     * Remove arme.
     *
     * @param \orm\Entity\arme $arme
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeArme(\orm\Entity\arme $arme)
    {
        return $this->arme->removeElement($arme);
    }

    /**
     * Get arme.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArme()
    {
        return $this->arme;
    }

    /**
     * Add armure.
     *
     * @param \orm\Entity\armure $armure
     *
     * @return Character
     */
    public function addArmure(\orm\Entity\armure $armure)
    {
        $this->armure[] = $armure;

        return $this;
    }

    /**
     * Remove armure.
     *
     * @param \orm\Entity\armure $armure
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeArmure(\orm\Entity\armure $armure)
    {
        return $this->armure->removeElement($armure);
    }

    /**
     * Get armure.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArmure()
    {
        return $this->armure;
    }

    /**
     * Add don.
     *
     * @param \orm\Entity\don $don
     *
     * @return Character
     */
    public function addDon(\orm\Entity\don $don)
    {
        $this->don[] = $don;

        return $this;
    }

    /**
     * Remove don.
     *
     * @param \orm\Entity\don $don
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeDon(\orm\Entity\don $don)
    {
        return $this->don->removeElement($don);
    }

    /**
     * Get don.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDon()
    {
        return $this->don;
    }

    /**
     * Add competence.
     *
     * @param \orm\Entity\competence $competence
     *
     * @return Character
     */
    public function addCompetence(\orm\Entity\competence $competence)
    {
        $this->competence[] = $competence;

        return $this;
    }

    /**
     * Remove competence.
     *
     * @param \orm\Entity\competence $competence
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCompetence(\orm\Entity\competence $competence)
    {
        return $this->competence->removeElement($competence);
    }

    /**
     * Get competence.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompetence()
    {
        return $this->competence;
    }

    /**
     * Add argent.
     *
     * @param \orm\Entity\argent $argent
     *
     * @return Character
     */
    public function addArgent(\orm\Entity\argent $argent)
    {
        $this->argent[] = $argent;

        return $this;
    }

    /**
     * Remove argent.
     *
     * @param \orm\Entity\argent $argent
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeArgent(\orm\Entity\argent $argent)
    {
        return $this->argent->removeElement($argent);
    }

    /**
     * Get argent.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArgent()
    {
        return $this->argent;
    }

    /**
     * Add inventaire.
     *
     * @param \orm\Entity\inventaire $inventaire
     *
     * @return Character
     */
    public function addInventaire(\orm\Entity\inventaire $inventaire)
    {
        $this->inventaire[] = $inventaire;

        return $this;
    }

    /**
     * Remove inventaire.
     *
     * @param \orm\Entity\inventaire $inventaire
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeInventaire(\orm\Entity\inventaire $inventaire)
    {
        return $this->inventaire->removeElement($inventaire);
    }

    /**
     * Get inventaire.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInventaire()
    {
        return $this->inventaire;
    }
}
