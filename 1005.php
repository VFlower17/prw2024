<?php
    $A = doubleval(readline());
    $B = doubleval(readline());
    $MEDIA = ($A*3.5+$B*7.5)/11;
    echo "MEDIA = ".number_format($MEDIA, 5, '.', '')."\n";
?>