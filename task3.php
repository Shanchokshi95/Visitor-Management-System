<?php
session_start();
if(isset($_POST['signup']))
{
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$username=$_POST['username'];
	
	$email=$_POST['email'];
	$mobileno=$_POST['mobileno'];
	$gender=$_POST['gender'];
	$birthdate=$_POST['birthdate'];
	$password=$_POST['password'];
	//$pw=md5($password);
	//$confirmpassword=$_POST['confirmpassword'];


$con=mysqli_connect('localhost','shan','root','vms');
if(!$con)
{
	die('error');
}
$sql="INSERT INTO register(firstname,lastname,username,gender,birthdate,email,mobileno,password)VALUES('$firstname','$lastname','$username','$gender','$birthdate','$email','$mobileno','$password')";


$res=mysqli_query($con,$sql);
header('location: login.php');
session_destroy();



}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
	

	<script src="./examples_files/underscore-min.js"></script>
  <script src="./examples_files/moment.min.js"></script>
  <script src="./examples_files/validate.js"></script>


	<title></title>


</head>
<body>
	<form name="registerationform" method="POST" onSubmit = "return Password(this)">

     <?php	if($res)
	{
	echo '<div class="alert alert-success">
  <strong>Success! </strong></div>';
  	}
	?>
<div class="container">
	<div class="jumbotron" style="margin-top:40px; ">
	<div class="row">
		<div class="col-sm-12">
			<label for="userinfo" class="form-control" style="font-size: 30px; text-align: center;background-color: black; color: white;font-style:bold;margin-top:10px;">Registration</label>
		</div><br><br><br><br>
	

		<div class="col-sm-6">
			<input type="text" name="firstname" placeholder="First Name" class="form-control" required/>
		</div>

		<div class="col-sm-6">
			<input type="text" name="lastname" placeholder="Last Name" class="form-control" required/>
		</div><br><br>


		<div class="col-sm-12">
			
<input type="text" name="username" placeholder="Username" class="form-control" required/>
		</div><br><br>


		<div class="col-sm-6">
			<select class="form-control" name="gender">
				<option>Male</option>
				<option>Female</option>

				<option>Other</option>
			</select>
		</div>

		<div class="col-sm-6">
			<input type="date" name="birthdate" placeholder="birthdate" class="form-control" required/>
		</div><br><br>
		
	

		<div class="col-sm-6">
			<input type="email" name="email" placeholder="Email Id" class="form-control" required/>
		</div>


		<div class="col-sm-6">
			<input type="text" name="mobileno" placeholder="Mobile No" class="form-control" required/>
		</div><br><br>

		

		<div class="col-sm-6">
			<input type="password" name="password" placeholder="Password" class="form-control" md-5/>
			<span id="message"> </span>
		</div>


		<div class="col-sm-6">
			<input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control" size="100" required/>
		</div>	<br><br>

			<div class="col-sm-6">
				<a href="login.php">already have an account?Login</a>
			</div>

			
				<input type="submit" name="signup" class="form-control" value="SignUp" value="password()" style="text-align:center; margin-top:10px; margin-left: 910px; background:#0066FF; height:50px; border:none; border:none; outline:none; color:#fff; width: 150px; padding-right:10px;font-size: 20px;">	

	</div>
</div>



</div>

</form>


<script>
/*$(document).ready(function () {
    $("#form").validate({
        rules: {
            
       
 		       "email": {
                required: true,
                email: true
            }
        },
        messages: {
         
                     "email": {
                required: "Please, enter an email",
                email: "Email is invalid"
            }
        },
        signupHandler: function (form) { // for demo
            alert('valid form submitted'); // for demo
            return false; // for demo
        }
    });

});
*/

function Password(form) { 
                password = form.password.value; 
                confirmpassword = form.confirmpassword.value; 
 if (password != confirmpassword)
  {
  	alert('password does not match');
  	} 
}

	</script>




</body>
</html>

