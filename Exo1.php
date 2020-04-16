<?php
function SumAll($n)
{
    $number = 0;
    for ($i = 0; $i <= $n; $i++) {
        $number = $number + $i;
    }

    // Opti
    // return (1 + $n) * ($n / 2);
    echo $number;
}

SumAll(3);
