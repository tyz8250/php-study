<?php
//エンジンなら必ずstart()メソッドを持つ
interface Engine {
    public function start(): string;
}

class GasolineEngine implements Engine {
    public function start(): string {
        return "Starting the gasoline engine...";
    }
}

class ElectricEngine implements Engine {
    public function start(): string {
        return "Starting the electric engine...";
    }
}

function startEngine(Engine $engine): string {
    return $engine->start();
}

$gasolineEngine = new GasolineEngine();
$electricEngine = new ElectricEngine();

echo startEngine($gasolineEngine); // Output: Starting the gasoline engine...
echo startEngine($electricEngine); // Output: Starting the electric engine...