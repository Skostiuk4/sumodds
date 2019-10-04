<?php
  function sum($sum) {
  $odd = array_filter($sum = ([1, 7, 6, 100]), function ($val) {
    return $val % 2 != 0;
  });

  foreach ($odd as $val) {
    echo $val . '<br />';
  }
  }
  sum($sum);
  echo 'Сумма нечетных чисел: '.array_sum($odd);