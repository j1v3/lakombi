<?php

namespace LaKombi\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LaKombi\UsersBundle\Entity\UserData
 *
 * @ORM\Table(name="user_data")
 * @ORM\Entity(repositoryClass="LaKombi\UsersBundle\Repository\UserDataRepository")
 */
class UserData
{
    /**
    * @ORM\ManyToOne(targetEntity="UserCat", inversedBy="usr_cat", cascade={"detach"})
    * @ORM\JoinColumn(name="user_cat_id", referencedColumnName="id")
     */
    protected $user_cat_id;
    
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
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $Name;

    /**
     * @var string $Surname
     *
     * @ORM\Column(name="surname", type="string", length=45, nullable=true)
     */
    private $Surname;

    /**
     * @var string $Nickname
     *
     * @ORM\Column(name="nickname", type="string", length=45, nullable=true)
     */
    private $Nickname;

    /**
     * @var boolean $Sex
     *
     * @ORM\Column(name="sex", type="string", length=1, nullable=true)
     */
    private $Sex;

    /**
     * @var string $Adress1
     *
     * @ORM\Column(name="adress1", type="string", length=255, nullable=true)
     */
    private $Adress1;

    /**
     * @var string $adress2
     *
     * @ORM\Column(name="adress2", type="string", length=255, nullable=true)
     */
    private $Adress2;

    /**
     * @var string $ZipCode
     *
     * @ORM\Column(name="zip_code", type="string", length=25, nullable=true)
     */
    private $ZipCode;

    /**
     * @var string $City
     *
     * @ORM\Column(name="city", type="string", length=45, nullable=true)
     */
    private $City;

    /**
     * @var string $Country
     *
     * @ORM\Column(name="country", type="string", length=45, nullable=true)
     */
    private $Country;

    /**
     * @var string $Tel1
     *
     * @ORM\Column(name="tel1", type="string", length=25, nullable=true)
     */
    private $Tel1;

    /**
     * @var string $Tel2
     *
     * @ORM\Column(name="tel2", type="string", length=25, nullable=true)
     */
    private $Tel2;

    /**
     * @var string $Fax
     *
     * @ORM\Column(name="fax", type="string", length=25, nullable=true)
     */
    private $Fax;

    /**
     * @var string $Mail
     *
     * @ORM\Column(name="mail", type="string", length=255, nullable=true)
     */
    private $Mail;

    /**
     * @var string $Web
     *
     * @ORM\Column(name="web", type="string", length=255, nullable=true)
     */
    private $Web;

    /**
     * @var boolean $News
     *
     * @ORM\Column(name="news", type="boolean")
     */
    private $News;
    
    /**
     * @var datetime $CreatedAt
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */    
    private $CreatedAt;

    /**
     * @var datetime $EditedAt
     *
     * @ORM\Column(name="edited_at", type="datetime", nullable=true)
     */
    private $EditedAt;

    /**
     * @var datetime $LastLogin
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    private $LastLogin;

    /**
     * @var datetime $LastLogout
     *
     * @ORM\Column(name="last_logout", type="datetime", nullable=true)
     */
    private $LastLogout;

    /**
     * @var boolean $IsValid
     *
     * @ORM\Column(name="is_valid", type="boolean")
     */
    private $IsValid;


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
     * Set Surname
     *
     * @param string $surname
     */
    public function setSurname($surname)
    {
        $this->Surname = $surname;
    }

    /**
     * Get Surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->Surname;
    }

    /**
     * Set Nickname
     *
     * @param string $nickname
     */
    public function setNickname($nickname)
    {
        $this->Nickname = $nickname;
    }

    /**
     * Get Nickname
     *
     * @return string 
     */
    public function getNickname()
    {
        return $this->Nickname;
    }

    /**
     * Set Sex
     *
     * @param boolean $sex
     */
    public function setSex($sex)
    {
        $this->Sex = $sex;
    }

    /**
     * Get Sex
     *
     * @return boolean 
     */
    public function getSex()
    {
        return $this->Sex;
    }

