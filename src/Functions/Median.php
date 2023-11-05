<?php

namespace Rachan93\Statistiques\Functions;

class Median {
    public static function calculate(array $numbers): float
    {
        if (count($numbers) === 0) {
            throw new \Exception("The provided array is empty.");
        
        }elseif(count($numbers) === 1){
            throw new \Exception("The provided array should contain at least 2 values");
        
        }foreach($numbers as $value){
           
            if(is_numeric($value) !== true){
                throw new \Exception("The provided array contains non-numeric values.");
            }
        }

        sort($numbers);
        $count = count($numbers);
        $middle = floor($count / 2);

        if ($count % 2 == 0) {
            $median = ($numbers[$middle - 1] + $numbers[$middle]) / 2;
        
        } else {
             $median = $numbers[$middle];
        }

        return $median;
    }
}
