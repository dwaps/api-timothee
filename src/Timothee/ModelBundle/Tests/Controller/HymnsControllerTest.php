<?php

namespace Timothee\ModelBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HymnsControllerTest extends WebTestCase
{
    public function testGethymns()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hymns');
    }

    public function testGethymn()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hymns/:id');
    }

}
