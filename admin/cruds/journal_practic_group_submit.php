<?php
header('location: ../journal.php?teacher_id='.$_REQUEST['teacher_id'].'&subject_id='.$_REQUEST['subject_id'].'&group_id='.$_REQUEST['group_id'].'&room_id='.$_REQUEST['room_id'].' ');
include('../inc/connect.php');

$teacher_id = $_REQUEST['teacher_id'];
$subject_id = $_REQUEST['subject_id'];
$group_id = $_REQUEST['group_id'];
$room_id = $_REQUEST['room_id'];
$theme = $_REQUEST['theme'];
$hours = $_REQUEST['hours'];
$para = $_REQUEST['para'];
$curdate = $_REQUEST['curdate'];

$insert = "INSERT INTO doc_lesson(curdate, teacher_id, theme, group_id, potok_id, type_id, subject_id, kurs_id, hours, para, status, create_time, room_id)
VALUES('".$curdate."', ".$teacher_id.", '".$theme."', ".$group_id.", 0, 1, ".$subject_id.", (SELECT course_id FROM dic_group WHERE id=".$group_id."), ".$hours.", ".$para.", 0, CONCAT(CURDATE(), ' ', CURTIME()), ".$room_id." )";

if(mysql_query($insert)) {
  
  $last_id = mysql_fetch_array(mysql_query("SELECT LAST_INSERT_ID() as last_id"));
  $group_list = mysql_query("SELECT id FROM dic_student WHERE group_id=".$group_id." ");

  while($row = mysql_fetch_array($group_list)) {
    mysql_query("INSERT INTO doc_lesson_list(lesson_id, group_id, student_id)
                  VALUES(".$last_id['last_id'].", ".$group_id.", ".$row['id'].")");
  }

} else {
    echo "false";
    echo mysql_error();
}

?>