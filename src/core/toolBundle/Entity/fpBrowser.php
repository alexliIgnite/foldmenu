<?php

namespace core\toolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * fpBrowser
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class fpBrowser
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
     * @var string
     *
     * @ORM\Column(name="ip", type="string")
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="userAgent", type="string")
     */
    private $userAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="device", type="string")
     */
    private $device;

    /**
     * @var string
     *
     * @ORM\Column(name="encodedID", type="string")
     */
    private $encodedID;


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
     * Set ip
     *
     * @param string $ip
     * @return ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set userAgent
     *
     * @param string $userAgent
     * @return userAgent
     */
    public function setUserAgent($userAgent)
    {
    	$this->userAgent = $userAgent;
    
    	return $this;
    }
    
    /**
     * Get userAgent
     *
     * @return string
     */
    public function getUserAgent()
    {
    	return $this->userAgent;
    }

    /**
     * Set device
     *
     * @param string $device
     * @return device
     */
    public function setDevice($device)
    {
    	$this->device = $device;
    
    	return $this;
    }
    
    /**
     * Get device
     *
     * @return string
     */
    public function getDevice()
    {
    	return $this->device;
    }
    
    /**
     * Set encodedID
     *
     * @param string $encodedID
     * @return encodedID
     */
    public function setEncodedID($encodedID)
    {
    	$this->encodedID = $encodedID;
    
    	return $this;
    }
    
    /**
     * Get encodedID
     *
     * @return string
     */
    public function getEncodedID()
    {
    	return $this->encodedID;
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
