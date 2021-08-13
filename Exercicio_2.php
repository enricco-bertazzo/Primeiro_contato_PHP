<?php
    for($num = 1; $num <= 100; $num++){
        switch($num):
            case $num % 3 == 0:
                echo "Numero $num = DING (3)";
                echo "<hr>";
                break;
            case $num % 5 == 0:
                echo "Numero $num = DOING (5)";
                echo "<hr>";
                break;
            case $num % 7 == 0:
                echo "Numero $num = DUNG (7)";
                echo "<hr>";
                break;
        endswitch;
    }
?>