    /**
     * Set Adress1
     *
     * @param string $adress1
     */
    public function setAdress1($adress1)
    {
        $this->Adress1 = $adress1;
    }

    /**
     * Get Adress1
     *
     * @return string 
     */
    public function getAdress1()
    {
        return $this->Adress1;
    }

    /**
     * Set Adress2
     *
     * @param string $adress2
     */
    public function setAdress2($adress2)
    {
        $this->Adress2 = $adress2;
    }

    /**
     * Get Adress2
     *
     * @return string 
     */
    public function getAdress2()
    {
        return $this->Adress2;
    }

    /**
     * Set ZipCode
     *
     * @param string $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->ZipCode = $zipCode;
    }

    /**
     * Get ZipCode
     *
     * @return string 
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }
    
    /**
     * Set City
     *
     * @param string $city
     */
    public function setCity($city)
    {
        $this->City = $city;
    }

    /**
     * Get City
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * Set Country
     *
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->Country = $country;
    }

    /**
     * Get Country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * Set Tel1
     *
     * @param string $tel1
     */
    public function setTel1($tel1)
    {
        $this->Tel1 = $tel1;
    }

    /**
     * Get Tel1
     *
     * @return string 
     */
    public function getTel1()
    {
        return $this->Tel1;
    }

    /**
     * Set Tel2
     *
     * @param string $tel2
     */
    public function setTel2($tel2)
    {
        $this->Tel2 = $tel2;
    }

    /**
     * Get Tel2
     *
     * @return string 
     */
    public function getTel2()
    {
        return $this->Tel2;
    }

    /**
     * Set Fax
     *
     * @param string $fax1
     */
    public function setFax($fax)
    {
        $this->Fax = $fax;
    }

    /**
     * Get Fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->Fax;
    }

    /**
     * Set Mail
     *
     * @param string $mail
     */
    public function setMail($mail)
    {
        $this->Mail = $mail;
    }

    /**
     * Get Mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->Mail;
    }

    /**
     * Set Web
     *
     * @param string $web
     */
    public function setWeb($web)
    {
        $this->Web = $web;
    }

    /**
     * Get Web
     *
     * @return string 
     */
    public function getWeb()
    {
        return $this->Web;
    }

    /**
     * Set News
     *
     * @param boolean $news
     */
    public function setNews($news)
    {
        $this->News = $news;
    }

    /**
     * Get News
     *
     * @return boolean 
     */
    public function getNews()
    {
        return $this->News;
    }

    /**
     * Set CreatedAt
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->CreatedAt = $createdAt;
    }

    /**
     * Get CreatedAt
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        return $this->CreatedAt;
    }

    /**
     * Set EditedAt
     *
     * @param datetime $editedAt
     */
    public function setEditedAt($editedAt)
    {
        $this->EditedAt = $editedAt;
    }

    /**
     * Get EditedAt
     *
     * @return datetime 
     */
    public function getEditedAt()
    {
        return $this->EditedAt;
    }

    /**
     * Set LastLogin
     *
     * @param datetime $lastLogin
     */
    public function setLastLogin($lastLogin)
    {
        $this->LastLogin = $lastLogin;
    }

    /**
     * Get LastLogin
     *
     * @return datetime 
     */
    public function getLastLogin()
    {
        return $this->LastLogin;
    }

    /**
     * Set LastLogout
     *
     * @param datetime $lastLogout
     */
    public function setLastLogout($lastLogout)
    {
        $this->LastLogout = $lastLogout;
    }

    /**
     * Get LastLogout
     *
     * @return datetime 
     */
    public function getLastLogout()
    {
        return $this->LastLogout;
    }

    /**
     * Set IsValid
     *
     * @param boolean $isValid
     */
    public function setIsValid($isValid)
    {
        $this->IsValid = $isValid;
    }

    /**
     * Get IsValid
     *
     * @return boolean 
     */
    public function getIsValid()
    {
        return $this->IsValid;
    }
    
    public function __construct()
    {
        $this->user_cat = new \Doctrine\Common\Collections\ArrayCollection();
    }
}
