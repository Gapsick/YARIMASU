<?php
// 1에서 100까지 중에 3의 배수만 더하는 프로그램

    $num = 0;

    for ($i = 0; $i <= 100; $i++){
        if ($i % 3 == 0){
            $num += $i;
        }
    }
    echo $num;

?>