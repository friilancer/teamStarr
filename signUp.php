<?php
        include "connection.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SIGN UP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <div class="row">
            <div class="col-1 col-md-2 col-lg-3"></div>
            <div class="main col-10 col-md-8 col-lg-6">
                <ul class="nav nav-justified">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php"><h4 class="disabld">Log In</h4></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link actve" href="#"><h4>Sign Up</h4></a>
                    </li>
                </ul><br><br>
                <p class="text-center" >You're just a step away!<br>
                <span class="font-weight-bold">Please fill in the required details</span>
                </p>
                <br><br>
                <form method="POST" action="">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="fa fa-user"></span></span>
                        </div>
                        <input name="fname" required="required" type="text" class="form-control" placeholder="Full Name">
                    </div>

                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="fa fa-envelope"></span></span>
                        </div>
                        <input name="email" required="required" type="email" class="form-control" placeholder="Email Address">
                    </div>

                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="fa fa-user"></span></span>
                        </div>
                        <input name="username" required="required" type="text" class="form-control" placeholder="Username">
                    </div>

                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="fa fa-lock"></span></span>
                        </div>
                        <input name="password" type="password" class="form-control" required="required" placeholder="Password">
                    </div>

                    <!--<p class="clr"><a href="#">Forgot Password?</a></p>-->
                    <br>
                    <button name="submit1" type="submit">Sign up</button>

                </form>
                <br>
                <?php
                   if(isset($_POST["submit1"])){

        mysqli_query($conn, "INSERT INTO users VALUES('$_POST[fname]', '$_POST[email]', '$_POST[username]', '$_POST[password]')");
                    
                    ?>
                    <div id="valid">
                        <b>Registration was successful.</b>Kindly click on LOGIN to login!!
                    </div>
                    <?php
                    };
                ?>    
                <p class="text-center clr"><a href="index.php" class="logInLink">Already have an account? <u>Log in</u></a></p>
            </div>
            <div class="col-1 col-md-2 col-lg-3"></div>   
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>