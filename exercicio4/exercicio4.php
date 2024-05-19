<?php 
$a =5;
$b =6;
$c =7;

if($a == 0){
    echo"Não existe raiz";
}
else{
$delta =((($b**2)-(4*($a)*($c)));
 if($delta < 0){
    echo "Não existe raiz";
 }else if($delta == 0){
    $x1= (-($b))+(sqrt($delta)))/(2*$a);
    echo"Raiz unica {$x1}";
 }else if($delta >= 0){
   $x1= (-($b))+(sqrt($delta))/(2*$a);
   $x2= (-($b))+(sqrt($delta))/(2*$a);
   echo "As duas raizes{$x1} {$x2}";

 }else
?>