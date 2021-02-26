<?php

require_once 'Car.php';

$car = New Car();
$car->model = "Toyota";
$car->color = "Lightgreen";
$car->horsepower = "110";
$car->production_year = "2011";

$car->show();
$car->save();
