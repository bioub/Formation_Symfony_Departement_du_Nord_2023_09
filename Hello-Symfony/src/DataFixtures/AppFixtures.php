<?php

namespace App\DataFixtures;

use App\Entity\Company;
use App\Entity\Contact;
use App\Entity\Tag;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $romain = new User();
        $romain->setEmail('romain.bohdanowicz@formation.tech')->setPassword('$2y$13$fhCeXg88gcrtqOmcqdv8ceN3s51se4/IP9S52VPAjqzMwAqKhB9/a');
        $manager->persist($romain);

        $apple = new Company();
        $apple->setName('Apple')->setCity('Cupertino');
        $manager->persist($apple);

        $microsoft = new Company();
        $microsoft->setName('Microsoft')->setCity('Seattle');
        $manager->persist($microsoft);

        $amis = new Tag();
        $amis->setName('Amis');
        $manager->persist($amis);

        $collegues = new Tag();
        $collegues->setName('Collègues');
        $manager->persist($collegues);

        $steve = new Contact();
        $steve->setFirstname('Steve')->setLastname('Jobs')->setEmail('sjobs@apple.com')->setCompany($apple);
        $manager->persist($steve);

        $tim = new Contact();
        $tim->setFirstname('Tim')->setLastname('Cook')->setPhone('+1 234 353 3435')->setCompany($apple)->addTag($collegues);
        $manager->persist($tim);

        $bill = new Contact();
        $bill->setFirstname('Bill')->setLastname('Gates')->setEmail('bill@microsoft.com')->setCompany($microsoft)->addTag($collegues)->addTag($amis);
        $manager->persist($bill);

        $toto = new Contact();
        $toto->setFirstname('Toto')->setLastname('Titi')->addTag($amis);
        $manager->persist($toto);

        $manager->flush();
    }
}
