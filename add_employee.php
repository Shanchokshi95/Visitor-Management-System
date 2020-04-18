<?php
if(isset($_POST['upload']))
{
	$employee_id=$_POST['employee_id'];
	$employee_name=$_POST['employee_name'];
	$employee_phone_no=$_POST['employee_phone_no'];
	$employee_user=$_POST['employee_user'];
	$employee_password=$_POST['employee_password'];
	$employee_email=$_POST['employee_email'];
	$employee_gender=$_POST['employee_gender'];
	$employee_dob=$_POST['employee_dob'];
	$employee_address=$_POST['employee_address'];
	$employee_photo=$_POST['employee_photo'];
	$employee_document=$_POST['employee_document'];
	$department=$_POST['department'];
	$user_role=$_POST['user_role'];

$msg="";

$con=mysqli_connect('localhost','shan','root','vms');
if(!$con)
{
	die('error');
}


    $target = "image/". basename($_FILES["employee_photo"]["name"]);

    $employee_photo = $_FILES['employee_photo']['name'];

$sql="INSERT INTO employee_master(employee_id,employee_name,employee_phone_no,employee_user,employee_password,employee_email,employee_gender,employee_dob,employee_address,employee_photo,employee_document,department,user_role)VALUES('$employee_id','$employee_name','$employee_phone_no','$employee_user','$employee_password','$employee_email','$employee_gender','$employee_dob','$employee_address','$employee_photo','$employee_document','$department','$user_role')";


//if(move_uploaded_file($_FILES['employee_photo']['tmp_name'],$target));{
	//$msg="seccess";
//}
$res=mysqli_query($con,$sql);
if(isset($res))
{
	$result='<div class="alert alert-success">Employee Data successfully Uploaded....</div>';
//	header('location: index.php');
}
else {
	//$result1='<div class="alert alert-danger">Error in Uploading Data</div>';
//	header('location:/visitors.php');
}

}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>

	<?php
	$rootdir="/vms";
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$rootdir";

	?>
<?php include_once("admin_header.php");?>
    <div class="wrapper theme-1-active pimary-color-green">
		<?php include_once("admin_top_menu.php");?>

		<?php include_once("admin_sidebar.php");?>
		<!-- Right Sidebar Backdrop -->
		<div class="right-sidebar-backdrop"></div>
		<!-- /Right Sidebar Backdrop -->
									<!-- Main Content -->
							<div class="page-wrapper">
								<!-- Title -->
								<div class="row heading-bg">
									<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
										<h5 class="txt-dark">Add Employee</h5>
									</div>
									<!-- Breadcrumb -->
									<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
										<ol class="breadcrumb">
										<a href="<?= $actual_link;?>/employee.php"><button class="btn btn-circle btn-primary" name="add_employee"><i class="fa fa-arrow-left fa-4x" aria-hidden="true"></i></button></a>

										</ol>
									</div>
									<!-- /Breadcrumb -->
								</div>
								<!-- /Title -->
					<form method="POST" enctype="multipart/form-data" data-toggle="validator">
						<div class="panel-wrapper collapse in">
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="panel panel-default card-view">
										<div class="form-wrap">

												<div class="form-body">
													<!--<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Person's Info</h6>
													<hr class="light-grey-hr"/>-->




													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Employee Name</label>
																<input type="text" class="form-control" placeholder="Enter Your Name" name="employee_name" data-error="Please fill in this field" required/>
																<!--<span class="help-block"> This is inline help </span>-->
															</div>
															<div class="help-block with-errors"></div>
														</div>
														<!--/span-->
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">User Role</label>
																<select class="form-control" name="employee_gender" data-error="Please fill in this field">
																	<option value="admin">Admin</option>
																	<option value="employee">Employee</option>
																	<option value="ecurity">Security</option>
																</select>
															<!--<span class="help-block"> This is inline help </span>-->
															</div>

														<!--/span-->
													</div>
														<!--/span-->
													</div>
												</div>

													<!-- /Row -->

													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Email</label>
																<input type="email" class="form-control" placeholder="Enter your email address" name="employee_email" data-error="Please enter valid email address" required/>
															</div>
															<div class="help-block with-errors"></div>
														</div>

																												<!--/span-->
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Password</label>
																<input type="password"  class="form-control" placeholder="Password" name="employee_password" data-error="Please fill in this field" required/>
															<!--	<span class="help-block"> This field has error. </span>-->
															</div>
															<div class="help-block with-errors"></div>
														</div>
														<!--/span-->
													</div>
													<!-- /Row -->


													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Mobile No.</label>
																<input type="text" class="form-control" placeholder="Enter Your mobile no" name="employee_phone_no" data-error="Please fill in this field" required/>
															<!--	<span class="help-block"> This field has error. </span>-->
															</div>
															<div class="help-block with-errors"></div>
														</div>
														<!--/span-->
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Gender</label>
																<select class="form-control" name="employee_gender" data-error="Please fill in this field">

																	<option value="male">Male</option>
																	<option value="female">Female</option>
																	<option value="other">Other</option>
																</select>
															<!--	<span class="help-block"> Select your gender </span>-->
															</div>
															<div class="help-block with-errors"></div>
														</div>
														<!--/span-->

													</div>
													<!-- /Row -->

													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Date of Birth</label>
																<input type="date"  class="form-control" placeholder="dob" name="employee_dob" data-error="Please fill in this field" required/>
																<!--<span class="help-block"> This is inline help </span>-->
															</div>
															<div class="help-block with-errors"></div>
														</div>
														<!--/span-->
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Address</label>
																<input type="text"  class="form-control" placeholder="Address" name="employee_address" data-error="Please fill in this field" required/>
															<!--	<span class="help-block"> This field has error. </span>-->
															</div>
															<div class="help-block with-errors"></div>
														</div>
														<!--/span-->
													</div>
													<!-- /Row -->


													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Photo</label>
																<input type="file"  class="form-control" placeholder="Photo Id" name="employee_photo" data-error="Please choose the file " required/>
																<!--<span class="help-block"> This is inline help </span>-->
															</div>
															<div class="help-block with-errors"></div>
														</div>
														<!--/span-->
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Document</label>
																<input type="file" class="form-control" placeholder="Legal Document" name="employee_document" data-error="Please choose the file" required/>
															<!--	<span class="help-block"> This field has error. </span>-->
															</div>
															<div class="help-block with-errors"></div>
														</div>
														<!--/span-->
													</div>
													<!-- /Row -->


													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Department</label>
																<input type="text" class="form-control" placeholder="Your Department" name="employee_department" data-error="Please fill in this field" required/>
																<!--<span class="help-block"> This is inline help </span>-->
															</div>
															<div class="help-block with-errors"></div>
														</div>
														<!--/span-->

													</div>

														<!--/span-->

													<!-- /Row -->

												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<button class="btn  btn-primary" class="form-control" name="upload">Upload</button>

														<!--	<span class="help-block"> This field has error. </span>-->
														</div>
														<div class="help-block with-errors"></div>
													</div>
													<!--/span-->


													<!-- /Row -->

	</div><!--page wrapper -->

	<div class="col-sm-10 col-sm-offset-2"style=" width: 400px; height:60px; margin-left:-38px; padding: 25px;">
		<?php echo $result; ?>
	</div>

				</form>
				<script src="/vendors/bower_components/bootstrap-validator/dist/validator.min.js"></script>
</head>
		<?php include_once("admin_footer.php");?>
</body>

</html>
