<?php

namespace Rachan93\Statistiques\Functions;

class StandardDeviation {
    public static function calculate(array $numbers): float
    {
        if (count($numbers) === 0) {
            throw new \Exception("The provided array is empty.");
        
        }foreach($numbers as $value){
            
            if(is_numeric($value) !== true){
                 throw new \Exception("The provided array contains non-numeric values.");
             }
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
