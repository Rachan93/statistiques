<?php

namespace Rachan93\Statistiques\Functions;

class Average {
    public static function calculate(array $numbers): float
    {
        if (empty($numbers)) {
            throw new \Exception("The provided array is empty.");
        }

        $sum = array_sum($numbers);
        $count = count($numbers);

        return $sum / $count;
    }
}

try {
    $numbers = []; 
    $result = Average::calculate($numbers);
    echo "The average is: $result";
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
