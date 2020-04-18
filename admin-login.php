<?php

	if(isset($_POST['signin']))
	{
		$username=$_POST['username'];
	  $pw=$_POST['password'];

$con=mysqli_connect('localhost','shan','root','vms');
if(!$con)
{
	die('error');
}
$sql="SELECT admin_id FROM admin WHERE username='$username' and password='$pw'";
$res=mysqli_query($con,$sql);

$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
   // echo "successflly loged in";
	// if (isset($_POST['password']) && isset($_POST['username'])) {
    //  if ($_POST['password'] == $pw && $_POST['username'] == $username) {
          if (!session_id())
              session_start();
							$_SESSION['admin_id']=$admin_id;
          $_SESSION['admin_id'] = true;

          header('Location:index.php');
        die();
      //}
		//}
	 //session_start();
	//$_SESSION["admin_id"] = $row['admin_id'];
	 //if(isset($row))
	 //{
		 //header('location:index.php');
	 //}
	 //else
	 //{    $result='<div class="alert alert-danger">invalid Username or Password</div>';
      	//echo '<div class="alert alert-danger alert-dismissable">Opps! Somthing went wrong</div>';
          //die(header("location:login.php?loginFailed=true&reason=password "));
	// }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<?php
			$rootdir="/vms";
			$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$rootdir";
		?>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Admin Dashboard</title>
		<!--<meta name="description" content="Philbert is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Philbert Admin, Philbertadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>-->
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<!-- vector map CSS -->
		<link href="<?= $actual_link;?>/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<!-- Custom CSS -->
		<link href="<?= $actual_link;?>/dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>-->
		<!--/Preloader-->
		<div class="wrapper pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
						<img class="brand-img mr-10" src="dist/img/logo.png" alt="brand"/>
						<span class="brand-text">VMS</span>
					</a>
				</div>
				<!--<div class="form-group mb-0 pull-right">
					<span class="inline-block pr-10">Don't have an account?</span>
					<a class="inline-block btn btn-info btn-success btn-rounded btn-outline" href="signup.html">Sign Up</a>
				</div>-->
				<div class="clearfix"></div>
			</header>
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Sign in to VMS</h3>
											<h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
										</div>
										<div class="form-wrap">
											<form action="#" method="POST">
												<div class="form-group">
													<label class="control-label mb-10" for="username">Username</label>
													<input type="text" class="form-control" required="" placeholder="Enter username" name="username">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="password">Password</label>
													<a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">forgot password ?</a>
													<div class="clearfix"></div>
													<input type="password" class="form-control" required="" placeholder="Enter password" name="password">
												</div>
												<!--<div class="form-group">
													<div class="checkbox checkbox-primary pr-10 pull-left">
														<input id="checkbox_2" required="" type="checkbox">
														<label for="checkbox_2"> Keep me logged in</label>
													</div>
													<div class="clearfix"></div>
												</div>-->
												<div class="form-group text-center">
													<button type="submit" class="btn btn-info btn-primary pull-left control-label mb-10" name="signin">sign in</button>
												</div>
												<div class="col-sm-10 col-sm-offset-2"
												style=" width: 400px; height:60px; margin-left:0px; padding: 25px;">
            							<?php echo $result; ?>
        										</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
				</div>
			</div>
			<!-- /Main Content -->
		</div>
		<!-- /#wrapper -->

		<!-- JavaScript -->

		<!-- jQuery -->
		<script src="<?= $actual_link;?>/vendors/bower_components/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="<?= $actual_link;?>/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="<?= $actual_link;?>/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		<!-- Slimscroll JavaScript -->
		<script src="<?= $actual_link;?>/dist/js/jquery.slimscroll.js"></script>

		<!-- Init JavaScript -->
		<script src="<?= $actual_link;?>/dist/js/init.js"></script>
	</body>
</html>




												<!--<div class="col-sm-10 col-sm-offset-2"
												style=" width: 400px; height:60px; margin-left:0px;">

        										</div>-->
