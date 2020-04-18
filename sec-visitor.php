<?php

include "qrcode/meRaviQr/qrlib.php";
include "config.php";
if(isset($_POST['submit']))
{

	$con=mysqli_connect('localhost','shan','root','vms');
	if(!$con)
	{
		die('error');
	}
	//$visitor_id=$_POST['visitor_id'];
	$visitor_name=$_POST['visitor_name'];
	$visitor_address=$_POST['visitor_address'];
	$visitor_phone_no=$_POST['visitor_phone_no'];
	$visitor_email=$_POST['visitor_email'];
	$visitor_gender=$_POST['visitor_gender'];
	$visitor_photo=$_POST['visitor_photo'];
	$visitor_document=$_POST['visitor_document'];
  $visitor_meeting=$_POST['visitor_meeting'];
  $visitor_meeting_time=$_POST['visitor_meeting_time'];
  $meeting_purpose=$_POST['meeting_purpose'];
	$visitor_company_name=$_POST['visitor_company_name'];
	$visitor_company_address=$_POST['visitor_company_address'];
	$visitor_company_email=$_POST['visitor_company_email'];
	$visitor_company_phone=$_POST['visitor_company_phone'];

  $qrcontent = $visitor_name.'<br>'.$visitor_address.'<br>'.$visitor_email.'<br>'.$visitor_phone_no.'<br>'.$visitor_gender.'<br>'.$visitor_meeting.'<br>'.$visitor_meeting_time.'<br>'.$visitor_company_name.'<br>'.$visitor_company_phone.'<br>'.$visitor_company_address.'<br>'.$visitor_company_email;
    $qrImgName = "visitor".rand();
	$msg="";


      $target = "image/". basename($_FILES["visitor_photo"]["name"]);

      $visitor_photo = $_FILES['visitor_photo']['name'];

      $target2 = "image/". basename($_FILES["visitor_document"]["name"]);

      $visitor_document = $_FILES['visitor_document']['name'];



  $qrs = QRcode::png($qrcontent,"qrcode/userQr/$qrImgName.png","H","3","3");
  $qrimage = $qrImgName.".png";
  $workDir = $_SERVER['HTTP_HOST'];
  $qrlink = $workDir."/qrcode".$qrImgName.".png";
  $insQr = $meravi->insertQr($visitor_name,$visitor_address,$visitor_phone_no,$visitor_email,$visitor_gender,$visitor_photo,$visitor_document,$visitor_meeting,$visitor_meeting_time,$meeting_purpose,$visitor_company_name,$visitor_company_address,$visitor_company_email,$visitor_company_phone,$qrimage,$qrcontent,$qrlink);
  //if($insQr==true)
  //{
    //echo "<script>alert('Thank You $visitor_name. Success Create Your QR Code'); window.location='sec-visitor.php';</script>";
		$sql2 = "select * from employee_master";
		$res = mysqli_query($con,$sql2);
  //}
	//$select = $meravi->selectqr();
//	echo $insQr."--<br>";

	$insQr1 = $meravi->insertQr1($insQr);
//	echo $insQr1."--<br>";


//		$res = mysqli_query($sql1);

	//die;

//if(move_uploaded_file($_FILES['visitor_photo']['tmp_name'],$target));{
	//$msg="seccess";
//}
//if(move_uploaded_file($_FILES['visitor_document']['tmp_name'],$target2));{
//	$msg="seccess";
//}
//$res=mysqli_query($con,$sql);
if($insQr)
{
  $result = "<div class='alert alert-success alert-dismissable' style='width:1000px;'>
    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    <i class='zmdi zmdi-check pr-15 pull-left'></i>Visitor Information successfully Inserted ";
//	header('location: index.php');
}
//else {
	//$result1='<div class="alert alert-danger">Error in Uploading Data</div>';
//	header('location:/visitors.php');
//}
}
?>
<?php
if(isset($_GET['success']))
{
?>
<div id="qrSucc">
<div class="modal-content animate container">
  <?php
  ?>

  <img src="qrcode/userQr/<?php echo $_GET['success']; ?>" alt="">
<?php }?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	$rootdir="/vms";
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$rootdir";
	?>

