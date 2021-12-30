<?php
/**
 * @param int $number
 * @return string
 *
 * Description :( base number / 2 ) two outputs // need to be updated
 * 1st output is the division result 9 / 2 = 4.5 to 4
 * 2nd output is the reminder 9 % 2 = 1 <-------that's the first binary number
 * and we do recursive calls to get the final result
 */
function convert(int $number): string{
    $binaryNumber = $number % 2 === 0 ? 1 : 0;
    $number = $number / 2 ;
    if($number <= 0) return '0';
    return convert($number). $binaryNumber;
}
echo convert(12) ;
