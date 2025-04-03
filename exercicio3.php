<?php
$dolar = readline(prompt : "Qual a cotação do dolar ");
$agua = readline(prompt : "Quantos metros cubicos foram gastos? ");
$valMetro = ($dolar * 0.01);
$valorPg = ($valMetro * $agua);
$valorDesconto = (($valMetro * $agua) * 0.88);

echo " o valor do metro cubico é $". $valMetro ." e com 12% de desconto fica " .$valorDesconto . " e o total a ser pago é R$". $valorPg;