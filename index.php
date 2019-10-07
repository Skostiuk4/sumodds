<?php

  function odds_sum($sum) {
    $odd = 0;
    foreach ($sum as $value) {
      if ($value % 2 != 0) {
        $odd += $value;
      }
    }
    return $odd;
  }
    $sum = [1, 7, 5, 6, 100];
    echo 'Сумма непарних чисел: ' . odds_sum ($sum);
