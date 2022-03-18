<?php

include('../inc/connect.php');

$row_id = mysql_real_escape_string($_REQUEST['row_id']);
$nb_value = mysql_real_escape_string($_REQUEST['nb_value']);

$query = "UPDATE doc_lesson_list SET nb=".$nb_value." WHERE id=".$row_id." ";

if(mysql_query($query)) {
    echo 'true';
} else {
    echo 'false';
}

?>