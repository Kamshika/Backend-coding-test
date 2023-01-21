<?php

$array = [2, 3, 1, 2, 3];
$output = [];
foreach ($array as $key => $value) {
    $output[$value] += 1;
}

$array = [];
foreach ($output as $key => $value) {
    if($value > 1)
    $array[] = $key;
}

echo '<pre>';
print_r($array);

?>