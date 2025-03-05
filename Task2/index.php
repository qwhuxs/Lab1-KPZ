<?php
include('header.php');
include('animal.php');
include('enclosures.php');
include('employees.php');
include('food.php');

echo "<h1>Тестування функціональності</h1>";

$animal = new Animal();
$employee = new Employee();
$enclosure = new Enclosure();
$food = new Food();

echo "<h2>Тестування тварин:</h2>";
echo $animal->getInfo();

echo "<h2>Тестування працівників:</h2>";
echo $employee->getInfo();

echo "<h2>Тестування вольєрів:</h2>";
echo $enclosure->getInfo();

echo "<h2>Тестування кормів:</h2>";
echo $food->getInfo();

include('footer.php');
?>
