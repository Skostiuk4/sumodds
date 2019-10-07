<?php

  function odds_sum($sum) {
    $sum = array ([1, 7, 6, 100]);
    foreach ($sum as $value) {
      return $sum % 2 != 0;
    }
  }
    odds_sum($sum);
    echo 'Сумма непарних чисел: ' . array_sum ($sum);
