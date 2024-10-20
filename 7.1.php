<?php
function sum_row($n)
{
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i * $i;
    }
    return $sum;
}
echo sum_row(rand(1, 13));
