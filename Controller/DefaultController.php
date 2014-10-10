<?php

namespace Killerwolf\JCDecauxCyclocityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
    	$api = $this->get('cyclocity.data');
    	var_dump($api->getContracts());
        return $this->render('KillerwolfJCDecauxCyclocityBundle:Default:index.html.twig', array('name' => $name));
    }
}
