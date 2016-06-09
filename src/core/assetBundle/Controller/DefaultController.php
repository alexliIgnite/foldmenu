<?php

namespace core\assetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('coreassetBundle:Default:index.html.twig', array('name' => $name));
    }
}
