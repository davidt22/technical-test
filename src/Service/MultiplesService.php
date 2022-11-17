<?php

namespace App\Service;

class MultiplesService
{
    public static function calculate(int $values): array
    {
        $result = [];
        for ($i = 1; $i <= $values; $i++) {
            if ($i % 15 === 0) {
                $result[] = 'FizzBuzz';
            } elseif ($i % 3 === 0) {
                $result[] = 'Fizz';
            } elseif ($i % 5 === 0) {
                $result[] = 'Buzz';
            } else {
                $result[] = $i;
            }
        }

        return $result;
    }
}