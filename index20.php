<?php
// Horas efetivamente trabalhadas em cada um dos 4 dias (valores de exemplo)
$horas_dia_1 = 65;
$horas_dia_2 = 60;
$horas_dia_3 = 75;
$horas_dia_4 = 55;

// Jornada normal diária estabelecida
$jornada_diaria = 60;

// Inicialização das variáveis de cálculo
$horas_extras = 0;
$descanso_adicional = 0;

// Verificação de horas extras dia a dia usando apenas condicionais
if ($horas_dia_1 > $jornada_diaria) {
    $horas_extras = $horas_extras + ($horas_dia_1 - $jornada_diaria);
}

if ($horas_dia_2 > $jornada_diaria) {
    $horas_extras = $horas_extras + ($horas_dia_2 - $jornada_diaria);
}

if ($horas_dia_3 > $jornada_diaria) {
    $horas_extras = $horas_extras + ($horas_dia_3 - $jornada_diaria);
}

if ($horas_dia_4 > $jornada_diaria) {
    $horas_extras = $horas_extras + ($horas_dia_4 - $jornada_diaria);
}

// Cálculo do descanso adicional (1h30 ou 1.5 horas de descanso por hora extra)
if ($horas_extras > 0) {
    $descanso_adicional = $horas_extras * 1.5;
} else {
    $descanso_adicional = 0;
}

// Exibição dos resultados
echo "Total de horas extras realizadas: " . $horas_extras . " horas\n";
echo "Quantidade de descanso adicional: " . $descanso_adicional . " horas\n";
?>
