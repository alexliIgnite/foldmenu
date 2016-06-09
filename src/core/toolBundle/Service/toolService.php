<?php
namespace core\toolBundle\Service;

use Doctrine\ORM\EntityManager;
use core\toolBundle\Entity\fpBrowser;
use core\toolBundle\Entity\generalPV;
use core\toolBundle\Entity\userToDevice;

class toolService
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
     * @param $entityManager
     * */
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
        $this->error = null;
    }
    
    public function saveFpBrowser(){
    	$userBrowserProfile=$this->fingerPrintBrowser();
    	$ip=$userBrowserProfile["ip"];
    	$userAgent=$userBrowserProfile["userAgent"];
    	$device=$userBrowserProfile["device"];
    	$encodedID=md5($ip.'_'.$userAgent);
    	$existFpBrowser = $this->em->getRepository('coretoolBundle:fpBrowser')->findOneBy(array('encodedID' => $encodedID));
    	if($existFpBrowser==null){
    		$fpBrowser = new fpBrowser();
    		$fpBrowser->setIp($ip);
    		$fpBrowser->setUserAgent($userAgent);
    		$fpBrowser->setDevice($device);
    		$fpBrowser->setEncodedID($encodedID);
    		$fpBrowser->setCreated(new \DateTime("now"));
    		$this->em->persist($fpBrowser);
    		$this->em->flush();
    		return $fpBrowser->getId();
    	}else{
    		return $existFpBrowser->getID();
    	}
    }
    
    public function saveGeneralPV($UUID){
    	$purl=isset($_SERVER['REQUEST_URI'])?$_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"]:'';
    	$pageName=parse_url($purl, PHP_URL_PATH);
    	$pageQuery=parse_url ($purl, PHP_URL_QUERY);
    	$generalPV = new generalPV();
    	$generalPV->setPurl($purl);
    	$generalPV->setUUID($UUID);
    	$generalPV->setPageName($pageName);
    	$generalPV->setPageQuery($pageQuery);
    	$generalPV->setCreated(new \DateTime("now"));
    	$this->em->persist($generalPV);
    	$this->em->flush();
    	return $generalPV->getId();
    }
    
    public function saveUserToDevice($uid,$fpid){
    	$userToDevice= new userToDevice();
    	$userToDevice->setUid($uid);
    	$userToDevice->setFpid($fpid);
    	$userToDevice->setCreated(new \DateTime("now"));
    	$this->em->persist($userToDevice);
    	$this->em->flush();
    	return $userToDevice->getId();
    }
    
    public function getfpBrowserByEncodedID($encodedID){
    	$existFpBrowser = $this->em->getRepository('coretoolBundle:fpBrowser')->findOneBy(array('encodedID' => $encodedID));
    	if($existFpBrowser!=null){
    		return $existFpBrowser->getID();
    	}else{
    		return false;
    	}
    }
    
    public function getUserToDeviceByFpid($fpid){
    	$existUserToDevice= $this->em->getRepository('coretoolBundle:userToDevice')->findOneBy(array('fpid'=>$fpid));
    	if($existUserToDevice!=null){
    		return $existUserToDevice->getID();
    	}else{
    		return false;
    	}
    }
    
    public function fingerPrintBrowser()
    {
    	$remoteIP='';
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    		$remoteIP = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    		$remoteIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
    		$remoteIP = $_SERVER['REMOTE_ADDR'];
		}
		$userAgent=isset($_SERVER['HTTP_USER_AGENT'])?$_SERVER['HTTP_USER_AGENT']:'';
		$device=$this->between('(',')',$userAgent);
		$userBrowserProfile=array('ip'=>$remoteIP,'userAgent'=>$userAgent,'device'=>$device);
		return $userBrowserProfile;
    }
    
    public function after ($inthis, $inthat){
    	if (!is_bool(strpos($inthat, $inthis)))
    		return substr($inthat, strpos($inthat,$inthis)+strlen($inthis));
    }
    public function before ($inthis, $inthat){
    	return substr($inthat, 0, strpos($inthat, $inthis));
    }
    public function between ($inthis, $that, $inthat){
    	return $this->before ($that, $this->after($inthis, $inthat));
    }
}