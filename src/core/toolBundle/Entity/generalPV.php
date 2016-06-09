<?php

namespace core\toolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * generalPV
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class generalPV
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
     * @ORM\Column(name="purl", type="string")
     */
    private $purl;

    /**
     * @var string
     *
     * @ORM\Column(name="UUID", type="string")
     */
    private $UUID;

    /**
     * @var string
     *
     * @ORM\Column(name="pageName", type="string")
     */
    private $pageName;

    /**
     * @var string
     *
     * @ORM\Column(name="pageQuery", type="string")
     */
    private $pageQuery;

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
     * Set purl
     *
     * @param string $purl
     * @return purl
     */
    public function setPurl($purl)
    {
        $this->purl = $purl;

        return $this;
    }

    /**
     * Get purl
     *
     * @return string 
     */
    public function getPurl()
    {
        return $this->purl;
    }

    /**
     * Set UUID
     *
     * @param string $UUID
     * @return UUID
     */
    public function setUUID($UUID)
    {
    	$this->UUID = $UUID;
    
    	return $this;
    }
    
    /**
     * Get UUID
     *
     * @return string
     */
    public function getUUID()
    {
    	return $this->UUID;
    }

    /**
     * Set pageName
     *
     * @param string $pageName
     * @return pageName
     */
    public function setPageName($pageName)
    {
    	$this->pageName = $pageName;
    
    	return $this;
    }
    
    /**
     * Get pageName
     *
     * @return string
     */
    public function getPageName()
    {
    	return $this->pageName;
    }
    
    /**
     * Set pageQuery
     *
     * @param string $pageQuery
     * @return pageQuery
     */
    public function setPageQuery($pageQuery)
    {
    	$this->pageQuery = $pageQuery;
    
    	return $this;
    }
    
    /**
     * Get pageQuery
     *
     * @return string
     */
    public function getPageQuery()
    {
    	return $this->pageQuery;
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
