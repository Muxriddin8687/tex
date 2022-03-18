<?php

$link = new mysqli('p:localhost','root','','tex');
$link->set_charset('utf8');


function title_news($title){
    $title = substr($title,0,120);
    return $title.'...';
}

function short_content_news($title){
    $title = substr($title,0,300);
    return $title.'...';
}

// test input text
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = filter_var($data, FILTER_SANITIZE_STRING);

    return $data;
}

?>