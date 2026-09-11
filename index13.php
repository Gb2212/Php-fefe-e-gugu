<?php
$preco=30;
$avistaemdinheiro=$preco/100*10;
$avistacartao=$preco/100*5;
$tresvezesnocartao=$preco/3;
$seisvezesnocartao=($preco+($preco/100*10))/6;
$pagamento=0;

if($pagamento==$avistaemdinheiro){
    echo"O preço é de $preco,voce ganhou 10% de desconto,saindo por: $avistaemdinheiro";
}
elseif($pagamento==$avistacartao){
    echo"O preço sai por $preco ,voce ganhou 5% de desconto, saindo por:$avistacartao";
}
elseif($pagamento==$tresvezesnocartao){
    echo"O preço é de $preco, saindo por 3 vezes no cartao, e a parcela sendo de:$tresvezesnocartao";
}
else{echo"O preço é de $preco e ganha um acrescimo de 10%, por 6 vezes no cartao, e a parcela sai por:$seisvezesnocartao";}










?>