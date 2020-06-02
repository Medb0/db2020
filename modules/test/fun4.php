<?php

$args = [
    'hello' => "안녕",
    'msg' => "대림이"
];

function greeting($args)
{
    // extract($args);
    // echo $hello . " " . $msg;
    foreach ($args as $key => $value){
        echo $value."\n";
    }

}

greeting($args);