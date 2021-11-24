<?php
// require ('../../../SECURITY/Includes/DB-connection.php');

// keep track of errors
$errors = array();
// check if the button has been clicked
if (isset($_POST["post_btn"])) 
{
    // callect the data
    $post_details=$_POST["post_details"];
    
    //image validation
    $target_dir="images/";
    $target_file= $target_dir.basename($_FILES["image"]["name"]);
    $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // chech if the file is an image
    if(!empty($_FILES["image"]["name"]))
    {
        // chech if the file is an image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check==false) 
        {
            array_push($errors, "The file is not an image");
            // header ("location: home.php");
            
        }
        //limit file size to 5mb
        if ($_FILES["image"]["size"] > 5000000) 
        {
            array_push($errors, "The file is too large(5MB is the maximun");
            // header ("location: home.php)");
            
        }
        // limit file type
        if($image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "gif" && $image_file_type != "jpeg")
        {
            array_push($errors, "Sorry, only JPG, PNG & GIF files are allowed");
            // header ("location: home.php?error=Sorry, only JPG, PNG & GIF files are allowed");
            
        }
        // upload image
        $upload_image = move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        if($upload_image)
        {
            // continue
        }else
        {
            array_push($errors, "Upload failed");
            // header ("location: home.php)");
        }
    }
    // check errors
    if(count($errors) == 0)
    {
        session_start();
        $user_id=$_SESSION["user_id"];   
        // insert the data into the DB
        $sql="INSERT INTO `posts`(`user_id`,`post_details`, `post_image`) 
        VALUES (?,?,?)";

        $stmt= mysqli_stmt_init($connect);//initialized statement
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            array_push($errors, "SYSTEM ERROR");
            header ("location: home.php?stmt was not prepared)");
        }
        //if it does not fail, then insert the data
        mysqli_stmt_bind_param($stmt,"iss",$user_id,$post_details,$target_file);
        // now execute the statement
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        echo '<script type= "text/javascript"> alert("POSTED") </script> ';
        header("location: home.php");
    }else 
    {
        session_start();
        // store the errors inside session
        $_SESSION["errors"] = $errors;
        header("location: home.php?error");
    }

    
    
}