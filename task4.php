<?php

$day = mt_rand(1, 10);

switch ($day) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:
    echo 'Это рабочий день';
    break;
  case 6:  
  case 7:  
    echo 'Это выходной день';
    break;
  default:
    echo 'Это неизвестный день';
    break;
}

?>