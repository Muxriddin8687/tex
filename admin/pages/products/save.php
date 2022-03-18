<?php
header('Location: index.php');

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include('../../inc/connect.php');

    $lang_id = $_POST["lang"];
    $title = test_input($_POST["title"]);
    $about = test_input($_POST["about"]);

        

        // Check if file was uploaded without errors
        if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0)
        {
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

                $sql = "INSERT INTO `product` (id) VALUES(NULL);";
                mysqli_query($link, $sql);
                $last_id = $link->insert_id;

                $sql2 = "INSERT INTO `product_lang` (`product_id`, `lang_id`, `title`, `about`) VALUES ('{$last_id}', '{$lang_id}', '{$title}', '{$about}');";
                mysqli_query($link, $sql2);

                $sql3 = "INSERT INTO `product_img` (product_id) VALUES ('{$last_id}');";
                mysqli_query($link, $sql3);
                $last_img = $link->insert_id;

                // Check whether file exists before uploading it
                if(file_exists('../../../assets/img/products/'.$last_img.'.jpg'))
                {
                    echo $filename . " is already exists.";
                } else {
                    move_uploaded_file($_FILES["photo"]["tmp_name"], "../../../assets/img/products/".$last_img.'.jpg');
                    echo "Your file was uploaded successfully.";
                } 
            } else {
                // echo "Error: There was a problem uploading your file. Please try again."; 
            }
        } else {
            echo "Error: " . $_FILES["photo"]["error"];
        }

}

?>