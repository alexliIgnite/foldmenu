<?php
namespace core\userBundle\Service;

use Doctrine\ORM\EntityManager;
use core\userBundle\Entity\user;
use core\toolBundle\Service\toolService;

class ingredientsService
{

    /*
     * variable for entity manager
     * */
    private $em;

    /*
     * variable for saving local error
     * */
    public $error;

    /**
     * constructor
     * @param EntityManager $entityManager
     * */
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
        $this->error = null;
    }
    
    public function createUserFromFpBrowser($UUID,$tempUID){
  		
    	$toolService = new toolService($this->em);
    	$fpid=$toolService->getfpBrowserByEncodedID($UUID);
    	$udid=$toolService->getUserToDeviceByFpid($fpid);
    	if($udid && $udid!=0){
    		return false;
    	}else{
    		$user = new user();
    		$user->setEmail('r_'.$fpid.'@existery.com');
    		$user->setPassword(md5('existery2015'));
    		$user->setFirstName($tempUID);
    		$user->setCreated(new \DateTime("now"));
    		$this->em1->persist($user);
    		$this->em1->flush();
    		$uid=$user->getId();
    		$udid=$toolService->saveUserToDevice($uid,$fpid);
    		return $uid;
    	}
    }
    
    
    
}