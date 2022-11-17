<?php

namespace App\Service;

class LongConsecutiveSequenceService
{
    public static function execute(array $array): int
    {
        $consecutive = 0;
        $consecutiveHistory = 0;

        sort($array);

        for ($i = 0; $i < count($array); $i++) {
            if ($i + 1 < count($array) && ($array[$i + 1] - $array[$i]) == 1) {
                $consecutive++;
            } else {
                if ($consecutive > 0 && $consecutive >= $consecutiveHistory) {
                    $consecutiveHistory = $consecutive;
                }
                $consecutive = 0;
            }
        }

        return $consecutiveHistory + 1;
    }
}