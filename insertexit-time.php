<?php
$con=mysqli_connect('localhost','shan','root','vms');
if(!$con)
{
	die('error');
}
$visitor_name=$_POST['visitor_name'];
$sql = "SELECT * FROM visitor_information WHERE visitor_name='$visitor_name' ";
$res = mysqli_query($con,$sql);

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
            <h5 class="txt-dark">Visitor Exit Time</h5><br>
          </div>
        </div>
		<form method="POST">


        <div class="row">
          <div class="col-sm-6 col-xs-6">
            <div class="panel panel-default card-view">
              <form method="POST" enctype="multipart/form-data">
              <div class="panel-wrapper collapse in">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-sm-12 col-xs-12">
                      <div class="panel panel-default card-view">
                      <div class="form-wrap">

												<div class="row">
													<div class="col-md-12">
													<div class="form-group">
														<label class="control-label mb-10" for="exampleInputpwd_1">Visitor Name</label>
														<div class="input-group">
															<div class="input-group-addon"><i class="icon-user"></i></div>
															<select class="form-control" name="visitor_name">
																<option value="male">shan chokshi</option>
																<option value="female">sanjay patel</option>
																<option value="other">jay joshi</option>
																<option value="other">parth patel</option>
																<option value="other">shikhar shah</option>
																<option value="other">yugen chokshi</option>
																<option value="other">shivam giya</option>
																<option value="other">helly</option>
																<option value="other">fenil shah</option>
																<option value="other">Amay Desai</option>
																<option value="other">Ronak Patel</option>
															</select>
															<?php
																/*echo "<select name='visitor_name'>";
																while ($row = mysql_fetch_array($res)) {

																echo "<option value='".$row['visitor_name']."'>" . $row['visitor_name']."</option>";
																}
																echo "</select>";
																*/?>
														</div>
													</div>
												</div>
											</div>

                        <div class="row">
                          <div class="col-md-12">
                          <div class="form-group">
                            <label class="control-label mb-10" for="exampleInputpwd_1">Exit Time</label>
                            <div class="input-group">


                              <div class="input-group-addon"> <i class="ti-timer"></i></div>
                              <input type="time" class="form-control" id="exampleInputpwd_1" placeholder="Visitor Name" name="visitor_name">

                            </div>
                          </div>
                        </div>
                      </div>

                    	<div class="row">
												 <div class="col-md-3">
                    				<div class="form-group">
  															<input type="submit" class="form-control btn btn-primary" name="submit">
                      			</div>
  											</div>
              				</div>
          </div>

      </div>
            <?php include_once("admin_footer.php");?>
              </form>
        </body>

      </html>
