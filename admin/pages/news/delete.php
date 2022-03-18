<?php
header('Location: index.php');
include('../../inc/connect.php');

$id = $_REQUEST['id'];


$sql = "DELETE FROM news WHERE id=".$id;



if(mysqli_query($link,$sql)) {

    if(file_exists('../../../images/news/'.$id.'.jpg')){
		unlink('../../../images/news/'.$id.'.jpg');
		// move_uploaded_file($_FILES["photo"]["tmp_name"], "../../../images/news/" . $id . '.jpg');
    }
    
} else {
    echo 'false';
}
?>