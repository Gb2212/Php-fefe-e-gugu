<?php
$salarioatual=300;

if($salarioatual<=280){
    $percentual=20;
}
elseif($salarioatual>280 and $salarioatual<=700){
    $percentual=15;
}
elseif($salarioatual>700 and $salarioatual<=1500){
    $percentual=10;
}
elseif($salarioatual>=1500){
    $percentual=5;
}

$aumento= $salarioatual/100*($percentual);
$novosalario= $salarioatual + $aumento;

echo"Seu salário anterior era $salarioatual\n";
echo"O percentual aplicado foi $percentual%\n";
echo"O valor do aumento foi $aumento\n";
echo"Seu novo salário é $novosalario\n";


