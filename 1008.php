<?php
    $employeenumber = intval(readline());
    $hourworked = intval(readline());
    $valueperhour = doubleval(readline());
    $salary = $hourworked * $valueperhour;
    echo "NUMBER = ".$employeenumber."\n";
    echo "SALARY = U$ ".number_format($salary, 2, '.', '')."\n";
?>