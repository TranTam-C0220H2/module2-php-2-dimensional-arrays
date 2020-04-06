<?php
function checkMax($array)
{
    $maxArray = $array[0];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] > $maxArray) {
            $maxArray = $array[$i];
        }
    }
    return $maxArray;
}