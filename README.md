# JCDecauxCyclocityBundle #

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/killerwolf/JCDecauxCyclocityBundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/killerwolf/JCDecauxCyclocityBundle/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/83afaaf0-b87b-44f5-bf1c-862520a3e4f3/mini.png)](https://insight.sensiolabs.com/projects/83afaaf0-b87b-44f5-bf1c-862520a3e4f3)

This is a simple bundle to use the [JCDecaux Cyclocity OpenData Rest API](https://developer.jcdecaux.com) in a Symfony2 project

## Install ##

Install with composer and enable the bundle in the kernel.


## Usage ##

First, Add your API KEY (from jcdecaux developers portal) in app/conf/config.yml

```yml
killerwolf_jc_decaux_cyclocity:
    api_key: "YOU_API_KEY"

```

Finaly use the service into your controller,

```php
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
```
