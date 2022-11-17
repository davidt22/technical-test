<?php

namespace App\Tests\Service;

use App\Service\TopFrequentElementsService;
use PHPUnit\Framework\TestCase;

class TopFrequentElementsServiceTest extends TestCase
{
    public function testItReturnsTheMostFrequentElement()
    {
        $data = [1,1,1,2,2,3];
        $value = 1;

        $result = TopFrequentElementsService::execute($data, $value);

        $this->assertCount(1, $result);
        $this->assertEquals(1, $result[0]);
    }

    public function testItReturnsTheNMostFrequentElements()
    {
        $data = [1,1,1,2,2,3];
        $value = 2;

        $result = TopFrequentElementsService::execute($data, $value);

        $this->assertCount(2, $result);
        $this->assertEquals(1, $result[0]);
        $this->assertEquals(2, $result[1]);
    }

    public function testItReturnsTheFrequentElementsGivenLessElementsThatItCounts()
    {
        $data = [1,1,1,2,2,3];
        $value = 4;

        $result = TopFrequentElementsService::execute($data, $value);

        $this->assertCount(3, $result);
        $this->assertEquals(1, $result[0]);
        $this->assertEquals(2, $result[1]);
        $this->assertEquals(3, $result[2]);
        $this->assertLessThanOrEqual($value, count($result));
    }
}