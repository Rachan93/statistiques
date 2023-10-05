<?php

namespace Rachan93\Statistiques\Functions;

class Variance {
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

        return $variance;
    }
}
try {
    $numbers = [10, 5, 8, 3, 7];
    $result = Variance::calculate($numbers);
    echo "The variance is: $result";
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
