<?php
if(isset($_GET['update']))
{
	$employee_id=$_GET['employee_id'];
	$employee_name=$_GET['employee_name'];
	$employee_phone_no=$_GET['employee_phone_no'];
	$employee_user=$_GET['employee_user'];
	$employee_password=$_GET['employee_password'];
	$employee_email=$_GET['employee_email'];
	$employee_gender=$_GET['employee_gender'];
	$employee_dob=$_GET['employee_dob'];
	$employee_address=$_GET['employee_address'];
	$employee_photo=$_GET['employee_photo'];
	$employee_document=$_GET['employee_document'];
	$employee_department=$_GET['employee_department'];
	$employee_designation=$_GET['employee_designation'];

$con=mysqli_connect('localhost','shan','root','vms');
if(!$con)
{
	die('error');
}

//$sql="select * from employee_master";
//$res=mysqli_query($con,$sql);

$sql="UPDATE employee_master SET employee_name='$employee_name',employee_phone_no='$employee_phone_no',employee_user='$employee_user',employee_password='$employee_password',employee_email='$employee_email',employee_gender='$employee_gender',employee_dob='$employee_dob',
	employee_photo='$employee_photo',employee_document='$employee_document',employee_designation='$employee_designation' WHERE employee_id='$employee_id' ";
$res=mysqli_query($con,$sql);
if(isset($res))
{
	$result='<div class="alert alert-success">Employee Data successfully Updated....</div>';
header('location:employee.php');
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
										<h5 class="txt-dark">Update Employee</h5>
									</div>
									<!-- Breadcrumb -->
									<!-- /Breadcrumb -->
								</div>
								<!-- /Title -->
					<form method="GET" data-toggle="validator">
						<div class="panel-wrapper collapse in">
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="panel panel-default card-view">
										<div class="form-wrap">
												<div class="form-body">
													<!--<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Person's Info</h6>
													<hr class="light-grey-hr"/>-->

														<!--/span-->
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">First Name</label>
																<input type="text" class="form-control" placeholder="Enter Your Name" name="employee_name" data-error="Please fill in this field" required/>
																<!--<span class="help-block"> This is inline help </span>-->
															</div>
															<div class="help-block with-errors"></div>
														</div>
														<!--/span-->
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Mobile No.</label>
																<input type="text" class="form-control" placeholder="Enter Your mobile no" name="employee_phone_no" data-error="Please enter mobile no." required/>
															<!--	<span class="help-block"> This field has error. </span>-->
															</div>

															<div class="help-block with-errors"></div>
														</div>
														<!--/span-->
													</div>
												</div>
													<!-- /Row -->

													<!-- /Row -->
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Email</label>
																<input type="email" class="form-control" placeholder="Enter your email address" name="employee_email" data-error="Please enter email address" required/>
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
																<input type="file"  class="form-control" placeholder="Photo Id" name="employee_photo" data-error="Please choose the file" required/>
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
													
														<!--/span-->
													</div>
													<!-- /Row -->
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<button class="btn btn-primary" class="form-control" name="update">Update</button>
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
		<?php include_once("admin_footer.php");?>
		<script src="<?= $actual_link;?>/vendors/bower_components/bootstrap-validator/dist/validator.min.js"></script>

 </body>
</html>
