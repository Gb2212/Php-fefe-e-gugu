<?php
$numerodehoras=55;
$numerodehorasamais=15;
$valordahora=8;
$salariototal=0;

if ($numerodehoras<=40){
    $salariototal=$valordahora*$numerodehoras;
    echo"seu salario semanal é:$salariototal";
    }
elseif ($numerodehoras>40 and $numerodehoras<=60){
        $salariototal=$valordahora*$numerodehoras+($numerodehorasamais*($valordahora/2));
        echo"seu salario semanal é:$salariototal";
    }
elseif($numerodehoras>60){
    $salariototal=$valordahora*$numerodehoras+($numerodehorasamais*$valordahora);
    echo"seu salario semanal é:$salariototal";
}










?>