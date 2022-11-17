<?php

namespace App\Tests\Service;

use App\Service\LongConsecutiveSequenceService;
use PHPUnit\Framework\TestCase;

class LongConsecutiveSequenceServiceTest extends TestCase
{
    public function testItReturnsTheLongestConsecutiveSequenceSimple()
    {
        $data = [100, 4, 200, 1, 3, 2];

        $result = LongConsecutiveSequenceService::execute($data);

        $this->assertEquals(4, $result);
    }

    public function testItReturnsTheLongestConsecutiveSequenceWhenItIsInSecondStep()
    {
        $data = [100, 4, 200, 1, 3, 2, 201, 204, 203, 202];

        $result = LongConsecutiveSequenceService::execute($data);

        $this->assertEquals(5, $result);
    }

    public function testItReturnsOneWhenItHasNotConsecutiveSequence()
    {
        $data = [100, 4, 200, 1, 25, 16, 90];

        $result = LongConsecutiveSequenceService::execute($data);

        $this->assertEquals(1, $result);
    }
}