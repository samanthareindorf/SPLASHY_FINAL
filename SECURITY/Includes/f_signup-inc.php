<!-- <?php


// make sure the user submitted the form properly
if(isset($_POST["submit"])) {
    
    //grab the user detailss
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $telno =$_POST["telno"];
    $user_id=$_POST["user_id"];
    $password=$_POST["password"];
    $conf_password=$_POST["conf_password"];
    $user_status=$_POST["user_status"];
    //error handling file
    require_once 'DB-connection.php';
    require_once 'functions-inc.php';    


    //check if the user inserted all the required values
    if(emptyInputSignup($user_id,$fname,$lname,$user_status,$telno,$email,$password,$conf_password)!==false){
        header("location: ../logs/f_signup.php?error= You have an emptyInput");
        exit();
    }
    if ($user_status==NULL) {
        header("location: ../logs/f_signup.php?error= You have to Select a Statut");
        exit();
    }
    
    //check if email structure is valid
    if(invalidEmail($email)!==false){
        header("location: ../logs/f_signup.php?error= Your email is Invalid");
        exit();
    }

    //check if password matchs
    if(passworsMatch($password,$conf_password)!==false){
        header("location: ../logs/f_signup.php?error= Your passwords don't match");
        exit();
    }

    //check if account already exist
    if(accountExist($conn,$email,$user_id)!==false){
        header("location: ../logs/f_signup.php?error= You already have an account");
        exit();
    }

    //check password lengh

    createAccount($conn,$user_id,$fname,$lname,$user_status,$telno,$email,$password);
}
else {
    header("location:../logs/f_signup.php?error= The connection failed please come back later");
    
    }

?> -->