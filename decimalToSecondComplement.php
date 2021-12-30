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
function binaryAddition(int $binaryNumber, int $carryOn ,int $plus): array{
    $result = $binaryNumber + $plus + $carryOn;
    if($result === 2) { // 1 1 rule
        $carryOn = 1;
        $result = 0;
    }elseif ($result >= 3) { // 1 1 1 rule
        $carryOn = 1;
        $result = 1;
    }else{
        $carryOn = 0;
    }

    return [
        'carry_on' => $carryOn,
        'result' => $result
    ];
}

function convert(int $number ,int $carryOn = 0,$firstTime = false): string{
    $binaryNumber = $number % 2 === 0 ? 1 : 0;
    $resultOfAddition = binaryAddition($binaryNumber ,$carryOn ,(!$firstTime)? 1 : 0 );
    $binaryNumber = $resultOfAddition['result'];
    $number = $number / 2 ;
    if($number <= 0) return '1';
    return convert($number ,$resultOfAddition['carry_on'], true). $binaryNumber;
}
echo convert(12) ;
