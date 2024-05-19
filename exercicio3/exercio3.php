<?php
$salario = 500;
$temposer = 1;

if ($salario <= 500) {
    $reajuste = ($salario + $Salario * 25 / 100);
    if ($temposer < 1) {
        echo "Reajuste do salario: {$reajuste}";
        echo "Sem bonus";
    }else if($temposer >= 1 && $temposer <= 3) {
        echo "Reajuste do salario: {$reajuste}";
        $reajuste += 100;
        echo "Bonus de 100 reais";
    }else if($temposer >= 4 && $temposer <= 6){
        echo "Reajuste do salario: {$reajuste}";
        $reajuste += 200;
        echo "Bonus de 200 reais";
    }else if($temposer >= 7 && $temposer <= 10){
        echo "Reajuste do salario: {$reajuste}";
        $reajuste += 300;
        echo "Bonus de 300 reais";
    }else{
        echo "Sem reajustes";
        echo "Bonus 500 reais";
    }
}else if ($salario <= 1000) {
        $reajuste = ($salario + $salario * 20 / 100);
          }else if($temposer >= 1 && $temposer <= 3) {
        echo "Reajuste do salario: {$reajuste}";
        $reajuste += 100;
        echo "Bonus de 100 reais";
    }else if($temposer >= 4 && $temposer <= 6){
        echo "Reajuste do salario: {$reajuste}";
        $reajuste += 200;
        echo "Bonus de 200 reais";
    }else if($temposer >= 7 && $temposer <= 10){
        echo "Reajuste do salario: {$reajuste}";
        $reajuste += 300;
        echo "Bonus de 300 reais";
    }else{
        echo "Sem reajustes";
        echo "Bonus 500 reais";
    }  if ($salario <= 1500) {
            $reajuste = ($salario + $salario * 15 / 100);
            
        }else if($temposer >= 1 && $temposer <= 3) {
            echo "Reajuste do salario: {$reajuste}";
            $reajuste += 100;
            echo "Bonus de 100 reais";
        }else if($temposer >= 4 && $temposer <= 6){
            echo "Reajuste do salario: {$reajuste}";
            $reajuste += 200;
            echo "Bonus de 200 reais";
        }else if($temposer >= 7 && $temposer <= 10){
            echo "Reajuste do salario: {$reajuste}";
            $reajuste += 300;
            echo "Bonus de 300 reais";
        }else{
            echo "Sem reajustes";
            echo "Bonus 500 reais";
        }
    
        
            if ($salario <= 2000) {
                $reajuste = ($salario + $salario * 10 / 100);
            }else if($temposer >= 1 && $temposer <= 3) {
                echo "Reajuste do salario: {$reajuste}";
                $reajuste += 100;
                echo "Bonus de 100 reais";
            }else if($temposer >= 4 && $temposer <= 6){
                echo "Reajuste do salario: {$reajuste}";
                $reajuste += 200;
                echo "Bonus de 200 reais";
            }else if($temposer >= 7 && $temposer <= 10){
                echo "Reajuste do salario: {$reajuste}";
                $reajuste += 300;
                echo "Bonus de 300 reais";
            }else{
                echo "Sem reajustes";
                echo "Bonus 500 reais";
            }
        


            

?>