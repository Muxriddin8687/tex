<?php

include('../inc/connect.php');

$id = mysql_real_escape_string($_REQUEST['id']);

$query = "UPDATE doc_lesson SET status=1 WHERE id=".$id." ";

if(mysql_query($query)) {
    echo 'true';
} else {
    echo 'false';
}

?>