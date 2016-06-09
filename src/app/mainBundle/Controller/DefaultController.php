<?php

namespace app\mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('appmainBundle:Default:index.html.twig');
    }
}
