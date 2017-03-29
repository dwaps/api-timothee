<?php

namespace Timothee\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Musical_Part
 *
 * @ORM\Table(name="musical__part")
 * @ORM\Entity(repositoryClass="Timothee\ModelBundle\Repository\Musical_PartRepository")
 */
class Musical_Part
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
     * @return Musical_Part
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
}

