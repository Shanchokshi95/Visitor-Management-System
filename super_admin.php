<!DOCTYPE html>
<html lang="en">
<head>

	<?php
	$rootdir="/vms";
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$rootdir";

	?>
<?php include_once("admin_header.php");?>
    <div class="wrapper theme-1-active pimary-color-green">
		<?php include_once("superadmin-topmenu.php");?>

	<!--	<?php include_once("superadmin_sidebar.php");?>-->
		<!-- Right Sidebar Backdrop -->
		<div class="right-sidebar-backdrop"></div>


				<!-- Right Sidebar Backdrop -->
			<div class="right-sidebar-backdrop"></div>
			<!-- /Right Sidebar Backdrop -->

			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Company Information</h5>
						</div>

						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="#">
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>Add System User</h6>
												<hr class="dark-grey-hr"/>
												<div class="row">
														<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1">Role Name</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
																<input type="text" class="form-control" id="exampleInputpwd_1" placeholder="Address" name="visitor_address">
															</div>
														</div>
													</div>


														<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_2">Account Type</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i></div>
																<input type="text" class="form-control" id="exampleInputpwd_2" placeholder="PhoneNo" name="visitor_phone_no">
															</div>
														</div>
													</div>
												</div>

												<!-- Row -->
												<div class="row">
														<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1">Company  Name</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="fa fa-industry" aria-hidden="true"></i></div>
																<input type="text" class="form-control" id="exampleInputpwd_1" placeholder="Company Name" name="visitor_address">
															</div>
														</div>
													</div>


														<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_2">Phone No</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
																<input type="text" class="form-control" id="exampleInputpwd_2" placeholder="PhoneNo" name="visitor_phone_no">
															</div>
														</div>
													</div>
													</div>

												<!--/row-->
												<div class="row">
														<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1">Company Email</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
																<input type="text" class="form-control" id="exampleInputpwd_1" placeholder="Company Email" name="visitor_address">
															</div>
														</div>
													</div>


														<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_2">Company GST Number</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="fa  fa-list-alt" aria-hidden="true"></i></div>
																<input type="text" class="form-control" id="exampleInputpwd_2" placeholder="Company GST Number" name="visitor_phone_no">
															</div>
														</div>
													</div>
												</div>


												<div class="row">
														<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_2">Company Symbol</label>
															<div class="input-group">
																<div class="input-group-addon"><i  class="fa fa-picture-o" aria-hidden="true"></i></div>
																<input type="file" class="form-control" placeholder="ID Proof" name="visitor_document" required/>
															</div>
														</div>
													</div>

											<!--/row-->
														<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1">Company Address</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="fa  fa-home" aria-hidden="true"></i></div>
																<input type="text" rows="10"class="form-control" id="exampleInputpwd_1" placeholder="Company Address" name="visitor_address">
															</div>
														</div>
													</div>
												</div>

												<!--/row-->
												<div class="row">
														<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1">City</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></div>
																<input type="text" class="form-control" id="exampleInputpwd_1" placeholder="City" name="visitor_address">
															</div>
														</div>
													</div>


														<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_2">State</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="fa  fa-globe" aria-hidden="true"></i></div>
																<input type="text" class="form-control" id="exampleInputpwd_2" placeholder="Stater" name="visitor_phone_no">
															</div>
														</div>
													</div>

											</div>

											<!--/row-->
												<div class="row">
														<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1">Country</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></div>
																<input type="text" class="form-control" id="exampleInputpwd_1" placeholder="Country" name="visitor_address">
															</div>
														</div>
													</div>
														<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_2">Pincode</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="fa  fa-globe" aria-hidden="true"></i></div>
																<input type="text" class="form-control" id="exampleInputpwd_2" placeholder="Pincode" name="visitor_phone_no">
															</div>
														</div>
													</div>
											</div>

											<div class="seprator-block"></div>
											<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>Add Personal Information</h6>
												<hr class="dark-grey-hr"/>
												<!--/row-->
												<div class="row">
														<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1"> Name</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
																<input type="text" class="form-control" id="exampleInputpwd_1" placeholder="Full Name" name="visitor_address">
															</div>
														</div>
													</div>
													<div class="col-sm-6">
													<div class="form-group">
														<label class="control-label mb-10" for="exampleInputpwd_2">Phone No</label>
														<div class="input-group">
															<div class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></div>
															<input type="text" class="form-control" id="exampleInputpwd_2" placeholder="PhoneNo" name="visitor_phone_no">
														</div>
													</div>
												</div>
											</div>
												<!--/row-->

												<div class="row">
														<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1"> User Email</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
																<input type="text" class="form-control" id="exampleInputpwd_1" placeholder="Full Name" name="visitor_address">
															</div>
														</div>
													</div>
													<div class="col-sm-6">
													<div class="form-group">
														<label class="control-label mb-10" for="exampleInputpwd_2">User Password</label>
														<div class="input-group">
															<div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></div>
															<input type="text" class="form-control" id="exampleInputpwd_2" placeholder="PhoneNo" name="visitor_phone_no">
														</div>
													</div>
												</div>
											</div>

											<div class="row">
														<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_2">Gender</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="fa fa-venus-mars" aria-hidden="true"></i></div>
																<select class="form-control" name="visitor_gender">

																	<option value="male">Male</option>
																	<option value="female">Female</option>
																	<option value="other">Other</option>
																</select>
															</div>
														</div>
													</div>
														<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_2">Photo</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="fa fa-picture-o" aria-hidden="true"></i></div>
																<input type="file" class="form-control" id="exampleInputpwd_2" placeholder="Photo" name="visitor_phone_no">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
														<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1">Department</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
																<input type="text" class="form-control" id="exampleInputpwd_1" placeholder="Department" name="visitor_address">
															</div>
														</div>
													</div>
												</div>

												<button type="submit" class="btn btn-primary mr-10" name="submit">Submit</button>

											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->

				</div>

								<?php include_once("admin_footer.php");?>
			<div class="col-sm-10 col-sm-offset-2"style=" width: 400px; height:60px; margin-left:-38px; padding: 25px;">
		<?php echo $res;
		echo $sql;
		 ?>
	</div>

				</form>

</body>

</html>
