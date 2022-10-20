<?php include("connection_db.php"); ?>
<?php error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" text ="type/css" href ="registerform_style.css">
	<title>Registration Form</title>
</head>

<body>
        <div class="container">
               <form action="#" method="POST">
                <div class ="title">
                	Registration Form
                </div>

                <div class="form">
                	<div class = "input_field">
                		<label>First Name </label>
                		<input type ="text" class="input" name="fname" required >
                	</div>

                	<div class = "input_field">
                		<label>Last Name </label>
                		<input type ="text" class="input" name="lname" required>
                	</div>

                	<div class = "input_field">
                		<label>Password </label>
                		<input type ="password" class="input" name="password" required>
                	</div>

                	<div class = "input_field">
                		<label>Confirm Password </label>
                		<input type ="password" class="input" name="confirmpassword" required>

                	</div>

                	<div class = "input_field">
                		<label>Gender </label>
                		<div class ="selectbox">
                		<select name ="gender" required> 
                			<option value ="">Select</option>
                			<option>Male</option>
                			<option>Female</option>
                		</select>
                	    </div>

                	</div>

                	<div class = "input_field">
                		<label>Email Address</label>
                		<input type ="text" class="input" name="email" required>

                	</div>  	

					<div class = "input_field">
                		<label>Phone Number </label>
                		<input type ="text" class="input" name="phonenumber" required>

                	</div>                	

                    
                    <div class = "input_field">
                		<label>Address</label>
                		<textarea class="textarea" name="address "required ></textarea>

                	</div>

                	<div class = "input_field">
                		
                		<input type ="submit" value="Register" class="btn" name="register">

                	</div>  


                </div>
        </form>
        </div>
</body>
</html>


<?php 
     
        if($_POST['register'])
        {
        	$fname = $_POST['fname'];
        	$lname = $_POST['lname'];
        	$pwd = $_POST['password'];
        	$conpasswd = $_POST['confirmpassword'];
        	$gender= $_POST['gender'];
        	$email=$_POST['email'];
        	$phone=$_POST['phonenumber'];
        	$address=$_POST['address'];




        	$query="insert into registration_table values('$fname' ,'$lname' , '$pwd' , '$conpasswd' , '$gender' , '$email' , '$phone' , '$address' )";

            $data = mysqli_query($check_connect ,$query);

            if($data)
            {
            	echo "insert data "; 
            }
            else
            {
            	echo "fail";
            }
        
    
        }    

        
?>