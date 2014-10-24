<?php

namespace tvrc\HeyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/tvrc/hey.html")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
