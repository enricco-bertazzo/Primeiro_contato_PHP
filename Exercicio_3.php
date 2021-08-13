<?php
    function circulo($raio){
        $area = 3.14 * ($raio * $raio);
        echo "O circulo com raio igual a $raio tem de area equivalente = $area";
        echo "<hr>";
    }

    for($j = 100; $j <= 200; $j++){
        if($j % 2 == 0){
            $raio = $j;
            circulo($raio);
        }
    }
?>