<?php include_once("admin_header.php");?>

    <div class="wrapper theme-1-active pimary-color-green">
		<?php include_once("sec-topmenu.php");?>
		<?php include_once("sec-sidebar.php");?>
		<!-- Right Sidebar Backdrop -->

		<div class="right-sidebar-backdrop"></div>
		<!-- /Right Sidebar Backdrop -->
									<!-- Main Content -->
							<div class="page-wrapper">
								<!-- Title -->
        <div class="row heading-bg">
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">Visitors information</h5><br>
            <?php echo $result; ?>
						<!--<div class='alert alert-success alert-dismissable' style='width:1000px;'>
					    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					    <i class='zmdi zmdi-check pr-15 pull-left'></i>Visitor Information successfully Inserted</div>-->
          </div>
        </div>
        	<div class="row">
						<div class="col-sm-12 col-xs-11">
							<div class="panel panel-default card-view">
								<form method="POST" enctype="multipart/form-data" data-toggle="validator">
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="panel panel-default card-view">
												<div class="form-wrap">

													<div class="row">
														<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1">Visitor Name</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" class="form-control" id="exampleInputpwd_1" placeholder="Visitor Name" name="visitor_name" data-error="Field is required" required>

															</div>
															<div class="help-block with-errors"></div>
														</div>
													</div>

												<div class="row">
													<div class="col-md-6">
												  	<div class="form-group">
														<label class="control-label mb-10" for="exampleInputpwd_1">Employee Name</label>
														<div class="input-group">
															<div class="input-group-addon"><i class="icon-user"></i></div>
															<select name="to_user" class="form-control">
																<option value="male">Ronak Pate</option>
																<option value="male">jay joshi</option>
																<option value="male">parth patel</option>
																<option value="male">helly chokshi</option>
																<option value="male">rakesh patel</option>
																<option value="male">mansi patel</option>
																<option value="male">shivam desai</option>
																<option value="male">shivani shah</option>
																<option value="male">yash shah</option>
																<option value="male">priyansh trivedi</option>
																<option value="male">sagar desai</option>
																<option value="male">sanjay joshi</option>
																<option value="male">amit trivedi</option>

															</select>
														</div>
													</div>
												</div>
											</div>
											</div>

												<div class="row">
														<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1">Address</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-location-pin"></i></div>
																<input type="text" class="form-control" id="exampleInputpwd_1" placeholder="Address" name="visitor_address" required>
															</div>
														</div>
													</div>
												<div class="row">
														<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_2">Phone No</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-phone"></i></div>
																<input type="text" class="form-control" id="exampleInputpwd_2" placeholder="PhoneNo" name="visitor_phone_no" maxlength="10" data-error="Enter Valid Phone No." required>
															</div>
														</div>
													</div>
												</div>
											</div>
												<div class="row">
														<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1">Email ID</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-email"></i></div>
																<input type="email" class="form-control" id="exampleInputpwd_1" placeholder="Email ID" name="visitor_email" data-error="invalid Email Address" required>
															</div>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												<div class="row">
														<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_2">Gender</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="fa fa-venus-mars" aria-hidden="true"></i></div>
																<select class="form-control" name="visitor_gender" required>
																	<option value="male">Male</option>
																	<option value="female">Female</option>
																	<option value="other">Other</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
													<div class="row">
														<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_2">Photo</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-image"></i></div>
																<input type="file" class="form-control" placeholder="ID Proof" name="visitor_photo" data-error="Please Choose Photo" required/>
															</div>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												<div class="row">
														<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_2">ID Proof</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-id-badge"></i></div>
																<input type="file" class="form-control" placeholder="ID Proof" name="visitor_document" data-error="Please Choose ID Proof" required/>
															</div>
														</div>
													</div>
												</div>
											</div>
                      <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                        <label class="control-label mb-10" for="exampleInputpwd_2">Meeting Type</label>
                          <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-venus-mars" aria-hidden="true"></i></div>
                            <select class="form-control" name="visitor_meeting" required>
                              <option value="premeeting">Pre Planned Meeting</option>
                              <option value="ontime">On Time</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                          <label class="control-label mb-10" for="exampleInputpwd_2">Meeting Time</label>
                          <div class="input-group">
                            <div class="input-group-addon"><i class="ti-time"></i></div>
                            <input type="time" class="form-control" placeholder="Meeting Date and Time" name="visitor_meeting_time" required/>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

													<div class="row">
														<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1">Meeting Purpose</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-zip"></i></div>
																<input type="text" class="form-control" id="exampleInputpwd_1" placeholder="meeting_purpose" name="meeting_purpose" required>
															</div>
														</div>
													</div>
												<div class="row">
														<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_2">Gate No.</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
																<select class="form-control" name="gate_no" required>
		                              <option value="1">Gate 1</option>
		                              <option value="2">Gate 2</option>
																	<option value="2">Gate 3</option>
		                            </select>
															</div>
														</div>
													</div>
												</div>
											</div>
													<div class="row">
														<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1">Company Name</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-layers"></i></div>
																<input type="text" class="form-control" id="exampleInputpwd_1" placeholder="Company Name" name="visitor_company_name" data-error="Please Enter Company Name" required>
															</div>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												<div class="row">
														<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_2">Company Address</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-location-pin"></i></div>
																<input type="text" class="form-control" id="exampleInputpwd_2" placeholder="Company Address" name="visitor_company_address" required>
															</div>
														</div>
													</div>
												</div>
											</div>
													<div class="row">
														<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1">Company email</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-email"></i></div>
																<input type="text" class="form-control" id="exampleInputpwd_1" placeholder="Company Email" name="visitor_company_email" required>
															</div>
														</div>
													</div>
												<div class="row">
														<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_2">Company PhoneNo</label>
															<div class="input-group">
																<div class="input-group-addon"> <i class="icon-phone"></i></div>
																<input type="text" class="form-control" id="exampleInputpwd_2" placeholder="Company PhoneNo" name="visitor_company_phone" required>
															</div>
														</div>
													</div>
												</div>
											</div>

												<button type="submit" class="btn btn-primary mr-10" name="submit">Submit</button>
												<button type="submit" class="btn btn-default">Cancel</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
          </div>
			<?php include_once("admin_footer.php");?>
			<script src="<?= $actual_link;?>/vendors/bower_components/bootstrap-validator/dist/validator.min.js"></script>

				</form>
	</body>

</html>
