<?php 

class Something
{
	private $title;
	private $weight;
	private $price;
	
	function __construct($title, $weight, $price)
	{
		$this->title = $title;
		$this->weight = $weight;
		$this->price = $price;
	}

	function getPrice () {
		return $this->price;
	}
}

/*class Car extends Something {
	public $color;
	public $power;
	private $discount = 0;

	public function __construct($manufacturer, $model, $color) {
		$this->manufacturer = $manufacturer;
		$this->model = $model;
		$this->color = $color;
	}

	function __construct($title, $price) {
		parent::__construct($title, $price);
	}

	public function setDiscount ($newdiscount) {
		$this->discount = $newdiscount;
	}

	public function getPriceWithDiscount () {
		return $this->price - ($this->price/100*$this->discount);
	}
}

/*class Tv {
	public $manufacturer;
	public $model;
	private $price;
	public $diagonal;
	private $discount = 0;

	public function __construct($manufacturer, $model, $diagonal, $price) {
		$this->manufacturer = $manufacturer;
		$this->model = $model;
		$this->diagonal = $diagonal;
		$this->price = $price;
	}

	public function changePrice ($newprice) {
		$this->price = $newprice;
	}
	public function setDiscount ($newdiscount) {
		$this->discount = $newdiscount;
	}
	public function getPrice () {
		return $this->price;
	}
	public function getPriceWithDiscount () {
		return $this->price - ($this->price/100*$this->discount);
	}
}

class Pen {
	public $manufacturer;
	public $model;
	private $price;
	public $color;
	private $discount = 0;

	public function __construct($manufacturer, $model, $color, $price) {
		$this->manufacturer = $manufacturer;
		$this->model = $model;
		$this->color = $color;
		$this->price = $price;
	}

	public function changePrice ($newprice) {
		$this->price = $newprice;
	}
	public function setDiscount ($newdiscount) {
		$this->discount = $newdiscount;
	}
	public function getPrice () {
		return $this->price;
	}
	public function getPriceWithDiscount () {
		return $this->price - ($this->price/100*$this->discount);
	}
}

class Duck {
	public $kind = 'Anas';
	public $subspecies = 'Anas melleri';
	public $gender;
	public $color;
	public static $sound = 'Quack-quack!';

	public function sex_change () {
		if ($this->gender == 'male') {
			$this->gender = 'female';}
		elseif ($this->gender == 'female') {
			$this->gender == 'male';
		} else {$this->gender == 'female';}
	}	
}

class Product {
	public $category;
	public $manufacturer;
	public $model;
	public $size;
	private $price;
	private $discount = 0;

	public function __construct($manufacturer, $model, $category, $size, $price) {
		$this->manufacturer = $manufacturer;
		$this->model = $model;
		$this->category = $category;
		$this->size = $size;
		$this->price = $price;
	}

	public function changePrice ($newprice) {
		$this->price = $newprice;
	}
	public function setDiscount ($newdiscount) {
		$this->discount = $newdiscount;
	}
	public function getPrice () {
		return $this->price;
	}
	public function getPriceWithDiscount () {
		return $this->price - ($this->price/100*$this->discount);
	}
}*/
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
		Полиморфизм - наследование общих для всех последующих классов свойств и методов общего класса. Свойства дочерних классов при этом далее не наследуются другими классами.</p><p>
		Наследование - это дерево наследований, где от одного суперкласса наследуются только основные свойства методы, которые наследуются другими, общими для всех последующих классов классами. Иногда ветка наследований может быть всего одна, а иногда наследование разбивается на несколько, порой сильно отличающихся друг от друга веток.</p>
		<p><strong>2. </strong>
		Абстрактные классы - классы, по которым нельзя создать объект. Они используются в качестве шаблонов для создания дочерних классов. Абстрактный класс может содержать определенные свойства и абстрактные/неабстрактные методы, которые должны быть переопределены в дочерних классах.
		Интерфейсы - также являются абстракциями, но, в отличие от абстрактных классов, они не могут иметь свойств и могут встраиваться (имплементироваться) в классы. В класс могут быть имплементированы несколько интерфейсов</p>
	</div>
</body>
</html>