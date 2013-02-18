<?php

namespace Sp\ZonaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ZonaBundle:Default:index.html.twig', array('name' => $name));
    }
}
