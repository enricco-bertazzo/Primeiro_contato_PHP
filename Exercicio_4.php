<?php
    $sala = array('Manta', 'Cobertor', 'Aquecedor', 'Almofada', 'Sofa', 'Cadeira', 'Mesa', 'Televisão');
    
    foreach($sala as $itens){
        echo ("O item '$itens' faz parte da lista");
        echo ("<hr>");
    }

    $total = count($sala);
    echo ("A lista tem um total de '$total' itens");
?>