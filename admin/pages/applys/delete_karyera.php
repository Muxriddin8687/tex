<?php
header('Location: index.php');
include('../../inc/connect.php');

$id = $_REQUEST['id'];


$sql = "DELETE FROM `karyera` WHERE id=".$id;



if(mysqli_query($link,$sql))
{
    unlink("../../../assets/files/{$id}.pdf");
    echo "true";
} else {
    echo "false";
}
?>