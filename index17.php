<?php
// --- DADOS DO DESAFIO (ALTERE AQUI PARA TESTAR) ---
$numeroEscolhido = 1;  // Número que o dragão quer colocar (entre 1 e 3)
$linhaDesejada    = 2;  // Linha escolhida (0 a 2)
$colunaDesejada   = 1;  // Coluna escolhida (0 a 2)
// --------------------------------------------------

// Matriz inicial 3x3 representando o Sudoku do dragão
// Onde valor 0 representa a célula vazia
$sudoku = [
    [1, 2, 3],
    [3, 1, 2],
    [2, 3, 0]
];

// Inicialização de mensagens e controle
$jogadaValida = true;
$mensagemErro = "";

// 1. Verificar se o número está entre 1 e 3
if ($numeroEscolhido < 1 || $numeroEscolhido > 3) {
    $jogadaValida = false;
    $mensagemErro = "Erro: O número deve estar entre 1 e 3.";
} 
// 2. Verificar se a posição está dentro dos limites da malha (0 a 2)
elseif ($linhaDesejada < 0 || $linhaDesejada > 2 || $colunaDesejada < 0 || $colunaDesejada > 2) {
    $jogadaValida = false;
    $mensagemErro = "Erro: Posição inválida na malha.";
} 
// 3. Verificar se a posição já está preenchida
elseif ($sudoku[$linhaDesejada][$colunaDesejada] != 0) {
    $jogadaValida = false;
    $mensagemErro = "Erro: A posição escolhida já está ocupada.";
} 
else {
    // 4. Verificar se o número já existe na mesma LINHA
    if ($sudoku[$linhaDesejada][0] == $numeroEscolhido || 
        $sudoku[$linhaDesejada][1] == $numeroEscolhido || 
        $sudoku[$linhaDesejada][2] == $numeroEscolhido) {
        $jogadaValida = false;
        $mensagemErro = "Jogada Inválida: O número já aparece nesta linha!";
    }
    // 5. Verificar se o número já existe na mesma COLUNA
    elseif ($sudoku[0][$colunaDesejada] == $numeroEscolhido || 
            $sudoku[1][$colunaDesejada] == $numeroEscolhido || 
            $sudoku[2][$colunaDesejada] == $numeroEscolhido) {
        $jogadaValida = false;
        $mensagemErro = "Jogada Inválida: O número já aparece nesta coluna!";
    }
}

// --- RESULTADO PARA O DRAGÃO ---
echo "<pre>";
echo "========================================\n";
echo "       VALIDADOR DE SUDOKU - DRAGÃO     \n";
echo "========================================\n";
printf("Tentativa: Inserir [%d] na Linha %d, Coluna %d\n", $numeroEscolhido, $linhaDesejada, $colunaDesejada);
echo "----------------------------------------\n";

if ($jogadaValida == true) {
    echo "STATUS: JOGADA VÁLIDA! O dragão pode jogar.\n";
} else {
    echo "STATUS: JOGADA INVÁLIDA!\n";
    echo $mensagemErro . "\n";
}
echo "========================================\n";
echo "</pre>";
?>