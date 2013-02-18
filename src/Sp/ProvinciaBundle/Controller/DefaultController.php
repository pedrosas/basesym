<?php

namespace Sp\ProvinciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ProvinciaBundle:Default:index.html.twig', array('name' => $name));
    }
}
