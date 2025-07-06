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

//String
function greet(string $name) : string {
    return "Hello, " . $name . PHP_EOL;
}
//Example
echo greet("Alice");

//strlen():文字列の長さを返す
$string = "Hello, World!";
$length =strlen($string);
echo $length . PHP_EOL;

//substr():指定した開始位置と長さに基づいて文字列の部分文字列を返す
$string1 = "Hello, World!";
$substring = substr($string1, 7, 5);
echo $substring . PHP_EOL; 