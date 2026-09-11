<?php
$pergunta1="Telefonou para a vítima?";
$pergunta2="Esteve no local do crime?";
$pergunta3="Mora perto da vítima?";
$pergunta4="Devia para a vítima?";
$pergunta5="Já trabalhou com a vítima?";


$respostasim=2;

if($respostasim<2){
    echo"Inocente";
}
elseif($respostasim==2){
    echo"Suspeita";
}
elseif($respostasim==3 or $respostasim==4){
    echo"Cúmplice";
}

else{echo"Assassino";}


?>