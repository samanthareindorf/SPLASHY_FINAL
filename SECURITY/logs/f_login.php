
<!--section for html and bootstrap code--> 
<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Login</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

            <link rel="stylesheet" href="login.css">

        </head>
        <body>
        <h3>Login Form</h3>
        <div class="d-flex justify-content-center align-items-center container " id="outer">
            <form id="logForm" action="../Includes/f_login-inc.php" method="post">
                    <div class="form-group">
                        <label for="facultyNo">ID number or email:</label>
                        <input type="text" class="form-control" name="user_id">

                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password">


                    </div><br>
                    
                    <button type="submit" class="btn btn-success" name="login">Login</button><br><br>
                    Forgot password/id? <a href="forgotPass.php">Forgot</a>
                    
                    <br><br><br>
            </form>

            <p class="error"></p>




            </div>
        </body>
        </html>











<!--php code-->