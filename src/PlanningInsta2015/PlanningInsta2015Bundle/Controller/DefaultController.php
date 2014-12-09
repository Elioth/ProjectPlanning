<?php

namespace PlanningInsta2015\PlanningInsta2015Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PlanningInsta2015Bundle:Default:test.html.twig');
    }


 public function idAction($id)
 	{
 		$ids=$this->getDoctrine()
 				 ->getRepository('PlanningInsta2015Bundle:User')
 				 ->find($id);
 		if(!$ids){
 			throw $this->createNotFoundException('aucun produit toruver');
 		}

 		return $this->render('PlanningInsta2015Bundle:Default:index.html.twig',array('id'=>$ids->getLogin(),));

 	}


 	 public function welcomeAction()
    {
        return $this->render('PlanningInsta2015Bundle:Default:welcome.html.twig');
    }

}
