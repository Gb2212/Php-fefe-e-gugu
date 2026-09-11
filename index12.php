<?php
$altura=1.70;
$peso=150;
$imc=$peso/($altura*$altura);
if ($imc<18.5){
    echo"Abaixo do peso";
}
    elseif ($imc>=18.5 and $imc<=25){
        echo"peso normal";
    }
    elseif ($imc>25 and $imc<=30){
        echo"acima do peso";
    }
    elseif($imc>30 and $imc<=40){
        echo"obeso";
    }
else {echo"obesidade grave";}









?>