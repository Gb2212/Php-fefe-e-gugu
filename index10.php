<?php
// --- DADOS DA COMPRA (ALTERE AQUI PARA TESTAR) ---
$tipoCarne = "Picanha";      // Opções: "Filé Duplo", "Alcatra", "Picanha"
$quantidadeKg = 6.0;          // Quantidade em quilos
$usaCartao = true;            // true para usar o Cartão QueroTudoQueÉSeu, false caso contrário
// ------------------------------------------------

// Inicialização de variáveis
$precoKg = 0.0;
$nomeCarne = "";
$bruto = 0.0;
$descontoCartaoValor = 0.0;
$totalPagar = 0.0;
$formaPagamento = "";

// 1. Processamento do tipo de carne e quantidade usando apenas condicionais
if ($tipoCarne == "Filé Duplo") {
    $nomeCarne = "Filé Duplo";
    if ($quantidadeKg <= 5) {
        $precoKg = 4.90;
    } else {
        $precoKg = 5.80;
    }
} elseif ($tipoCarne == "Alcatra") {
    $nomeCarne = "Alcatra";
    if ($quantidadeKg <= 5) {
        $precoKg = 5.90;
    } else {
        $precoKg = 6.80;
    }
} elseif ($tipoCarne == "Picanha") {
    $nomeCarne = "Picanha";
    if ($quantidadeKg <= 5) {
        $precoKg = 6.90;
    } else {
        $precoKg = 7.80;
    }
}

// 2. Cálculo do valor bruto
$bruto = $quantidadeKg * $precoKg;

// 3. Cálculo do desconto do Cartão QueroTudoQueÉSeu (5%)
if ($usaCartao == true) {
    $descontoCartaoValor = $bruto * 0.05;
    $formaPagamento = "Cartão QueroTudoQueÉSeu (5% desc.)";
} else {
    $descontoCartaoValor = 0.0;
    $formaPagamento = "Outras Formas de Pagamento";
}

// 4. Cálculo do total final a pagar
$totalPagar = $bruto - $descontoCartaoValor;

// 5. Geração do Cupom Fiscal Detalhado
echo "<pre>";
echo "========================================\n";
echo "    HIPERMERCADO QUEROTUDOQUEÉSEU       \n";
echo "========================================\n";
echo "CNPJ: 00.000.000/0001-00                \n";
echo "----------------------------------------\n";
echo "CUPOM FISCAL                            \n";
echo "----------------------------------------\n";
printf("Item Adquirido: %s\n", $nomeCarne);
printf("Quantidade:     %.2f Kg\n", $quantidadeKg);
printf("Preço por Kg:   R$ %.2f\n", $precoKg);
echo "----------------------------------------\n";
printf("Valor Bruto:    R$ %.2f\n", $bruto);
printf("Desconto:       R$ %.2f\n", $descontoCartaoValor);
echo "----------------------------------------\n";
printf("TOTAL A PAGAR:  R$ %.2f\n", $totalPagar);
echo "----------------------------------------\n";
printf("Forma de Pag.:  %s\n", $formaPagamento);
echo "========================================\n";
echo "        OBRIGADO PELA PREFERÊNCIA!      \n";
echo "========================================\n";
echo "</pre>";
?>







