<?php

namespace App\Tests\Service;

use App\Service\MultiplesService;
use PHPUnit\Framework\TestCase;

class MultiplesServiceTest extends TestCase
{
    public function testItReturnsMultipleOfThree()
    {
        $value = 15;

        $result = MultiplesService::calculate($value);

        $this->assertEquals('Fizz', $result[2]);
        $this->assertEquals('Fizz', $result[5]);
        $this->assertEquals('Fizz', $result[8]);
        $this->assertEquals('Fizz', $result[11]);
    }

    public function testItReturnsMultipleOfFive()
    {
        $value = 15;

        $result = MultiplesService::calculate($value);

        $this->assertEquals('Buzz', $result[4]);
        $this->assertEquals('Buzz', $result[9]);
    }

    public function testItReturnsMultipleOfFifteen()
    {
        $value = 15;

        $result = MultiplesService::calculate($value);

        $this->assertEquals('FizzBuzz', $result[14]);
    }
}
