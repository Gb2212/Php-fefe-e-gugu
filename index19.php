<?php
$velocidaderaposa = 12;
$cansada = true;
$chovendo = false;
$velocidademaxima = 20;

if($cansada){
    $velocidademaxima = 15;
}

if($chovendo){
    $velocidademaxima = 12;
}

// Faz a validação final primeiro
if($velocidaderaposa >= 10 and $velocidaderaposa <= $velocidademaxima){
    echo "Ela pode correr com segurança. ";
} else {
    echo "A raposa nao pode correr. ";
}

// Mostra o limite que estava valendo
echo "O limite máximo era de " . $velocidademaxima . "km/h.";
?>