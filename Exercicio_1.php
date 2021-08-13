<?php
    $numsoma = 0;
    for($num = 85; $num <= 901; $num++){
        if($num % 2 == 0){
            echo "Número $num é par.";
            echo '<hr>';
            $numsoma += $num;
        }
    }
    echo "Soma total de todos os pares é igual: $numsoma";
?>