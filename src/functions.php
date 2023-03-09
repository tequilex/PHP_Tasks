<?php

///Task 1

function task1(array $string, $boolean = true) {
  if ($boolean) {
    return implode(' ', $string);
  } else {
      foreach ($string as $arr) {
        echo '<p>';
        echo $arr . "<br>";
        echo '</p>';
      }
  }
};

///Task 2

function calcEverything($operator, ...$args) {

if ($operator == '+') {
  $result = array_sum($args);

} elseif ($operator == '-') {
  $result = array_shift($args) - array_sum($args);

} elseif ($operator == '*') {
  $result = array_product($args);

} elseif ($operator == '/') {
  $result = array_shift($args);
  foreach ($args as $arg) {
    $result = $result / $arg;
  }
}

return implode($operator, $args) . "=" . $result;
};

///Task 3

function task3($a, $b) {
  if (!is_int($a)) {
    trigger_error('$a не число');
    return false;
  }
  if (!is_int($b)) {
    trigger_error('$b не число');
    return false;
  }
  
  $result = '<table border="1">';
    for ($i = 1; $i <= $a; $i++) {
      $result .= '<tr>';
      for ($o = 1; $o <= $b; $o++) {
        $result .= '<td>';
        $result .= $i * $o;
        $result .= '</td>';
      }
      $result .= '</tr>';
    }
    $result .= '</table>';
    echo $result;
}


///Task 4

function task4() {
  date_default_timezone_set('Europe/Moscow');
  $date = date('Y-m-d H:i:s');
  echo $date;
  echo '<br>';
  $time = strtotime($date);
  echo $time;
  echo '<br>';
}


///Task 5

function task5() {
  $firstStr = 'Карл у Клары украл Кораллы';
  $secondStr = 'Две бутылки лимонада';
  $firstResult = str_replace('К', '', $firstStr);
  $secondResult = str_replace('Две', 'Три', $secondStr);
  echo $firstResult;
  echo '<br>';
  echo $secondResult;
}

///Task 6

function task6($file) {
  file_put_contents('text.txt', 'Hello again!');
  $fp = fopen($file, 'r');

  $str = '';

  while (!feof($fp)) {
    $str .= fgets($fp, 1024);
  }
  echo $str;
}
?>