<?php
header('Location: index.php');
include('../../inc/connect.php');


    $pr_id = $_POST["pr_id"];
    $pr_lang_id = $_POST["pr_lang_id"];
    $lang_id = $_POST["lang"];
    $title = test_input($_POST["title"]);
    $about = test_input($_POST["about"]);

    var_dump($_POST);


    // Check if file was uploaded without errors
    if($_FILES["photo"]["name"] == '')
    {
        $sql = "UPDATE `product_lang` SET
            `lang_id`='{$lang_id}',
            `title`='{$title}',
            `about`='{$about}'
        WHERE `id`='{$pr_lang_id}' AND `product_id`='{$pr_id}'";
        mysqli_query($link, $sql);

    } else {

        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        // Verify MYME type of the file
        if(in_array($filetype, $allowed))
        {

            $sql = "UPDATE `product_lang` SET
                `lang_id`='{$lang_id}',
                `title`='{$title}',
                `about`='{$about}'
            WHERE `id`='{$pr_lang_id}' AND `product_id`='{$pr_id}';";
            mysqli_query($link, $sql);

            // Check whether file exists before uploading it
            if(file_exists('../../../assets/img/products/'.$pr_id.'.jpg'))
            {
                unlink('../../../assets/img/products/'.$pr_id.'.jpg');
                move_uploaded_file($_FILES["photo"]["tmp_name"], "../../../assets/img/products/".$pr_id.'.jpg');
                echo "Your file was uploaded successfully.";
            }
        } else {
            echo "Error: There was a problem uploading your file. Please try again.";
        }
    }
?>