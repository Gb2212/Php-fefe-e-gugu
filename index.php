<?php
$n1=10;
$n2=70;
$n3=90;

if ($n1<$n2 and $n3 and $n2<$n3){
    echo "$n1,$n2,$n3";
}
elseif($n2<$n3 and $n1 and $n3<$n1){
    echo"$n1,$n3,$n2";
}
 elseif($n3<$n2 and $n1 and $n1<$n3){
    echo "$n3,$n1,$n2";
}
elseif($n3<$n2 and $n1 and $n2<$n1){
    echo"$n3,$n2,$n1";
}

elseif($n2<$n3 and $n1 and $n1<$n3){
    echo"$n2,$n1,$n3";
}
elseif($n2<$n1 and $n3 and $n3<$n1){
    echo"$n2,$n3,$n1";
}


?>
