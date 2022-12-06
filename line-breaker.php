<?php
function breakLines(string $string, int $length): string
{
    $string = str_replace('', ' ', $string);
    $array = explode(' ', $string);
    $newString = '';
    $count = 0;
    if (strlen($string) < $length) {
        return $string;
    }
    foreach ($array as $word) {
        if ($count + strlen($word) > $length) {
            substr($newString, 0, -1);
            $newString .= PHP_EOL;
            $count = 0;
        }
        $newString .= $word . ' ';
        $count += strlen($word) + 1;
    }
    return trim($newString);
}
?>
