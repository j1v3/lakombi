<?php

namespace LaKombi\ResourcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LaKombi\ResourcesBundle\Entity\SrcData
 *
 * @ORM\Table(name="src_data")
 * @ORM\Entity(repositoryClass="LaKombi\ResourcesBundle\Entity\Repository\SrcDataRepository")
 */
class SrcData
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
    * @ORM\ManyToOne(targetEntity="SrcCat", inversedBy="src_cat", cascade={"detach"})
    * @ORM\JoinColumn(name="src_cat_id", referencedColumnName="id")
     */
    protected $src_cat_id;
    
    /**
     * @ORM\OneToOne(targetEntity="LaKombi\UsersBundle\Entity\UserData")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user_id;

    /**
     * @ORM\ManyToMany(targetEntity="LaKombi\ShopBundle\Entity\Articles", mappedBy="src_data")
     */
    private $articles;

    public function __construct() {
    $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @var string $Name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $Name;

    /**
     * @var text $Comment
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $Comment;

    /**
     * @var string $Link
     *
     * @ORM\Column(name="Link", type="string", length=255)
     */
    private $Link;

    /**
     * @var string $Gfx
     *
     * @ORM\Column(name="gfx", type="string", length=255)
     */
    private $Gfx;

    /**
     * @var integer $Price
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $Price;

    /**
     * @var string $Weight
     *
     * @ORM\Column(name="weight", type="string", length=255)
     */
    private $Weight;
    
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

    /**
     * Set Comment
     *
     * @param text $comment
     */
    public function setComment($comment)
    {
        $this->Comment = $comment;
    }

    /**
     * Get Comment
     *
     * @return text 
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * Set Link
     *
     * @param string $link
     */
    public function setLink($link)
    {
        $this->Link = $link;
    }

    /**
     * Get Link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->Link;
    }

    /**
     * Set Gfx
     *
     * @param string $gfx
     */
    public function setGfx($gfx)
    {
        $this->Gfx = $gfx;
    }

    /**
     * Get Gfx
     *
     * @return string 
     */
    public function getGfx()
    {
        return $this->Gfx;
    }

    /**
     * Set Price
     *
     * @param integer $price
     */
    public function setPrice($price)
    {
        $this->Price = $price;
    }

    /**
     * Get Price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * Set Weight
     *
     * @param string $weight
     */
    public function setWeight($weight)
    {
        $this->Weight = $weight;
    }

    /**
     * Get Weight
     *
     * @return string 
     */
    public function getWeight()
    {
        return $this->Weight;
    }
}
