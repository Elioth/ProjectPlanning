<?php

namespace OCUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OCUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
