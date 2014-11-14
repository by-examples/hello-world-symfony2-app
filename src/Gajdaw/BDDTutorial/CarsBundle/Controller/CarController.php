<?php

namespace Gajdaw\BDDTutorial\CarsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class CarController extends Controller
{
    /**
     * @Route("/cars/citroen/c4.html/")
     * @Template()
     */
    public function C4Action()
    {
        return array();
    }
}
