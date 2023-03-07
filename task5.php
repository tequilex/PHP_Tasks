<?php

$bmw = [
  'model' => 'X5', 
  'speed' => 120, 
  'doors' => 5, 
  'year' => '2015'
];

$toyota = [
  'model' => 'camry', 
  'speed' => 110, 
  'doors' => 5, 
  'year' => '2012'
];

$opel = [
  'model' => 'astra', 
  'speed' => 100, 
  'doors' => 3, 
  'year' => '2010'
];

$allCars = [
  $bmw,
  $toyota,
  $opel
];

foreach ($allCars as $car) {
  echo "Car: {$car['model']} <br>" . "$car[speed] $car[doors] $car[year] <br>";
};

?>