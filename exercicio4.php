<?php

while(true){
$n = readline(prompt: "DIgite um número para receber a tabuada:");
$i=0;

for ($i=0;$i<=100;$i++){
    echo $n*$i . "\n";

    
}

echo "Deseja calcular novamente? (s/n): ";
$continuar = readline();  

if ($continuar != 's') {
    break;
}
}