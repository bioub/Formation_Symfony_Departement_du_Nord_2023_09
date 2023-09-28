<?php

namespace App\Tests\Exercices;

use App\Exercices\Calc;
use PHPUnit\Framework\TestCase;

class CalcTest extends TestCase
{
    public function testSumWithPositiveIntegers()
    {
        // Arrange
        $calc = new Calc();

        // Act
        $result = $calc->sum(1, 2);

        // Assert
        $this->assertEquals(3, $result);
    }
}