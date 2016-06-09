<?php

namespace core\userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('coreuserBundle:Default:index.html.twig', array('name' => $name));
    }
}
