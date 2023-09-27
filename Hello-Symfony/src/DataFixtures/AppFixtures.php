<?php

namespace App\DataFixtures;

use App\Entity\Company;
use App\Entity\Contact;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $apple = new Company();
        $apple->setName('Apple')->setCity('Cupertino');
        $manager->persist($apple);

        $microsoft = new Company();
        $microsoft->setName('Microsoft')->setCity('Seattle');
        $manager->persist($microsoft);

        $steve = new Contact();
        $steve->setFirstname('Steve')->setLastname('Jobs')->setEmail('sjobs@apple.com')->setCompany($apple);
        $manager->persist($steve);

        $tim = new Contact();
        $tim->setFirstname('Tim')->setLastname('Cook')->setPhone('+1 234 353 3435')->setCompany($apple);
        $manager->persist($tim);

        $bill = new Contact();
        $bill->setFirstname('Bill')->setLastname('Gates')->setEmail('bill@microsoft.com')->setCompany($microsoft);
        $manager->persist($bill);

        $toto = new Contact();
        $toto->setFirstname('Toto')->setLastname('Titi');
        $manager->persist($toto);

        $manager->flush();
    }
}
