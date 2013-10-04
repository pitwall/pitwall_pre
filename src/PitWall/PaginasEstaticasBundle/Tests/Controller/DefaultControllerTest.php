<?php

namespace PitWall\PaginasEstaticasBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase {

    public function testAyuda() {
        $client = static::createClient();

        $crawler = $client->request('GET', '/sitios/ayuda');

        $this->assertTrue($crawler->filter('html:contains("ayuda")')->count() > 0);
    }

    public function testContacto() {
        $client = static::createClient();

        $crawler = $client->request('GET', '/sitios/contacto');

        $this->assertTrue($crawler->filter('html:contains("contacto")')->count() > 0);
    }

    public function testPrivacidad() {
        $client = static::createClient();

        $crawler = $client->request('GET', '/sitios/privacidad');

        $this->assertTrue($crawler->filter('html:contains("privacidad")')->count() > 0);
    }

    public function testAbout() {
        $client = static::createClient();

        $crawler = $client->request('GET', '/sitios/about');

        $this->assertTrue($crawler->filter('html:contains("about")')->count() > 0);
    }
}
