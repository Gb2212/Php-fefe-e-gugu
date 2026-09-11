<?php

// 1. Defina aqui a quantidade total de horas do plantão
$total = 15;

// 2. Criamos as variáveis para guardar as horas de cada um (começam com zero)
$mixxy = 0;
$ninin = 0;

// 3. Descobrimos quantos ciclos completos de 12 horas (6h do Mixxy + 6h do Ninin) acontecem
$c = (int)($total / 12);
$r = $total % 12;

// 4. Distribuímos as horas dos ciclos completos
$mixxy = $c * 6;
$ninin = $c * 6;

// 5. Usamos if, elseif e else para distribuir o restante das horas (o que sobrou)
if ($r == 0) {
    // Se não sobrou nada, não fazemos nada (as horas dos ciclos já bastam)
} 
elseif ($r <= 6) {
    // Se o resto for menor ou igual a 6, o Mixxy faz tudo o que sobrou
    $mixxy = $mixxy + $r;
} 
else {
    // Se o resto for maior que 6, o Mixxy pega 6 horas e o Ninin pega o resto do excesso
    $mixxy = $mixxy + 6;
    $ninin = $ninin + ($r - 6);
}

// 6. Mostramos o resultado na tela
echo "Mixxy: " . $mixxy . " horas";
echo "Ninin: " . $ninin . " horas";

?>