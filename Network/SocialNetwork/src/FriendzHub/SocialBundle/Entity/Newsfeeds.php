<?php

namespace FriendzHub\SocialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newsfeeds
 *
 * @ORM\Table(name="newsfeeds")
 * @ORM\Entity
 */
class Newsfeeds
{
    /**
     * @var string
     *
     * @ORM\Column(name="newsItem", type="string", length=255, nullable=true)
     */
    private $newsitem;

    /**
     * @var string
     *
     * @ORM\Column(name="Owner", type="string", length=30, nullable=false)
     */
    private $owner;

    /**
     * @var integer
     *
     * @ORM\Column(name="UserID", type="integer", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="newsCount", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $newscount;



    /**
     * Set newsitem
     *
     * @param string $newsitem
     * @return Newsfeeds
     */
    public function setNewsitem($newsitem)
    {
        $this->newsitem = $newsitem;

        return $this;
    }

    /**
     * Get newsitem
     *
     * @return string 
     */
    public function getNewsitem()
    {
        return $this->newsitem;
    }

    /**
     * Set owner
     *
     * @param string $owner
     * @return Newsfeeds
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string 
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return Newsfeeds
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Get newscount
     *
     * @return integer 
     */
    public function getNewscount()
    {
        return $this->newscount;
    }
}
