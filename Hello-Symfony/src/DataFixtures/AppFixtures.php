<?php

namespace App\DataFixtures;

use App\Entity\Company;
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

        $manager->flush();
    }
}
