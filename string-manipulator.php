<?php
function capsMe(string $string): string
{
    return strtoupper($string);
}
function lowerMe(string $string): string
{
    return strtolower($string);
}
function upperCaseFirst(string $string): string
{
    return ucwords($string);
}
function lowerCaseFirst(string $string): string
{
    $array = explode(' ', $string);
    for ($i = 0; $i < count($array); $i++) {
        $array[$i] = lcfirst($array[$i]);
    }
    return implode(' ', $array);
}
function removeBlankSpace(string $string): string
{
    return str_replace('  ', '', $string); 
}
?>