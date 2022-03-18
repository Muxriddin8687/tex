<?php

include('../inc/connect.php');

$row_id = mysql_real_escape_string($_REQUEST['row_id']);
$row_ball = mysql_real_escape_string($_REQUEST['row_ball']);

if($row_ball == 0 || $row_ball == '') {
    $ball = 0;
} else {
    $ball = $row_ball;
}

$query = "UPDATE doc_lesson_list SET ball=".$ball." WHERE id=".$row_id." ";

if(mysql_query($query)) {
    echo 'true';
} else {
    echo 'false';
}

?>