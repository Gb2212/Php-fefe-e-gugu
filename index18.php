<?php
// Percorre os números de 1 a 100
for ($i = 1; $i <= 100; $i++) {
    
    // 1. Verifica se é múltiplo de 3 E de 5 ao mesmo tempo
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "Eiiii Acordaaaa";
    }
    // 2. Verifica se é múltiplo apenas de 3
    elseif ($i % 3 == 0) {
        echo "Eiiii";
    }
    // 3. Verifica se é múltiplo apenas de 5
    elseif ($i % 5 == 0) {
        echo "Acordaaaa";
    }
    // 4. Se não for múltiplo de nenhum dos dois, imprime o próprio número
    else {
        echo $i  ;
    }
    
}
?>