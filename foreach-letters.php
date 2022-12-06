<?php
$alphabet = range('A', 'Z');
foreach ($alphabet as $letter) {
    if ($letter != 'Z') {echo $letter . ' | ';}
    else { echo $letter;}}
?>