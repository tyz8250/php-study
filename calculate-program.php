<?php
//計算機のプログラム
class Calculator{
    //足し算
    public function add(float $a, float $b):float{
        return $a + $b;
    }
    //引き算
    public function subtract(float $a, float $b):float{
        return $a - $b;
    }
    //掛け算
    public function multiply(float $a, float $b):float{
        return $a * $b;
    }

    //割り算
    public function divide(float $a, float $b):float{
        if($b == 0){
            throw new Exception("0で割ることはできません");
        }
        return $a / $b;
    }
    //税込計算
    public function calculateTax(float $price,float $taxRate = 0.10):array{
        $tax = $price * $taxRate;
        $total = $price + $tax;
        return [
            'price' => $price,
            'tax' => $tax,
            'total' => $total,
        ];
    }
}
// 使用例
$calc = new Calculator();

echo "=== 計算機 ===" . PHP_EOL;
echo "10 + 5 = " . $calc->add(10, 5) . PHP_EOL;
echo "20 - 8 = " . $calc->subtract(20, 8) . PHP_EOL;
echo "7 × 3 = " . $calc->multiply(7, 3) . PHP_EOL;
echo "15 ÷ 3 = " . $calc->divide(15, 3) . PHP_EOL;

// 税込み計算
echo PHP_EOL . "=== 税込み計算 ===" . PHP_EOL;
$result = $calc->calculateTax(1000);
echo "商品価格: ¥" . number_format($result['price']) . PHP_EOL;
echo "消費税: ¥" . number_format($result['tax']) . PHP_EOL;
echo "合計: ¥" . number_format($result['total']) . PHP_EOL;

// エラーハンドリング
try {
    $calc->divide(10, 0);
} catch (Exception $e) {
    echo PHP_EOL . "エラー: " . $e->getMessage() . PHP_EOL;
}