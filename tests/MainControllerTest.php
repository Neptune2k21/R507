<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MainControllerTest extends WebTestCase
{
    public function testIndexPageIsSuccessful(): void
    {
        $client = static::createClient();
        $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Formulaire de contact');
    }

    public function testListPageIsSuccessful(): void
    {
        $client = static::createClient();
        $client->request('GET', '/liste');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Liste de contacts');
    }
}