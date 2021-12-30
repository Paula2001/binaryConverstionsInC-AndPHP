<?php

function convertToFloatPoint(float $q,float $decmialNumber){
    $q = ceil($q);
    return ceil($decmialNumber * pow(2,$q));
}

echo convertToFloatPoint(7.8,5.3) ;