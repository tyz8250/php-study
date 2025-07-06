<?php
//int
function addInteger(int $a, int $b): int{
    return $a + $b;
}
echo addInteger(5, 7)."\n";

//float
function divideFloats(float $c, float $d): float{
    return $c / $d;
}
echo divideFloats(10.5, 2.5)."\n";

//bool
function isPositive(int $number) : bool {
    return $number >0;
}
echo isPositive(10)."\n"; // 1と出力
echo isPositive(-5)."\n"; // 何も表示されない

//if文
function checkNumber(int $number1) : string {
    if ($number1 > 0) {
        return "$number1 is a positive number.";
    } elseif ($number1 < 0) {
        return "$number1 is a negative number.";
    } else {
        return "The number is zero.";
    }
}
// Example
echo checkNumber(5) . PHP_EOL; // Output: "5 is a positive number."
echo checkNumber(-2) . PHP_EOL; // Output: "-2 is a negative number."
echo checkNumber(0) . PHP_EOL; // Output: "The number is zero."
//PHP_EOL is equivalent to //n