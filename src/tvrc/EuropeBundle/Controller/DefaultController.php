<?php

namespace tvrc\EuropeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/tvrc/new/europe.html")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
