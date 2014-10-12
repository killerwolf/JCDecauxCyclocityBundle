<?php

namespace Killerwolf\JCDecauxCyclocityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
    	$api = $this->get('cyclocity.data');

        return $this->render(
            'KillerwolfJCDecauxCyclocityBundle:Default:index.html.twig', 
            [
                'stations' => $api->getStationsByContract( 'Paris' )
            ]
        );
    }
}
