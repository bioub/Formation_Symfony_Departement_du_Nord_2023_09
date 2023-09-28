<?php

namespace App\Tests\Entity;

use App\Entity\CompteBancaire;
use PHPUnit\Framework\TestCase;

class CompteBancaireTest extends TestCase
{
    public function testCrediterDebiter(): void
    {
        $compte = new CompteBancaire();

        $this->assertEquals(0, $compte->getSolde());

        $compte->crediter(4000);

        $this->assertEquals(4000, $compte->getSolde());

        $compte->debiter(500);

        $this->assertEquals(3500, $compte->getSolde());
    }
}
