<?php
function addNumebers($num1, $num2){
    return $num1 + $num2;
}

echo addNumebers(5, 10);

// 地球の重力加速度 9.80665
const GRAVITY_ON_EARTH = 9.80665;

// 地球をデフォルト
function calculateFreeFallTime($heightMeters, $planet = 'Earth', $gravityOnPlanet = GRAVITY_ON_EARTH) {
    $freeFallTime = sqrt(2 * $heightMeters / $gravityOnPlanet);
    echo "On " . $planet . ", an object falling from a height of " . $heightMeters . " takes approximately " . $freeFallTime . " seconds to reach the ground.\n";
}

// 高さ50m
$height = 50;

calculateFreeFallTime($height);
calculateFreeFallTime($height, 'Mars', 3.72076);
calculateFreeFallTime($height, 'Jupiter', 24.79);
calculateFreeFallTime($height, 'Pluto',  0.62);