<?php

/* Write a PHP function that will return the sum of all array elements, the array can be a nested array
(nesting can be 2 or more), do NOT use standard PHP functions for working with arrays. */

$array = array(1, array(1,1,10, array(100,200)), 1, 0);

function get_elem_sum($array, $sum = 0) {
    if ($array) {
        foreach($array as $a) {
            if(is_array($a)) {
                $sum = get_elem_sum($a, $sum);
            }
            else
            {
                $sum += $a;
            }

        }
    }
    return $sum;
}
$result = get_elem_sum($array);
echo "Result : $result  ";

/* Write a PHP function that will return the sum of all array elements, the array can be a nested array
(nesting can be 2 or more), do NOT use standard PHP functions for working with arrays. */


/*Write a PHP function which will return all intersecting elements of two arrays, DO NOT use
standard PHP functions for working with arrays.*/

$array_first = array(20,5,7,80,9,6,40,1,0);
$array_second = array(20,15,19,80,9,1,0,4,56);

function get_intersect_elements($array_first, $array_second, $intersect_arr=[]) {

    foreach($array_first as $f_el) {

        for($i = 0; $i < count($array_first); $i++) {
            if($array_second[$i] === $f_el) {
                $intersect_arr[] = $f_el;
            }
        }

    }

    return $intersect_arr;
}
$result = get_intersect_elements($array_first, $array_second);
print_r($result);


/*Write a PHP function which will return all intersecting elements of two arrays, DO NOT use
standard PHP functions for working with arrays.*/


/* Write a PHP function which will return only “even” array elements, DO NOT use standard PHP
functions for work working arrays. */


$array = array(20,5,7,80,9,6,4,1);

function get_even_elements($array, $even_arr=[] ) {
    if ($array) {
        foreach($array as $a) {
            if($a % 2 == 0) {
                $even_arr[] = $a;
            }
        }
    }
    return $even_arr;
}
$result = get_even_elements($array);
print_r($result);

/* Write a PHP function which will return only “even” array elements, DO NOT use standard PHP
functions for work working arrays. */


