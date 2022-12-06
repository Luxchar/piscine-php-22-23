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
    $string = str_replace('  ', '', $string); 
    $string = str_replace('   ', '', $string); 
    if($string[strlen($string)-1] == " "){
        $string = substr($string, 0, -1);
    }
    return $string;
}
?>