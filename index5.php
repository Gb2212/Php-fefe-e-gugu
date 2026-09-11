<?php
$valordahora=7;
$quantidadedehoras=220;
$salariobruto=$valordahora*$quantidadedehoras;
$sindicato=3;

if($salariobruto<=900){
    $percentual=3;
}
elseif($salariobruto>900 and $salariobruto<=1500){
    $percentual=8;
}
elseif($salariobruto>1500 and $salariobruto<=2500){
    $percentual=13;
}
else{$percentual=23;}

$descontos=$salariobruto/100*$percentual;
$salarioliquido=$salariobruto-$descontos;

echo"Seu salário bruto é $salariobruto reais\n";
echo"Seus descontos foram de $descontos reais\n";
echo"Seu salário líquido é de $salarioliquido reais\n";