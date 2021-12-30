<?php 
    $biggestNumber = 0;
    $number = 159;
    $binary = [];

    for ($i=1; $i < $number; $i*=2) { 
        $binary[$i] = 0;
    }

    $expo = array_keys($binary);

    for ($i= sizeof($expo) - 1; $i >= 0 ; $i--) { 
        if($biggestNumber === 0){
            $biggestNumber = $expo[$i];
            $binary[$biggestNumber] = 1;
        }else{
            if($biggestNumber + $expo[$i] > $number){
                $binary[$expo[$i]] = 0;
            }else{
                $binary[$expo[$i]] = 1;
            }
        }
    }
echo $biggestNumber;
// What's the numbers that gets 35
print_r($binary);