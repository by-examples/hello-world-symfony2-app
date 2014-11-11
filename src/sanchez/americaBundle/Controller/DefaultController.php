<?php

namespace sanchez\americaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/sanchez/brand/new/final/america.html")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
