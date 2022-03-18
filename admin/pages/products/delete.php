<?php
header('Location: index.php');
include('../../inc/connect.php');

$id = $_REQUEST['id'];


$sql = "DELETE FROM product WHERE id=".$id;



if(mysqli_query($link, $sql))
{
    if(file_exists('../../../assets/img/products/'.$id.'.jpg'))
    {
		unlink('../../../assets/img/products/'.$id.'.jpg');
    }
    
} else {
    echo 'false';
}
?>