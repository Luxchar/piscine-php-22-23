<?php
$month = date('n');
$months = array(1 => 'January',2 => 'February',3 => 'March',4 => 'April',5 => 'May',6 => 'June',7 => 'July',8 => 'August',9 => 'September',10 => 'October',11 => 'November',12 => 'December');
for ($i = 1; $i <= 12; $i++) {
    if ($month == $i) {
        echo "We are in the month of " . $months[$i];
    }
}
?>