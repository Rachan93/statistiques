<?php

namespace Rachan93\Statistiques\Functions;

class Average {
    public static function calculate(array $numbers): float
    {
        if (count($numbers) === 0) {
            throw new \Exception("The provided array is empty.");
        
        }foreach($numbers as $value){
            
            $numeric = ['integer', 'double'];
            
            if(!in_array(gettype($value),$numeric)){ //j'avais oublié l'existence de is_numeric, mais bon on s'en tape :)
                throw new \Exception("The provided array contains non-numeric values.");
            }
        }
        

        $sum = array_sum($numbers);
        $count = count($numbers);

        return $sum / $count;
    }
}

