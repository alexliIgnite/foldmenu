<?php

namespace core\userBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * user
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class user
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
     * @ORM\Column(name="email", type="string")
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string")
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string")
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string")
     */
    private $lastName;


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
     * Set email
     *
     * @param string $email
     * @return email
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return password
     */
    public function setPassword($password)
    {
    	$this->password = $password;
    
    	return $this;
    }
    
    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
    	return $this->password;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return firstName
     */
    public function setFirstName($firstName)
    {
    	$this->firstName = $firstName;
    
    	return $this;
    }
    
    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
    	return $this->firstName;
    }
    
    /**
     * Set lastName
     *
     * @param string $lastName
     * @return lastName
     */
    public function setLastName($lastName)
    {
    	$this->lastName = $lastName;
    
    	return $this;
    }
    
    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
    	return $this->lastName;
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
