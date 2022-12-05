<?php
$nbrRicard = 0;
do {
    $nbrRicard++;
    echo "Come on ricard number $nbrRicard";
    if ($nbrRicard == 3) {
        echo "I'll have to stop soon!";
    } elseif ($nbrRicard == 5) {
        echo "I am no longer very fresh ...";
    } elseif ($nbrRicard == 7) {
        break;
    }
} while ($nbrRicard < 10);
?>

