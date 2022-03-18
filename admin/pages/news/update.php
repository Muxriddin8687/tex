<?php
header('Location: index.php');
include('../../inc/connect.php');

$id = $_REQUEST['id'];
$date = $_REQUEST['date'];
$title = $_REQUEST['title'];
$short_data = $_REQUEST['short_data'];
$more_data = $_REQUEST['more_data'];

$sql = "UPDATE news SET 
            date='".$date."',
            title='".$title."',
            short_content='".$short_data."',
            content='".$more_data."'
        WHERE id=".$id." ";

if(mysqli_query($link,$sql)) {

    if(file_exists('../../../images/news/'.$id.'.jpg')){
		unlink('../../../images/news/'.$id.'.jpg');
		move_uploaded_file($_FILES["photo"]["tmp_name"], "../../../images/news/" . $id . '.jpg');
    }

} else {
    echo 'false';
}
?>