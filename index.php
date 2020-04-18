<?php
//session_start();
//if(isset($_SESSION["admin_id"]))
//{
	//echo "welcome";
//}
                      /*if (!session_id()) session_start();
                      if (!$_SESSION['admin_id']){
                          header("Location:user-login.php");
                        //  die();
                      }*/
//else{
	//header('location:login.php');
	//}

  $con=mysqli_connect('localhost','shan','root','vms');
  if(!$con)
  {
  	die('error');
  }

  $sqlvis = "SELECT count(visitor_id) as total FROM visitor_information ";
  $res = mysqli_query($con,$sqlvis);
  $row = mysqli_fetch_assoc($res);
  $num_rows = $row['total'];

  $sqlemp = "SELECT count(employee_id) as total FROM employee_master ";
  $res = mysqli_query($con,$sqlemp);
  $row = mysqli_fetch_assoc($res);
  $num_rows1 = $row['total'];

  $sql2 = "SELECT count(visitor_id) as total FROM visitor_information WHERE visitor_meeting='premeeting' ";
  $res = mysqli_query($con,$sql2);
  $row = mysqli_fetch_assoc($res);
  $num_rows2 = $row['total'];

  $sql3 = "SELECT count(visitor_id) as total FROM visitor_information WHERE status='1' ";
  $res = mysqli_query($con,$sql3);
  $row = mysqli_fetch_assoc($res);
  $num_rows3 = $row['total'];

    $sql4 = "SELECT count(employee_id) as total FROM employee_master WHERE status='0' ";
    $res = mysqli_query($con,$sql4);
    $row = mysqli_fetch_assoc($res);
    $num_rows4 = $row['total'];



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
				<!-- Row -->
        <div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-dark block counter"><span class="counter-anim"><?php echo $num_rows; ?></span></span>
													<span class="weight-500 uppercase-font block font-13">visitors</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                          <i class="fa fa-user data-right-rep-icon txt-light-black" aria-hidden="true"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-dark block counter"><span class="counter-anim"><?php echo $num_rows1; ?></span></span>
													<span class="weight-500 uppercase-font block">Employee</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="fa fa-users data-right-rep-icon txt-light-black" aria-hidden="true"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-dark block counter"><span class="counter-anim"> <?php echo $num_rows2; ?></span></span>
													<span class="weight-500 uppercase-font block">Planned Visitors </span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">

                          <i class="zmdi zmdi-pin-account data-right-rep-icon txt-light-black"></i>
                        </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default card-view pa-0">
              <div class="panel-wrapper collapse in">
                <div class="panel-body pa-0"><script src="vendors/bower_components/bootstrap-validator/dist/validator.min.js"></script>

                  <div class="sm-data-box">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                          <span class="txt-dark block counter"><span class="counter-anim"> <?php echo $num_rows3; ?></span></span>
                          <span class="weight-500 uppercase-font block">Block Visitors </span>
                        </div>
                        <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                          <i class="fa fa-ban data-right-rep-icon txt-light-black" aria-hidden="true"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
				</div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="panel panel-default card-view pa-0">
            <div class="panel-wrapper collapse in">
              <div class="panel-body pa-0">
                <div class="sm-data-box">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                        <span class="txt-dark block counter"><span class="counter-anim"><?php echo $num_rows4; ?></span></span>
                        <span class="weight-500 uppercase-font block">Inactive Employee</span>
                      </div>
                      <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                        <i class="fa fa-close data-right-rep-icon txt-light-black" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
				<!-- /Row -->



				<!-- Row -->
			</div>

			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2020 &copy; Absolute Web</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->

		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

		<?php include_once("admin_footer.php");?>


</body>

</html>
