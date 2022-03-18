<?php
header('Location: index.php');
include('../../inc/connect.php');

$id = $_REQUEST['id'];


$sql = "DELETE FROM photos WHERE id=".$id;



if(mysqli_query($link,$sql)) {

    if(file_exists('../../../assets/img/galerya/'.$id.'.jpg')){
		unlink('../../../assets/img/galerya/'.$id.'.jpg');
    }
    
} else {
    echo 'false';
}
?>