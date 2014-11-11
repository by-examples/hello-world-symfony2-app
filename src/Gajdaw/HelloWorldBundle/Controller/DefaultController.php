<?php

namespace Gajdaw\HelloWorldBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/home.html")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
