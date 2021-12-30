<?php
/**
 * @param float $q
 * @param float $decimalNumber
 * @return false|float
 *
 * @description The basic formula (Decimal number) * 2^(Q)
 * Example : Decimal number : 10.23 ,Q = 2.3
 * 10.23 * 2^(3) <---- 3 because we ceil 2.3
 */
function convertToFloatPoint(float $q,float $decimalNumber){
    $q = ceil($q);
    return ceil($decimalNumber * pow(2,$q));
}

echo convertToFloatPoint(7.8,5.3) ;
