<?php

//check is there is an empty field
function emptyInputSignup($user_id,$fname,$lname,$user_status,$telno,$email,$password,$conf_password){
    $result='';
    if(empty($user_id)||empty($fname)||empty($lname)||empty($telno)||empty($email)||empty($password)||empty($conf_password)){
        $result=true;
    }
    else {
        $result=false;
    }
    return $result;
}

//check if email structure is valid
function invalidEmail($email){
    $result='';
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=true;
    }
    else {
        $result=false;
    }
    return $result;
}

//password match
function passworsMatch($password,$conf_password){
    $result='';
    if($password!==$conf_password){
        $result=true;
    }
    else {
        $result=false;
    }
    return $result;
}

//check if account already exist
function accountExist($conn,$email,$user_id){
    //select all emails and id in the DB
    $sql="SELECT * FROM users WHERE  email= ? OR user_id= ?;";
    // prepared statement to check if there is a match in the DB(to prevent users form injecting bad code into the DB)
    $stmt= mysqli_stmt_init($conn);//initialized statement
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../logs/f_signup.php?error-AccountAlreadyExistsInDB");
        exit();
    }
    //if it does not fail, then insert the data
    mysqli_stmt_bind_param($stmt,"si",$email,$user_id);
    // now execute the statement
    mysqli_stmt_execute($stmt);

    //grab the resulat from the database
    $resultData=mysqli_stmt_get_result($stmt);
    //check if there is actually a result
    if ($row=mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else{
        $result=false;
    }
    return $result;
    mysqli_stmt_close($stmt);

}


function createAccount($conn,$user_id,$fname,$lname,$user_status,$telno,$email,$password){
    // insert the data into the DB
    $sql="INSERT INTO `users`(`user_id`, `fname`, `lname`, `user_status`, `telno`, `email`, `password`) VALUES(?,?,?,?,?,?,?);";
    // prepared statement to check if there is a match in the DB(to prevent users form injecting bad code into the DB)
    $stmt= mysqli_stmt_init($conn);//initialized statement
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../logs/f_signup.php?error");
        exit();
    }

    //we have the encrypt the passwords
    
    //$hashedPassword= password_hash($password, PASSWORD_DEFAULT);

    //if it does not fail, then insert the data
    mysqli_stmt_bind_param($stmt,"isssiss",$user_id,$fname,$lname,$user_status,$telno,$email,$password);
    // now execute the statement
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo '<script type= "text/javascript"> alert("Account successfully created") </script> ';
    header("location:../logs/f_login.php?AccountCreatedSuccessfully");


 }

// login
function emptyInputLogin($user_id,$password){
    $result='';
    if(empty($user_id)||empty($password)){
        $result=true;
    }
    else {
        $result=false;
    }
    return $result;
}


function  loginUser($conn,$user_id,$password){
    $userExist=accountExist($conn,$user_id,$user_id);
    if (!$userExist){
        header("location: ../logs/f_login.php?WrongIDorEMAIL");
        // exit();

    }elseif($userExist["password"]==$password){
        header("location: ../../FRONTEND/STUDENT/PAGE/home.php");
        session_start();

        // exit();
    }
    else  {
        header("location: ../logs/f_login.php?WronggggPASSWORD");

    }
    

    // compare password
    // $passwordHashed=$userExist["password"];

    
    
    // if ($userExist["password"]==$password) {
    //     header("location: ../../FRONTEND/STUDENT/PAGE/home.php");
    //     session_start();

    //     exit();
    // }
    // else  {
    //     header("location: ../logs/f_login.php?WronggggPASSWORD");

    // }

}



?>