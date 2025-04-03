<?php
$salMin = readline("Qual o Salário Mínimo: \n");
$salHora = ($salarioMin * 0.125);
$ValHora = readline("Quantas Horas Você Trabalhou: \n");
$salario = ($Valhora * $salarioHora);
$valeTransporte = ($salario * 0.06);
$valeAlimentacao = ($salario * 0.1);
$salarioLiquido = (($salario - $valeTransporte) - $valeAlimentacao);
echo "Salário Líquido: " . $salarioLiquido . "\n
Horas Trabalhadas: " . $Valhora . "\n
Vale Transporte: " . $valeTransporte . "\n
Vale Alimentação: ". $valeAlimentacao;
?>
