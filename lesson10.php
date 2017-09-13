<?php

interface BirdsActions {
	public function makeSomeSound();
	public function getFly();
}

interface SomeDevice {
	public function switchOn();
	public function switchOff();
}

interface CarActions {
	public function startEngine();
	public function makeBeep();
}

interface PenActions {
	public function drawLine();
	public function writeText($text);
	public function colorChange($color);
	public function colorRandom();
	public function setBackground($color);
}

interface ProductActions {
	public function sell();
} 

######################################################################

abstract class Something {
	protected $title;
	protected $weight;
	protected $price;
	protected $discount = 0;
	protected $manufacturer;

	public function __construct ($title, $weight, $price, $manufacturer)
	{
		$this->title = $title;
		$this->weight = $weight;
		$this->price = $price;
		$this->manufacturer = $manufacturer;
	}

	public function getPrice () 
	{
		return $this->price;
	}

	public function setDiscount ($newdiscount) 
	{
		$this->discount = $newdiscount;
	}

	public function getPriceWithDiscount () 
	{
		return $this->price - ($this->price/100*$this->discount);
	}
}

######################################################################

class Car extends Something implements CarActions {
	public $model;
	public $color;
	public $power;

	public function __construct ($title, $weight, $price, $manufacturer, $model, $color, $power)
	{
		parent:: __construct ($title, $weight, $price, $manufacturer);
		$this->model = $model;
		$this->color = $color;
		$this->power = $power;
	}

	public function startEngine() {
		echo "$this->title was started! <br>";
	}

	public function makeBeep() {
		echo "$this->title: 'beep-beep!' <br>";
	}
}

$audi = new Car ('Audi A7', 1200, 10000, 'Audi', 'A7', 'black', 500);
$toyota = new Car ('Toyota Camry', 1100, 7500, 'Toyota', 'Camry', 'Red', 300);

######################################################################

class Tv extends Something implements SomeDevice {
	public $model;
	public $color;
	public $diagonal;

	public function __construct ($title, $weight, $price, $manufacturer, $model, $color, $diagonal)
	{
		parent:: __construct ($title, $weight, $price, $manufacturer);
		$this->model = $model;
		$this->color = $color;
		$this->diagonal = $diagonal;
	}

	public function switchOn() {
		echo "$this->title is switched on <br>";
	}

	public function switchOff() {
		echo "$this->title is switched off <br>";
	} 
}

$hisense = new Tv('Hisense', 10, 500, 'Hisense', 'LTDN50K2204WT', 'black', '50"');
$philips = new Tv('Philips', 9, 400, 'Philips', '43PFT4001', 'silver', '43"');

######################################################################

class Pen extends Something implements PenActions {
	public $model;
	public $color;

	public function __construct ($title, $weight, $price, $manufacturer, $model, $color) {
		parent:: __construct ($title, $weight, $price, $manufacturer);
		$this->model = $model;
		$this->color = $color;
	}

	public function colorChange($color) {
		$this->color = $newcolor;
	}

	public function colorRandom() {
		$this->color = '#'. dechex(rand(0, 15)) . dechex(rand(0, 15)) . dechex(rand(0, 15));
		return "<p style='color: $this->color'>New color: " . $this->color . '</p>';
	}

	public function drawLine() {
		echo "<p style=\"color: $this->color; background-color: $this->bgcolor\">______</p>"; 
	}

	public function writeText($text) {
		echo "<p style=\"color: $this->color; background-color: $this->bgcolor\">$text</p>"; 
	}

	public function setBackground($color) {
		$this->bgcolor = $color;
		echo 'New background color: ' . $this->bgcolor. '<br>';
	}
}

$my_own_pen = new Pen ('MyOwnPen', 3.3, 5, 'Erich Crause', 'ex5660', 'blue');
$stabilo = new Pen ('Stabilo', 4, 4, 'Stabilo', 'sx1150', 'blue');

