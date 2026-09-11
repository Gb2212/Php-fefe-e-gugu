<?php
$forca=12;
$inteligencia=12;
$agilidade=13;
$classe="";
 if($forca>$inteligencia and $forca>$agilidade){
    $classe="Guerreiro";
 }
 if($inteligencia>$agilidade and $inteligencia>$forca){
    $classe="Mago";
 }
if($agilidade>$inteligencia and $agilidade>$forca){
    $classe="Arqueiro";
}
if($forca==$inteligencia or $forca==$agilidade or $inteligencia==$agilidade){
   $classe="Híbrida";
   }

echo"Seus atributos são:\n";
echo"Força=$forca\n";
echo"Inteligência=$inteligencia\n";
echo"Agilidade=$agilidade\n";

echo"Sua classe é:$classe";







?>