<?php


namespace App\Matrices\Operations;


class Multiply
{

    public static function handle(array $first, array $second) :array
    {
        $firstRows = count($first);
        $firstCols = count($first[0]);
        $secondCols = count($second[0]);
        $result = [] ;
        for ($i=0; $i < $firstRows; $i++) {
            for($j=0; $j < $secondCols; $j++){
                $result[$i][$j] = 0;
                for($k=0; $k < $firstCols; $k++)
                    $result[$i][$j] += $first[$i][$k] * $second[$k][$j];
            }
        }
    return $result;
    }

}