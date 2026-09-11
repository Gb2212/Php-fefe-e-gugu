<?php
$n1=20;
$n2=15;
$n3=28;

echo "$n1,$n2,$n3";

    if($n1>$n2 and $n3 and $n3>$n2){
        echo "O maior número é $n1 e o menor é $n2";
    }
    elseif($n2>$n3 and $n1 and $n1>$n3){
        echo "o maior número é $n2 e o menor é $n3";
    }
    elseif($n3>$n2 and $n1 and $n2>$n1){
        echo  "o maior número é $n3 e o menor numero é $n1";
    }
     elseif($n1>$n2 and $n3 and $n2>$n3){
        echo  "o maior número é $n1 e o menor numero é $n3";
     }
          elseif($n3>$n1 and $n2 and $n1>$n2){
        echo  "o maior número é $n3 e o menor numero é $n3";
     }
          elseif($n2>$n3 and $n1 and $n3>$n1){
        echo  "o maior número é $n2 e o menor numero é $n1";
     }
