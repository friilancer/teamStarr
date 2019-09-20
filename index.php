<?php
	include "connection.php";
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LOG IN</title>
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
                      <a class="nav-link actve" href="#"><h4>Log In</h4></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="signUp.php"><h4 class="disabld">Sign Up</h4></a>
                    </li>
                </ul><br><br>
                <p class="text-center font-weight-bold">Welcome back!</p>
                <br><br>
                <form method="POST" action="">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend" style="height:38px;width:35.44px;">
                            <span class="input-group-text"><span class="fa fa-user"></span></span>
                        </div>
                        <input name="access" type="text" required="required" class="form-control" placeholder="Username or Email">
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="fa fa-lock"></span></span>
                        </div>
                        <input name="password" required="required" type="password" class="form-control" placeholder="Password">
                    </div>
                    <!--<p class="clr"><a>Forgot Password?</a></p>-->
                    <br>
                    <button name="submit1" type="submit">Log in</button>
                </form>
                <br>    
                <p class="text-center clr"><a href="signUp.php" class="signUpLink">Don't have an account? <u>Sign Up</u></a></p>
            </div>
            <div class="col-1 col-md-2 col-lg-3"></div>   
        </div>
        <?php

		if(isset($_POST["submit1"])){
			$count = 0;
			$res = mysqli_query($conn, "SELECT * FROM users WHERE email='$_POST[access]' OR username='$_POST[access]' && password='$_POST[password]'");
			$count=mysqli_num_rows($res);

			if ($count==0){
				
				?>
					<div id="invalid">
						<b>Invalid</b> Username or Password!!
					</div>
				<?php
			}
			else{
				$_SESSION["username"] = $_POST["access"];
				?>
				<script type="text/javascript">
					window.location="landing.php";
				</script>
				<?php

			}
		}

		?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>