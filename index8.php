<?php
// Valor do saque desejado (valor de exemplo)
$valor_saque = 256;

// Validação dos limites de saque (mínimo 10 e máximo 600)
if ($valor_saque < 10) {
    echo "Erro: O valor mínimo para saque é de 10 reais.\n";
} else {
    if ($valor_saque > 600) {
        echo "Erro: O valor máximo para saque é de 600 reais.\n";
    } else {
        // Inicialização das variáveis de contagem de notas
        $notas_100 = 0;
        $notas_50  = 0;
        $notas_10  = 0;
        $notas_5   = 0;
        $notas_1   = 0;

        $valor_restante = $valor_saque;

        // Cálculo das notas de 100
        if ($valor_restante >= 100) {
            $notas_100 = (int)($valor_restante / 100);
            $valor_restante = $valor_restante % 100;
        }

        // Cálculo das notas de 50
        if ($valor_restante >= 50) {
            $notas_50 = (int)($valor_restante / 50);
            $valor_restante = $valor_restante % 50;
        }

        // Cálculo das notas de 10
        if ($valor_restante >= 10) {
            $notas_10 = (int)($valor_restante / 10);
            $valor_restante = $valor_restante % 10;
        }

        // Cálculo das notas de 5
        if ($valor_restante >= 5) {
            $notas_5 = (int)($valor_restante / 5);
            $valor_restante = $valor_restante % 5;
        }

        // Cálculo das notas de 1
        if ($valor_restante >= 1) {
            $notas_1 = (int)($valor_restante / 1);
            $valor_restante = $valor_restante % 1;
        }

        // Exibição do resultado
        echo "Para o saque de R$ " . $valor_saque . ", serão fornecidas:\n";
        echo "- " . $notas_100 . " nota(s) de R$ 100\n";
        echo "- " . $notas_50  . " nota(s) de R$ 50\n";
        echo "- " . $notas_10  . " nota(s) de R$ 10\n";
        echo "- " . $notas_5   . " nota(s) de R$ 5\n";
        echo "- " . $notas_1   . " nota(s) de R$ 1\n";
    }
}
?>


