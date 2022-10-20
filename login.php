<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="login-style.css">

	<title>LOGIN BY XENONSTACK</title>
</head>
<body>
           <div class="center">
           	<h1>Login</h1>
          
           <form action='#' method="POST" autocomplete="off">
           <div class ="form">

           	<input type ="text" name="username" class="textfield" placeholder="Username">
           	<input type ="password" name="password" class="textfield" placeholder="Password">
           	<input type ="submit" name="login" value="Login" class="btn">

           	<div class="signup">New Member ? <a href ="registration.php" class="link">Sign Up</a></div>

           </div>
           </div>
       </form>
</body>
</html>

	
<?php include("connection_db.php"); ?>
<?php error_reporting(0);
?>

<?php  
       if(isset($_POST['login']))
       {
           $username = $_POST['username'];
           $password = $_POST['password'];	

           $query = "SELECT * FROM registration_table where fname='$username' && passwd ='$password'";	

           $data = mysqli_query($check_connect ,$query);
           $total = mysqli_num_rows($data);

           if($total)
           {

                $_SESSION['username'] = $username;
                header('location:index.html');

           }

          else
          {
          	  echo "login failed";
          }

         
       }


?>