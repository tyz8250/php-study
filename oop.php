<?php
class Person{
    private string $name; //プライベートプロパティ（外部から直接アクセスできない）

    public function __construct(string $name){
        //引数で受け取った$nameをインスタンスの$nameプロパティに設定
        //$thisがないと、引数$nameと区別できない
        $this->name = $name;
    }
    public function getName(): string{
        //$thisは常にクラス定義内で利用可能な自己参照変数
        return $this->name;
    }
}

$person = new Person("John");
echo $person->getName();


//カプセル化
//メンバ変数やメソッドは private、protected、public として定義され、
//オブジェクトの状態や動作と対話するための制御されたインターフェースを提供します。

class Car {
    private string $make;
    private string $model;
    private int $year;

    public function __construct(string $make, string $model, int $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getMake(): string {
        return $this->make;
    }

    public function getModel(): string {
        return $this->model;
    }

    public function getYear(): int {
        return $this->year;
    }

    public function calculateAge(): int {
        // 車の年齢を計算するためのprivateメソッドを呼び出します
        $currentYear = date('Y');
        return $this->getAge($currentYear);
    }

    private function getAge(int $currentYear): int {
        return $currentYear - $this->year;
    }
}

$car = new Car('Toyota', 'Camry', 2022);
echo "Car Details: " . $car->getMake() . " " . $car->getModel() . " (" . $car->getYear() . ")\n";
echo "Car Age: " . $car->calculateAge() . " years"; 


//抽象化

interface Engine {
    public function start(): string; //Engineインターフェイスを実装するクラスは必ずstart()メソッドを定義
}

abstract class AbstractVehicle {
    protected string $make; //protectedは子クラスからアクセス可能

    public function __construct(string $make) {
        $this->make = $make;
    }

    abstract public function drive(): string; //抽象メソッド
}

//extends AbstractVehicle: AbstractVehicleクラスを継承
//implements Engine: Engineインターフェースを実装
class Cars extends AbstractVehicle implements Engine { 
    public function __construct(string $make) {
        parent::__construct($make); //親クラスのコンストラクタを呼び出し
    }

    public function drive(): string { //抽象メソッドの実装
        return "Driving the car...";
    }

    public function start(): string { //インターフェイスのメソッドの実装
        return "Starting the car's engine...";
    }
}

class Motorcycle extends AbstractVehicle implements Engine {
    public function __construct(string $make) {
        parent::__construct($make);
    }

    public function drive(): string {
        return "Driving the motorcycle...";
    }

    public function start(): string {
        return "Starting the motorcycle's engine...";
    }
}

$car = new Cars('Toyota');
$motorcycle = new Motorcycle('Harley');

echo $car->drive(); // Output: Driving the car...
echo $car->start(); // Output: Starting the car's engine...

echo $motorcycle->drive(); // Output: Driving the motorcycle...
echo $motorcycle->start(); // Output: Starting the motorcycle's engine...
