<?php
$horastrabalhadas=240;
$horasextras=$horastrabalhadas-240;
$horasdedescanso=0;
$somadehorasextras=$horasextras*1.5;
$dias=4;

if($horastrabalhadas>240){
    $horasdedescanso=880+($somadehorasextras);
   echo" Mixxy-X789 trabalhou $horastrabalhadas horas e $horasextras horas extras, sendo assim, seu descanso  vai para:$horasdedescanso horas e ele ganhou mais $somadehorasextras horas de descanso";
}
else{echo"Mixxy-X789 nao trabalhou por horas extras, concluindo sua jornada normal de 240 horas"; }








?>