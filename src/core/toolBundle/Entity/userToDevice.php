<?php

namespace core\toolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * userToDevice
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class userToDevice
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer")
     */
    private $uid;

    /**
     * @var integer
     *
     * @ORM\Column(name="fpid", type="integer")
     */
    private $fpid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;


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
     * Set uid
     *
     * @param integer $uid
     * @return integer
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return integer 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set fpid
     *
     * @param integer $fpid
     * @return post
     */
    public function setFpid($fpid)
    {
        $this->fpid = $fpid;

        return $this;
    }

    /**
     * Get fpid
     *
     * @return integer 
     */
    public function getFpid()
    {
        return $this->fpid;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return post
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }
}
