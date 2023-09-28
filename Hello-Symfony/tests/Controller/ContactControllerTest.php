<?php

namespace App\Tests\Controller;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContactControllerTest extends WebTestCase
{
    public function testIndexWithMock(): void
    {
        $client = static::createClient();

        // Goal : remplacer ContactRepository par une classe
        // générée dans le test qui contient une méthode findAllWithCompaniesDQL
        // défini dans le test (qui retourner des données définies également
        // dans le test et non pas dans la base)
        $mock = $this->createMock(ContactRepository::class);
        $mock->method('findAllWithCompaniesDQL')->willReturn([
            (new Contact())->setId(1)->setFirstname('Toto')->setLastname('Titi'),
            (new Contact())->setId(2)->setFirstname('Tata')->setLastname('Tutu'),
        ]);

        self::getContainer()->set(ContactRepository::class, $mock);

        $crawler = $client->request('GET', '/contacts');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('body', 'Tata');
    }

    public function testShowWithMock(): void
    {
        // Exercice
        // En s'inspirant du test précédent
        // Créer un test functionnel de la méthode avec un mock de ContactRepository
        // et une fausse méthode find

        $client = static::createClient();

        $mock = $this->createMock(ContactRepository::class);
        $mock->expects(self::once())->method('find')->willReturn(
            (new Contact())->setId(1)->setFirstname('Toto')->setLastname('Titi')
        );

        self::getContainer()->set(ContactRepository::class, $mock);

        $crawler = $client->request('GET', '/contacts/1');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('body', 'Toto');
    }
}
