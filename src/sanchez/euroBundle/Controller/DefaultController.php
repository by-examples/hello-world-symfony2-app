<?php

namespace sanchez\euroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/sanchez/new/euro.html")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
