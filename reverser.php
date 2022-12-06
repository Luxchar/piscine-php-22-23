<?php
function reverse(string $string): string
{
    return strrev($string);
}

function isPalindrome(string $string): bool
{
    if ($string == strrev($string)) {
        return true;
    } return false;
}
?>