<?php

namespace App\Tests\Exercices;

use App\Exercices\Utils;
use PHPUnit\Framework\TestCase;

class UtilsTest extends TestCase
{
    public function testHello(): void
    {
        // Arrange
        $utils = new Utils();

        // Act
        $result = $utils->hello('Romain');

        // Assert
        $this->assertEquals("Hello Romain", $result);
    }

    public function testTotalsPairsWithArray(): void
    {
        // Arrange
        $utils = new Utils();

        // Act
        $result = $utils->totalPairs([1, 2, 3, 4, 5]);

        // Assert
        $this->assertEquals(2, $result);
    }

    public function testTotalsPairsWithEmptyArray(): void
    {
        // Arrange
        $utils = new Utils();

        // Act
        $result = $utils->totalPairs([]);

        // Assert
        $this->assertEquals(0, $result);
    }

    public function testRacineCarreWithPositiveInt(): void
    {
        // Arrange
        $utils = new Utils();

        // Act
        $result = $utils->racineCarre(4);

        // Assert
        $this->assertEquals(2, $result);
    }

    public function testRacineCarreWithNegativeInt(): void
    {
        // Arrange
        $utils = new Utils();

        // Assert
        $this->expectExceptionMessage('nb must be positive');

        // Act
        $utils->racineCarre(-1);
    }
}
