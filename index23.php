<?php
// Distâncias da esquina em metros
$distancia_joao = 6;
$distancia_ladrao = 8;

// Cálculo da hipotenusa (Teorema de Pitágoras: a² + b² = c²)
$hipotenusa = sqrt(($distancia_joao * $distancia_joao) + ($distancia_ladrao * $distancia_ladrao));

echo "A distância em linha reta até o ladrão é de " . $hipotenusa . " metros.";

// Verificando com condicionais se João alcança o ladrão (considerando alcance de 10 metros)
if ($hipotenusa <= 10) {
    echo "João conseguiu alcançar o ladrão!";
} elseif ($hipotenusa > 10 && $hipotenusa <= 15) {
    echo "João está quase alcançando o ladrão, continue correndo!";
} else {
    echo "O ladrão está muito longe e conseguiu escapar.";
}
?>