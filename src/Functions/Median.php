<?php

namespace Rachan93\Statistiques\Functions;

class Median {
    public static function calculate(array $numbers): float
    {
        if (empty($numbers)) {
            throw new \Exception("The provided array is empty.");
        }

        sort($numbers);
        $count = count($numbers);
        $middle = floor($count / 2);

        if ($count % 2 == 0) {
            // If the count is even, take the average of the two middle numbers
            $median = ($numbers[$middle - 1] + $numbers[$middle]) / 2;
        } else {
            // If the count is odd, take the middle number
            $median = $numbers[$middle];
        }

        return $median;
    }
}

try {
    $numbers = [10, 5, 8, 3, 7];
    $result = Median::calculate($numbers);
    echo "The median is: $result";
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
