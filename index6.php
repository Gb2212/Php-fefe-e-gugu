<?php
$n1=3;
$n2=5;
$media=($n1+$n2)/2;

echo"Nota parcial:$n1\n";
echo"Nota bimestral:$n2\n";

echo"Sua média foi:$media\n";

echo"SISTEMA DE NOTAS:\n";
echo"A(9 a 10)\n";
echo"B(7.5 a 9)\n";
echo"C(6 a 7.5)\n";
echo"D(4 a 6)\n";
echo"E(0 a 4)\n";


if($media>=6 and $media<=10){
    echo"APROVADO(A,B ou C)";
}
else{echo"REPROVADO(D ou E)";}

?>