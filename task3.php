<?php

$age = mt_rand(1, 100);

if ($age >= 18 && $age <= 65) {
  echo 'Вам еще работать и работать <br>';
} elseif ($age > 65) {
  echo 'Вам пора на пенсию <br>';
} elseif ($age >= 1 && $age <= 17) {
  echo 'Вам ещё рано работать <br>';
} else {
  echo 'Неизвестный возраст <br>';
};

?>