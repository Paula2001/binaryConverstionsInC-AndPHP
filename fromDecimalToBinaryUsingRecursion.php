<?php
function convert(int $number): string{
    $binaryNumber = $number % 2;
    $number = $number / 2 ;
    if($number <= 0) return '';
    return convert($number). $binaryNumber;
}
echo convert(58) ;