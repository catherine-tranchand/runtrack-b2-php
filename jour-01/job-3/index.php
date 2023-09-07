<?php


function my_is_multiply(int $number, int $multiple): bool {
    
    if ($multiple == 0) { // to avoid division by "0"
        return false;
    }
    return $number % $multiple === 0;
}

$number = 10;
$multiple = 0;

if (my_is_multiply($number, $multiple)) {
    echo "$number is a multiple of $multiple";
} else {
    echo "$number is not a multiple of $multiple";
}


?>