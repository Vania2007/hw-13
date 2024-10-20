<?php
function my_sort($a, $b)
{
    return strlen($b) - strlen($a);
}
$array = ["apple", "banana", "cherry", "pear", "watermelon", "mango", "discharge", "apricot"];
uasort($array, 'my_sort');
print_r($array);
