<?php
$lado1=4;
$lado2=3;
$lado3=5;

if($lado1+$lado2>$lado3 and $lado2+$lado3>$lado1 and $lado1+$lado3>$lado2){
    echo"é um triângulo\n";
}
else {echo"não é um triâgulo\n";}

if($lado1==$lado2 and $lado2==$lado3){
    echo"É triângulo equilátero\n";
}
elseif($lado1=$lado2 and $lado2==$lado3 and $lado1==$lado3){
    echo" É um triângulo isósceles\n";
}
else  {echo"é um triangulo escaleno\n";}

?>