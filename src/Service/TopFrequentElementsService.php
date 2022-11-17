<?php

namespace App\Service;

class TopFrequentElementsService
{
    public static function execute(array $elements, int $numberElements): array
    {
        $values = array_count_values($elements);

        arsort($values);

        return array_slice(array_keys($values), 0, $numberElements, true);
    }
}