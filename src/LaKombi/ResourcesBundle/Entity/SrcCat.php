<?php

namespace LaKombi\ResourcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LaKombi\ResourcesBundle\Entity\SrcCat
 *
 * @ORM\Table(name="src_cat")
 * @ORM\Entity(repositoryClass="LaKombi\ResourcesBundle\Entity\Repository\SrcCatRepository")
 */
class SrcCat
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $Name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $Name;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->Name = $name;
    }

    /**
     * Get Name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->Name;
    }
}
