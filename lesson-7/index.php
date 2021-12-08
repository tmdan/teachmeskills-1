<?php

$arr = [2, 4, 6, 8];

function output_array($arr){

    if (count($arr)===0){
        return ;
    }else {
       echo  array_shift($arr) ;
       output_array($arr);
    }
}
output_array($arr);