<?php

namespace Rachan93\Statistiques\Functions;

class StandardDeviation {
    public static function calculate(array $numbers): float
    {
        if (empty($numbers)) {
            throw new \Exception("The provided array is empty.");
        }

        $mean = array_sum($numbers) / count($numbers);

        $variance = 0;
        foreach ($numbers as $num) {
            $variance += pow($num - $mean, 2);
        }
        $variance /= count($numbers);

        return sqrt($variance);
    }
}
try {
    $numbers = [10, 5, 8, 3, 7];
    $result = StandardDeviation::calculate($numbers);
    echo "The standard deviation is: $result";
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
