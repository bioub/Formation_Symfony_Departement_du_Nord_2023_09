<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HelloControllerTest extends WebTestCase
{
    public function testHelloworld(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/hello/Romain');

        $this->assertResponseIsSuccessful();
        $this->assertResponseHeaderSame('Content-type', "application/json");
        $this->assertEquals('{"hello":"Romain"}', $client->getResponse()->getContent());
    }
}
