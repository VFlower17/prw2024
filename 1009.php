<?php
$sellername = readline();
$fixedsalary = floatval(readline());
$totalsalespermonth = floatval(readline());
//seller gets 15% commission on total sales. Inform total to receive by the end of the month.
$commission = $totalsalespermonth * 0.15;
$totaltoreceive = $fixedsalary + $commission;
echo "TOTAL = R$ ".number_format($totaltoreceive, 2, '.', '')."\n";
?>