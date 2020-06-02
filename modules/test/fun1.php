<?php

$args = [
    'hello' => "안녕",
    'msg' => "대림이"
];

function greeting($args)
{
    echo $args['hello'] . " " . $args['msg'];
}

greeting($args);