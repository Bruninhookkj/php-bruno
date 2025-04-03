<?php 
while(true){
$prova1 = readline(prompt : "Qual a nota da prova 1?");
$prova2 = readline(prompt : "Qual a nota da prova 2?");
$trabalhofinal = readline(prompt : " Qual a nota do trabalho final?");

$media = (($prova1 * 0.3) + ($prova2 * 0.3) + ($trabalhofinal * 0.4));

if($media >= 7) {
    echo " Você passou de ano e sua media foi " .$media ;
    
}
else if ( $media >= 4) {
 echo "Você ficou de recuperação e sua media foi " .$media;
}
elseif ($media < 4 ){
echo "Você reprovou de ano e sua media foi " .$media;
}


echo "  Deseja ver a media novamente? (s/n): ";
$continuar = readline();  

if ($continuar != 's') {
    break;
}
}