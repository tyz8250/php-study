<?php
function sumArray(array $numbers) : int {
    return array_sum($numbers);
}
$numbers = [1, 2, 3, 4, 5];
print_r($numbers);
echo sumArray($numbers);
echo count($numbers);

//hash
$shoppingCart = [
    'apple' => 0.99,
    'banana' => 1.25,
    'chocolate' => 2.50,
    'orange' => 0.75,
];

print_r($shoppingCart);

//for文
function calculateSum(array $arr): int{
    $sum = 0;

    // 1からnまでのfor文
    for ($i = 0; $i < count($arr); $i++){
        $sum += $arr[$i];
    }
    return $sum;
}
$numbers = [1, 2, 3, 4, 5];
$result = calculateSum($numbers);

echo "The sum of numbers array is: " . $result;