<?php
$arr = [2, 5, 3];

$result = array_map(function($n) {
  return pow($n, 2) + 3 * 2;
}, $arr);

print_r($result);

// Output:
// Array
// (
//     [0] => 10
//     [1] => 30
//     [2] => 16
// )
?>