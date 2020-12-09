<?php


namespace App\Matrices;


class NumberTOExcelColumnsConverter
{
    public static function convert( int $number): string
    {
        $columnName = "";
        while ($number > 0) {
            $modulo = ($number - 1) % 26;
            $columnName = chr(65 + $modulo) . $columnName;
            $number = (int)(($number - $modulo) / 26);
        }
        return $columnName;
    }
}