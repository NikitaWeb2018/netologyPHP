<?php

class Car
{
    public $manufacturer;
    public $model;
    public $color;
    public $price;

    public function __construct($manufacturer, $model, $color, $price)
    {
        $this->manufacturer = $manufacturer;
        $this->model = $model;
        $this->color = $color;
        $this->price = $price;
    }

    public function changeColor($color)
    {
        $this->color = $color;
    }
}

class Pen
{
    public $name;
    public $color;
    private $price;

    public function __construct($name, $color, $price)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }

    public function gift () {
        return $this->price = 0;
    }
}

class TV
{
    public $manufacturer;
    public $model;
    private $price;
    public $discount;

    public function __construct($manufacturer, $model, $price, $discount)
    {
        $this->manufacturer = $manufacturer;
        $this->model = $model;
        $this->price = $price;
        $this->discount = $discount;
    }

    public function getPrice()
    {
        if($this->discount) {
            return round($this->price - ($this->price * $this->discount / 100));
        } else {
            return $this->price;
        }
    }

}

class Product
{
    public $name;
    private $price;
    public $category;

    public function  __construct($name, $price, $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

}

class Duck
{
    public static $breed;

    public static function selfMethod()
    {
        echo self::$breed = 'Anas';
    }


}

$myCar = new Car('BMW', 'Series-3', 'White', '60.000$');
$wantCar = new Car('Audi', 'A7', 'Black', '100.000$');
$wantCar->changeColor('Grey');

//echo '<pre>';
//print_r($myCar);
//print_r($wantCar);
//echo '</pre>';

$simplePen = new Pen('Erich Krause', 'Blue', '1$');
$expensivePen = new Pen('Parker', 'Black', '100$');
$expensivePen->gift();

//echo '<pre>';
//print_r($simplePen);
//print_r($expensivePen);
//echo '</pre>';

$bedtoomTV = new TV('LG', '55 LJ 540 V', 700, 10);
echo "TV price:" .$bedtoomTV->getPrice();
$bathroomTV = new TV('Samsung', 'UE-43 MU 6103 UX', 200, 0);

//echo '<pre>';
//print_r($bedtoomTV);
//print_r($bathroomTV);
//echo '</pre>';

$iphone = new Product('iPhone 7 Plus', '1000$', 'Mobile phone');
$samsung = new Product('Samsung Galaxy S7', '1000$', 'Mobile phone');

$duck = new Duck();
$duck::selfMethod();
$anotherDuck = new Duck();

//echo '<pre>';
//print_r($duck);
//echo '</pre>';

?>
