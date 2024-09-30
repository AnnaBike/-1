<?php
function fibonacci_recursive($n) {
    if ($n <= 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return fibonacci_recursive($n - 1) + fibonacci_recursive($n - 2);
    }
}

$n = 10;
$fibonacci = [];

for ($i = 0; $i < $n; $i++) {
    $fibonacci[] = fibonacci_recursive($i);
}

echo implode(", ", $fibonacci);
?>