<?php
for ($i = 2; $i < 100; $i++) {
    $isPrime = true;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime && $i <97) {echo $i . ', ';} 
    else if ($isPrime && $i == 97) {echo $i;}
}
?>
