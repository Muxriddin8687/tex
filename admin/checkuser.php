<?php

include('./inc/connect.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE login='".$username."' AND password='".$password."' ";
$sql_count = "SELECT * FROM admin WHERE login='".$username."' AND password='".$password."' ";
$result = $link->query($sql_count);
$count = mysqli_num_rows($result);
$row = $result->fetch_assoc();

if($username==$row["login"] && $password==$row["password"] && $count>=1) {
    session_start();
    $_SESSION['name'] = $row["login"];
    $_SESSION['user_id'] = $row["id"];
    echo "True";
} else {
    echo "False";
}


?>
