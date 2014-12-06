<?php

namespace Gajdaw\BDDTutorial\GeographyBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OceansControllerTest extends WebTestCase
{
    public function testPaficic()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/geography/oceans/paficic');
    }

}
