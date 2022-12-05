<!-- Create a variable named $nbrRicard.

Using the do {...} while () statement, write a script that will increment the number of ricard drunk while respecting the following conditions:

    Before each ricard drunk, display : Come on ricard number + the number of the current ricard
    At the 3rd ricard, display: I'll have to stop soon!
    At the 5th ricard, display: I am no longer very fresh ...
    At the 7th ricard, stop the loop.

Warning ! Don't forget to skip a line at the end of each echo.
 -->

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

