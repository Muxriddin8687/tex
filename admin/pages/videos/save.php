<?php
header('Location: index.php');

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include('../../inc/connect.php');

    $sql = "INSERT INTO videos(id) VALUES(NULL);";


    if(mysqli_query($link,$sql))
    {
        $last_id = $link->insert_id;

        // Check if file was uploaded without errors
        if(isset($_FILES["video"]) && $_FILES["video"]["error"] == 0)
        {
            $allowed = array("mp4" => "video/mp4", "avi" => "video/avi", "mpeg" => "video/mpeg", "3gp" => "video/3gp");
            $filename = $_FILES["video"]["name"];
            $filetype = $_FILES["video"]["type"];
            $filesize = $_FILES["video"]["size"];
        
            // Verify file extension
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
        
            // Verify file size - 10MB maximum
            $maxsize = 10 * 1024 * 1024;
            if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
        
            // Verify MYME type of the file
            if(in_array($filetype, $allowed))
            {
                // Check whether file exists before uploading it
                if(file_exists('../../../assets/img/videos/'.$last_id.'.mp4'))
                {
                    echo $filename . " is already exists.";
                } else {
                    move_uploaded_file($_FILES["video"]["tmp_name"], "../../../assets/img/videos/".$last_id.'.mp4');
                    echo "Your file was uploaded successfully.";
                } 
            } else {
                // echo "Error: There was a problem uploading your file. Please try again."; 
            }
        } else {
            echo "Error: " . $_FILES["video"]["error"];
        }


    } else {
        echo 'false';
    }
}

?>