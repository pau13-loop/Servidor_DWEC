<?php


function burbuja($array)
{
    

    $control_while = false;
    $control_change = 0;

    while (!$control_while) {
        for ($i = 0; $i < (count($array)-1); $i++) {
            if ($array[$i] > $array[$i + 1]) {
                $big_num = $array[$i];
                $small_num = $array[$i + 1];
                $array[$i + 1] = $big_num;
                $array[$i] = $small_num;
                $control_change = 1;
            }
        }
        if ($control_change == 1) {
            $control_change = 0;
        } 
        else {
            $control_while = true;
        }
    }
    print_r($array);
    return $array;
}

$array_to_sort = [1, 2, 4, 3, 5];
burbuja($array_to_sort);
?>