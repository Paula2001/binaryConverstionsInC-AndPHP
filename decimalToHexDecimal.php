<?php

$numbersBiggerThatNine = [
    10 => 'A',
    11 => 'B',
    12 => 'C',
    13 => 'D',
    14 => 'E',
    15 => 'F',
];

/**
 * @param int $number
 * @param $numbersBiggerThatNine
 * @return string
 *
 * @description base number / 16 recursively this has two outputs
 * 1st output base number / 16 = the recursion
 * 2nd output base number % 16 = reminder of the division and that is the hex output
 */
function convertToHexDecimal(int $number ,$numbersBiggerThatNine): string{
    $hex = $number % 16;
    $number = $number / 16;
    $hex = $hex <= 9 ? $hex : $numbersBiggerThatNine[$hex] ;
    if ($number <= 0) return '' ;
    return convertToHexDecimal($number,$numbersBiggerThatNine) . $hex;
}

echo convertToHexDecimal(1357 ,$numbersBiggerThatNine);
