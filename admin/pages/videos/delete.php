<?php
header('Location: index.php');
include('../../inc/connect.php');

$id = $_REQUEST['id'];


$sql = "DELETE FROM videos WHERE id=".$id;



if(mysqli_query($link,$sql))
{
    if(file_exists('../../../assets/img/videos/'.$id.'.mp4')){
		unlink('../../../assets/img/videos/'.$id.'.mp4');
    }

} else {
    echo 'false';
}
?>