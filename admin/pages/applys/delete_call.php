<?php
header('Location: index.php');
include('../../inc/connect.php');

$id = $_REQUEST['id'];


$sql = "DELETE FROM `call` WHERE id=".$id;



if(mysqli_query($link,$sql)) {
	echo "true";
} else {
    echo "false";
}
?>