<?php

$con=mysqli_connect('localhost','shan','root','vms');
if(!$con)
{
	die('error');
}

//if (!session_id()) session_start();
	//if (!$_SESSION['admin_id']){
    //header("Location:user-login.php");
  //  die();
//}
//$_SESSION['admin_id']=$admin_id;
//if(isset($_SESSION['admin_id']))
//{
	$sql= " select * from employee_master where employee_id='6'  ";
	$res=mysqli_query($con,$sql);
//}
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
		            <div class="container-fluid pt-25">
					<?php
  						while($row = mysqli_fetch_array($res)) {
					?>
						<!-- Row -->
						<div class="row">
							<div class="col-lg-3 col-xs-12">
								<div class="panel panel-default card-view  pa-0">
									<div class="panel-wrapper collapse in">
										<div class="panel-body  pa-0">
											<div class="profile-box">
												<div class="profile-cover-pic">

													<div class="profile-image-overlay"></div>
												</div>
												<div class="profile-info text-center">
													<div class="profile-img-wrap">
											<?php echo"<img class='inline-block mb-10' width='50px' height='50px' src='image/".$row['employee_photo']."' >"; ?>	<!--<div class="fileupload btn btn-default">
															<span class="btn-text">edit</span>
															<input class="upload" type="file">
														</div>-->
													</div>
													<h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-danger"></h5>

												</div>

											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-9 col-xs-12">
								<div class="panel panel-default card-view pa-0">
									<div class="panel-wrapper collapse in">
										<div  class="panel-body pb-0">
														<!-- Row -->
														<div class="row">
															<div class="col-lg-12">
																<div class="">
																	<div class="panel-wrapper collapse in">
																		<div class="panel-body pa-0">
																			<div class="col-sm-12 col-xs-12">
																				<div class="form-wrap">
																					<form action="#" method="POST">
																						<div class="form-body overflow-hide">
																							<div class="form-group">
																								<label class="control-label mb-10" for="exampleInputuname_01">Name</label>
																								<div class="input-group">
																									<div class="input-group-addon"><i class="icon-user"></i></div>
																									<input type="text" class="form-control" id="exampleInputuname_01" value="<?php echo $row['employee_name']; ?>" readonly/>
																								</div>
																							</div>
																							<div class="form-group">
																								<label class="control-label mb-10" for="exampleInputEmail_01">Email Id</label>
																								<div class="input-group">
																									<div class="input-group-addon"><i class="icon-envelope-open"></i></div>
																									<input type="email" class="form-control" id="exampleInputEmail_01" value="<?php echo $row['employee_email']; ?>" readonly/>
																								</div>
																							</div>
																							<div class="form-group">
																								<label class="control-label mb-10" for="exampleInputContact_01">Phone Number</label>
																								<div class="input-group">
																									<div class="input-group-addon"><i class="icon-phone"></i></div>
																									<input type="text" class="form-control" id="exampleInputContact_01"  value="<?php echo $row['employee_phone_no']; ?>" readonly/>
																								</div>
																							</div>

																							<div class="form-group">
																								<label class="control-label mb-10" for="exampleInputContact_01">Date of Birth</label>
																								<div class="input-group">
																									<div class="input-group-addon"><i class="icon-clock"></i></div>
																									<input type="text" class="form-control" id="exampleInputContact_01"  value="<?php echo $row['employee_dob']; ?>" readonly/>
																								</div>
																							</div>

																							<div class="form-group">
																								<label class="control-label mb-10" for="exampleInputContact_01">User</label>
																								<div class="input-group">
																									<div class="input-group-addon"> <i class="ti-id-badge"></i></div>
																									<input type="text" class="form-control" id="exampleInputContact_01"  value="<?php echo $row['user_role']; ?>" readonly/>
																								</div>
																							</div>

																							<div class="form-group">
																								<label class="control-label mb-10" for="exampleInputContact_01">Department</label>
																								<div class="input-group">
																									<div class="input-group-addon"> <i class="icon-list"></i></div>
																									<input type="text" class="form-control" id="exampleInputContact_01"  value="<?php echo $row['department']; ?>" readonly/>
																								</div>
																							</div>

																						</div>
																					</form>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
</div>
<?php } ?>
			<?php include_once("admin_footer.php");?>

</body>

</html>
