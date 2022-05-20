<?php

$numbers = [];

for ($i=0; $i < 15; $i++) { 
    array_push($numbers, rand(1, 100));
    while(in_array(rand(1, 100), $numbers)) {
        array_push($numbers, rand(1, 100));
    }
    
}
var_dump($numbers);
