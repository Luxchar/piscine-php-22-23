<?php
for ($i = 2; $i < 100; $i++) {
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $isPrime = false;
            break;
        } elseif ($i == 97) {
            echo $i;
        } 
        else {
            echo $i . ", ";
            break;
        }
    }
}
?>