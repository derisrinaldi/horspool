<?php

namespace Rinaldi\Horspool;

class Horspool {

    public static function search($pattern,$shiftTable,$text)
    {
        # code...
        $textLength = strlen($text);
        $patternLength = strlen($pattern);
        
        $index = $patternLength - 1;
        while ($index < $textLength) {
            $i = 0; // menghitung jumlah karakter cocok
            while ($i < $patternLength && $pattern[$patternLength - 1 - $i] == $text[$index - $i]) {
                $i++;
            }
            if ($i == $patternLength) {
                return $index - $patternLength + 1; // Pola ditemukan
            } else {
                $index += $shiftTable[ord($text[$index])]; //shifting
            }
        }
        
        return -1; // Pola tidak ditemukan
    }

}