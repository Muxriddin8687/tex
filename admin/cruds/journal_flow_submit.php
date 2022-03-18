<?php
header('location: ../journal_flow.php?teacher_id='.$_REQUEST['teacher_id'].'&subject_id='.$_REQUEST['subject_id'].'&potok_id='.$_REQUEST['potok_id'].'&room_id='.$_REQUEST['room_id'].'');
include('../inc/connect.php');

$teacher_id = $_REQUEST['teacher_id'];
$subject_id = $_REQUEST['subject_id'];
$potok_id = $_REQUEST['potok_id'];
$room_id = $_REQUEST['room_id'];
$theme = $_REQUEST['theme'];
$hours = $_REQUEST['hours'];
$para = $_REQUEST['para'];
$curdate = $_REQUEST['curdate'];

$insert = "INSERT INTO doc_lesson(curdate, teacher_id, theme, group_id, potok_id, type_id, subject_id, kurs_id, hours, para, status, create_time, room_id)
VALUES('".$curdate."', ".$teacher_id.", '".$theme."', 0, ".$potok_id.", 1, ".$subject_id.", (SELECT course_id FROM dic_potok WHERE id=".$potok_id."), ".$hours.", ".$para.", 0, CONCAT(CURDATE(), ' ', CURTIME()), ".$room_id." )";

if(mysql_query($insert)) {
  
  $last_id = mysql_fetch_array(mysql_query("SELECT LAST_INSERT_ID() as last_id"));
  $group_list = mysql_query("SELECT id, group_id FROM dic_student WHERE group_id in (SELECT group_id FROM dic_potok_list WHERE potok_id=".$potok_id.") ");

  while($row = mysql_fetch_array($group_list)) {
    mysql_query("INSERT INTO doc_lesson_list(lesson_id, group_id, student_id)
                  VALUES(".$last_id['last_id'].", ".$row['group_id'].", ".$row['id'].")");
  }

} else {
    echo "false";
    echo mysql_error();
}

?>