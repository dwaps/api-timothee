<?php

namespace Timothee\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * MusicalPart
 *
 * @ORM\Table(name="musical_part")
 * @ORM\Entity(repositoryClass="Timothee\ModelBundle\Repository\MusicalPartRepository")
 */
class MusicalPart
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
     * @ORM\Column(name="xml", type="text")
     */
    private $xml;

    private $file;

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
     * Set xml
     *
     * @param string $xml
     *
     * @return MusicalPart
     */
    public function setXml($xml)
    {
        $this->xml = $xml;

        return $this;
    }

    /**
     * Get xml
     *
     * @return string
     */
    public function getXml()
    {
        return $this->xml;
    }


    public function getFile()
    {
        return $this->file;
    }

    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }

    public function uploadFile()
    {
        if(null === $this->file)
            return;

        $name = $this->file->getClientOriginalName();

        $this->file->move($this->getUploadRootDir(), $name);
        $this->xml = $name;
    }

    public function getUploadDir()
    {
        return 'uploaded/xmlpart';
    }

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
}