######################################################################

class Duck extends Something implements BirdsActions {
	public $kind = 'Anas';
	public $subspecies = 'Anas melleri';
	public $gender;
	public $color;
	public $sound = 'Quack-quack!';

	public function __construct ($title, $weight, $price, $manufacturer, $color)
	{
		parent:: __construct ($title, $weight, $price, $manufacturer);
		$this->color = $color;
	}

	public function sex_change () {
		if ($this->gender == 'male') {
			$this->gender = 'female';}
		elseif ($this->gender == 'female') {
			$this->gender == 'male';
		} else {$this->gender == 'female';}
	}

	public function makeSomeSound() {
		echo $this->sound . '<br>';
	}

	public function getFly() {
		echo $this->title . ' flew up!'  . '<br>';
	}
}

$duck_one = new Duck ('Duck one', 6, 0, 'nature', 'grey');
$duck_two = new Duck ('Duck two', 5, 0, 'nature', 'brown');

######################################################################

class Product extends Something implements ProductActions {
	public $category;
	public $model;
	public $size;

	public function __construct ($title, $weight, $price, $manufacturer, $category, $model, $size)
	{
		parent:: __construct ($title, $weight, $price, $manufacturer);
		$this->category = $category;
		$this->model = $model;
		$this->size = $size;
	}

	public function sell () {
		echo "$this->title were sold successfully <br>";
	}
}

$shoes = new Product ('Nike xxx', .4, 50, 'Nike', 'shoes', 'xxx', 39);
$t_short = new Product ('Cropp xz', .1, 10, 'Cropp', 'T-short', 'xz', 'S');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Netology PHP lesson 10</title>
</head>
<body style="font-family: arial;">
	<div style="width: 90%; margin: 0 auto">
		<h2>PHP lesson 10</h2>
		<p><strong>1. </strong>
		Полиморфизм - наследование общих для всех последующих классов свойств и методов общего класса. Свойства дочерних классов при этом далее не наследуются другими классами. <br>
		Наследование - это дерево наследований, где от одного суперкласса наследуются только основные свойства методы, которые наследуются другими, общими для всех последующих классов классами. Иногда ветка наследований может быть всего одна, а иногда наследование разбивается на несколько, порой сильно отличающихся друг от друга веток.</p>
		<p><strong>2. </strong>
		Абстрактные классы - классы, по которым нельзя создать объект. Они используются в качестве шаблонов для создания дочерних классов. Абстрактный класс может содержать определенные свойства и абстрактные/неабстрактные методы, которые должны быть переопределены в дочерних классах. <br>
		Интерфейсы - также являются абстракциями, но, в отличие от абстрактных классов, они не могут иметь свойств и могут встраиваться (имплементироваться) в классы. В класс могут быть имплементированы несколько интерфейсов</p>

		<pre>
			<?php 
				print_r($audi); 
				echo '<br>';
				print_r($toyota);
				echo '<br>';
				print_r($hisense);
				echo '<br>';
				print_r($philips);
				echo '<br>';
				print_r($my_own_pen);
				echo '<br>';
				print_r($stabilo);
				echo '<br>';
				print_r($duck_one);
				echo '<br>';
				print_r($duck_two);
				echo '<br>';
				print_r($shoes);
				echo '<br>';
				print_r($t_short);
			?>
		</pre>
		<?php
			$audi->startEngine();
			$toyota->makeBeep();
			echo '<br><br>';
			$hisense->switchOn();
			$philips->switchOff();
			echo '<br><br>';
			$duck_one->makeSomeSound();
			$duck_two->getFly();
			echo '<br><br>';
			echo $my_own_pen->setBackground('#ccc');
			echo $my_own_pen->colorRandom();
			echo $my_own_pen->drawLine();
			echo $my_own_pen->writeText('LOREM');
			echo '<br><br>';
			$shoes->sell();
			$t_short->sell();
		?>
	</div>
</body>
