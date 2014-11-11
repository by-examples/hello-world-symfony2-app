<?php

namespace sanchez\AfricaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/sanchez/go/from/euro/to/africa.html")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
