<?php session_start(); ?>
<!--section for html and bootstrap code--> 
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <!--links for advanced styling--> 
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>signup</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

            <link rel="stylesheet" href="signup.css">
            
            
            
            

        </head>
        <body>
        <h3>Sign Up Form</h3>
        
        <div class="d-flex justify-content-center align-items-center container " id="outer">
    <!--for form--> 
                <form action="../Includes/f_signup-inc.php" id="signForm" method="post">
                <h5 style="color: red;">
                    <?php
                        if (isset($_GET["error"])){
                            echo $_GET["error"];
                        }
                    ?>
                </h5><br>
                    <div class="form-group">
                    <label for="name">First name:</label>
                        <input type="text" class="form-control" name="fname" id="name1">
                        <small id="fnameError"></small>
                        <br>



                        <label for="name">Last name:</label>
                        <input type="text" class="form-control" name="lname" id="name2">
                        <small id="lnameError"></small>
                        <br>

                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" name="email" id="mail">
                        <small id="emailError"></small>
                        <br>
                        


                    </div>
                    <div class="form-group">
                        <label for="mobileNo">Mobile number:</label>
                        <input type="text" class="form-control" name="telno" id="mobl">
                        <small id="moblError"></small>
                        <br>

                        <label for="facultyNo">ID number:</label>
                        <input type="text" class="form-control" name="user_id" id="iNo">
                        <small id="idError"></small>
                        <br>


                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" id="pwd">
                        <small id="passwordError"></small>
                        <br>

                        <label for="password">Confirm password:</label>
                        <input type="password" class="form-control" name="conf_password" id="pwd2">
                        <small id="ConfirmPasswordError"></small>
                        <br>


                        <label>what is your status ?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="user_status" value="Faculty" >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Faculty
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="user_status" value= "Student">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Student
                            </label>
                            </div>


                    </div><br>
                    
                    
                    <button type="submit" name="submit" class="btn btn-primary">Create account</button>
                    <!-- <input type="submit" name="submit" class="btn btn-primary" id="submitBtn" value="Create account"> -->

                    Already have an account? <a href="f_login.php">Login</a><br><br><br><br>

                    <script src="signup.js"></script>
            </form>

            






            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            
            <script src="signup.js"></script>
            


        </body>
        </html>











