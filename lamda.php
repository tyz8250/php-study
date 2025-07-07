<?php
//ラムダ関数
function processNumbers(array $numbers, callable $callback) : array {
    return array_map($callback, $numbers);
}

function squareNumber(int $number) : int {
    return $number * $number;
}

// 使用例：
$numbers = [1, 2, 3, 4];
$squaredNumbers = processNumbers($numbers, 'squareNumber');
print_r($squaredNumbers); // Output: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 )