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

    private $errors = [];

    public function __construct(
        $title="",
        $num="",
        $ref="",
        $lyrics="",
        $musicalPart=null)
    {
        $this->setTitle($title);
        $this->setNum($num);
        $this->setRef($ref);
        $this->setLyrics($lyrics);
        $this->setMusicalPart($musicalPart);
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
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
        $title = trim(strip_tags($title));

        if($title != "" AND !preg_match('/^[^0-9]/',$title))
            array_push($this->errors, ">> Le titre du chant est invalide !");

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
        $num = trim(strip_tags($num));

        if($num != "" AND !preg_match('/^(\d{1,3})$|^(\d{1,2}[ab])$/',$num))
            array_push($this->errors, ">> Le numéro de chant est invalide !");

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
        $ref = trim(strip_tags($ref));
        
        if($ref != "" AND !preg_match('/;?([1-3] )?[A-Z][a-z] \d{1,3}([-:;,]\d{1,3})*/',$ref))
            array_push($this->errors, ">> Le format de référence n'est pas correct !");

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

    public function hasError()
    {
        return sizeof($this->errors)>0;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function formatLyricsFromBDD()
    {
        $this->lyrics = preg_replace("/<span style='padding-left:15px'><\/span>/", "\t", $this->lyrics);
        $this->lyrics = preg_replace("/<br>/", "\n", $this->lyrics);
    }

    public function formatLyricsToBDD()
    {
        $this->lyrics = preg_replace("/#|\t/", "<span style='padding-left:15px'></span>", $this->lyrics);
        $this->lyrics = preg_replace("/\n/", "<br>", $this->lyrics);
        $this->lyrics = str_replace(array("\r"), "", $this->lyrics);
    }
}
