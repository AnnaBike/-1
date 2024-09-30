<?php
$userNumber = [1, 6, 2, 3, 4, 5];
$userFloat = [3, 10, 4, 5, 6, 7];

$combinedArray = array_merge($userNumber, $userFloat);

$uniqueArray = array_unique($combinedArray);

sort($uniqueArray);

foreach ($uniqueArray as $item) {
    echo $item . ' ';
}
?>