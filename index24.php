<?php
// Condições da plantação e das máquinas
$plantacao_pronta = true;      // true = pronta, false = não pronta
$quantidade_milho = 120;       // Quantidade em sacas
$maquina_disponivel = false;   // true = sim, false = não
$maquina_reserva = true;       // true = sim, false = não
$maquina_em_manutencao = false;// true = em manutenção, false = ok

// Verificando as regras para iniciar a colheita
if ($plantacao_pronta == true && $quantidade_milho >= 100 && $maquina_em_manutencao == false && ($maquina_disponivel == true || $maquina_reserva == true)) {
    echo "A colheita pode ser iniciada com sucesso!";
} else {
    echo "A colheita NÃO pode ser iniciada. Verifique se a plantação está pronta, se há milho suficiente, se a máquina principal está sem manutenção e se há pelo menos uma máquina disponível.";
}
?>