<?php
for ($i = 2; $i < 98; $i++) {
    for ($j = 2; $j < $i; $j++) {
        if ($i % 2 == 0) {
            $isPrime = false;
            break;
        } 
        elseif ($i == 97) { echo $i; break;} 
        else { echo $i . ", "; break; }
    }
}
?>