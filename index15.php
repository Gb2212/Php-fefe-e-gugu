<?php
$consumokw=250;
$valordokw=0;
$valortotal=0;

if($consumokw<=100){
    $valordokw=0.5;
    $valortotal=$consumokw*$valordokw;
}
elseif($consumokw>100 and $consumokw<=200){
     $valordokw=0.7;
    $valortotal=$consumokw*$valordokw;
}
elseif($consumokw>200 and $consumokw<=300){
     $valordokw=0.9;
     $valortotal=$consumokw*$valordokw;
}
else{$valordokw=1.1 and $valortotal=$consumokw*$valordokw;}

echo"O consumo de KWh foi de:$consumokw\n";
echo"O valor do Kwh é de:$valordokw\n";
echo"O valor total da conta é de:$valortotal\n";






?>