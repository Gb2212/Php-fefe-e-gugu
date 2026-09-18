<?php
// Dados de entrada para teste
$professor = "Renata"; // Pode ser "Renata" ou "Israel"
$dia = "terca";        // Segunda, terca, quarta, quinta, sexta
$disciplina = "Propulsão de Foguetes";

if ($professor == "Renata") {
    if ($dia == "segunda") {
        echo "Horário não pode ser alocado. Renata participa de reunião pedagógica na segunda-feira.";
    } elseif ($dia == "terca" && $disciplina == "Propulsão de Foguetes") {
        echo "Aula alocada com sucesso! Renata ministra Propulsão de Foguetes na terça-feira.";
    } else {
        echo "Horário alocado com sucesso para Renata.";
    }
} elseif ($professor == "Israel") {
    if ($dia == "sexta") {
        echo "Horário não pode ser alocado. Israel utiliza o laboratório para manutenção na sexta-feira.";
    } elseif ($dia == "quinta" && $disciplina == "Estruturas de Foguetes") {
        echo "Aula alocada com sucesso! Israel ministra Estruturas de Foguetes na quinta-feira.";
    } else {
        echo "Horário alocado com sucesso para Israel.";
    }
} else {
    echo "Professor não reconhecido pelo sistema.";
}
?>
