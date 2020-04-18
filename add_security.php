<?php
if(isset($_POST['add']))
{
	$security_name=$_POST['security_name'];
  $gate_number=$_POST['gate_number'];
	$shift=$_POST['shift'];
	$duty_time=$_POST['duty_time'];



  $con=mysqli_connect('localhost','shan','root','vms');
  if(!$con)
  {
  	die('error');
  }
  $sql="INSERT INTO security_roster(security_name,gate_number,shift,duty_time)VALUES('$security_name','$gate_number','$shift','$duty_time')";

  $res=mysqli_query($con,$sql);
  if(isset($res))
  {
  	$result='<div class="alert alert-success">Employee Data successfully Uploaded....</div>';
  //	header('location: index.php');
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
      <h5 class="txt-dark">Security</h5>
    </div>
    <!-- Breadcrumb -->
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
      <ol class="breadcrumb">
      <a href="<?= $actual_link;?>/security_roster.php"><button class="btn btn-circle btn-primary" name="security_roster" ><i class="fa fa-arrow-left fa-4x" aria-hidden="true"></i></button></a>

      </ol>
    </div>
    <!-- /Breadcrumb -->
  </div>
				<!-- Row -->
        <!-- /Title -->
  <form method="POST">
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
                        <label class="control-label mb-10">Security Name</label>
                        <input type="text" class="form-control" placeholder="Security Name" name="security_name" required/>
                        <!--<span class="help-block"> This is inline help </span>-->
                      </div>
                    </div>

                    <!--/span-->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="control-label mb-10">Gate Number</label>
                        <select class="form-control" name="gate_number">
                          <option value="Gate No.1">Gate No.1</option>
                          <option value="Gate No.2">Gate No.2</option>
                          <option value="Gate No.3">Gate No.3</option>
                          <option value="Gate No.4">Gate No.4</option>
                        </select>
                      </div>
                    </div>
                  </div>
                    <!--/span-->



                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label mb-10">Shift</label>
                            <select class="form-control" name="shift">
                              <option value="Morning">Morning</option>
                              <option value="Night">Night</option>
                            </select>
                          </div>
                      </div>

                                        <!--/span-->
                    <div class="col-md-6">
                      <div class="form-group">
                         <label class="control-label mb-10">Duty Time</label>
                           <input type="time" class="form-control" name="duty_name">

                        </div>
                   </div>
                  </div>
                </div>
                  <div class="row">
              			<div class="col-md-12">
              				<div class="form-group">
              					<button class="btn  btn-primary" class="form-control" name="add">Add</button>
              						<!--	<span class="help-block"> This field has error. </span>-->
              				 </div>
              		  </div>
                  </div>


        <!-- /Row -->



    </div>
  </div>
		<?php include_once("admin_footer.php");?>


</body>



<!-- Form Picker Init JavaScript -->
<script src="dist/js/form-picker-data.js"></script>

</head>
</html>
