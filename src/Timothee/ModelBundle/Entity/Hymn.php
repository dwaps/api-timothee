<?php

namespace Timothee\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hymn
 *
 * @ORM\Table(name="hymn")
 * @ORM\Entity(repositoryClass="Timothee\ModelBundle\Repository\HymnRepository")
 */
class Hymn
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="num", type="string", length=5, unique=true)
     */
    private $num;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=255)
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="lyrics", type="text")
     */
    private $lyrics;

    /**
     * @ORM\OneToOne(targetEntity="Timothee\ModelBundle\Entity\MusicalPart", cascade={"persist","remove"})
     */
    private $musicalPart;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Hymn
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set num
     *
     * @param string $num
     *
     * @return Hymn
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return string
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set ref
     *
     * @param string $ref
     *
     * @return Hymn
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set lyrics
     *
     * @param string $lyrics
     *
     * @return Hymn
     */
    public function setLyrics($lyrics)
    {
        $this->lyrics = $lyrics;

        return $this;
    }

    /**
     * Get lyrics
     *
     * @return string
     */
    public function getLyrics()
    {
        return $this->lyrics;
    }

    public function setMusicalPart(MusicalPart $musicalPart = null)
    {
        $this->musicalPart = $musicalPart;
    }

    public function getMusicalPart()
    {
        return $this->musicalPart;
    }
}
