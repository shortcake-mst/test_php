<?php
  // 1.FizzBuzz
  for ($i = 1; $i <= 100; $i++) {
      if ($i % 15 === 0) {
          echo 'FizzBuzz';
      } elseif ($i % 3 === 0) {
          echo 'Fizz';
      } elseif ($i % 5 === 0) {
          echo 'Buzz';
      } else {
          echo $i;
      }
      echo '<br>';
  }
  echo '<br>';

  // 2.素数算出
  for ($i = 1; $i <= 10000; $i++) {
    $point = 0;
    for ($num = 1; $num <= $i; $num++) {
      if ($i % $num === 0) {
        $point += 1;
      }
    }
    if ($point === 2) {
      echo $i;
      echo '<br>';
    }
  }
  echo '<br>';

  // 3.5次元配列
  
  
?>
