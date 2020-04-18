<?php
$con=mysqli_connect('localhost','shan','root','vms');
if(!$con)
{
	die('error');
}
$status=$_POST['status'];
$sql="select * from employee_master";
$res=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<body>
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
  					  <h5 class="txt-dark">Employee</h5>
  					</div>
  					<!-- Breadcrumb -->
  					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
  					  <ol class="breadcrumb">
                <a href="add_employee.php"><button class="btn btn-circle" name="add_employee" style="background-color:green;"><i class="fa fa-plus-circle fa-4x" aria-hidden="true"></i></button></a>
  					  </ol>
  					</div>
  					<!-- /Breadcrumb -->
  				</div>
  				<!-- /Title -->
					<!-- Row -->
					<form method="post" enctype="multipart/form-data">
						<div class="col-sm-12">
		          <div class="panel panel-default card-view">
		            <div class="panel-heading">
		              <div class="pull-left">
		                <h6 class="panel-title txt-dark">Visitor Details</h6>
		              </div>
		              <div class="clearfix"></div>
		            </div>
		            <div class="panel-wrapper collapse in">
		              <div class="panel-body">
		                <div class="table-wrap">
		                  <div class="table-responsive">
		                    <table id="datable_2" class="table table-hover table-bordered display mb-30" >
		                      <thead>

																	<tr>
																		<th>No.</th>
																		<th>Photo</th>

																		<th>Employee Name</th>
																		<th>Mobile No</th>
																		<!--<th>Password</th>-->
																		<th>Email</th>
																		<th>Gender</th>
																	<!--	<th>DOB</th>-->
																		<th>Address</th>
																		<!--<th>Document</th>-->
																	<!--	<th>Department</th>-->
																		<th>Designation</th>
																		<th>status</th>
																		<th>Action</th>
																	</tr>
																</thead>
																<tbody>
																	<?php
																		$cnt=1;
			                            		while($row = mysqli_fetch_assoc($res)) {
			                                 	echo "<tr>";
			                             		  echo "<td>" .$cnt ."</td>";
																				echo "<td><img class='inline-block mb-10' width='50px' height='50px' src='image/".$row['employee_photo']."' >"; "</td>";
																				echo "<td>" .$row['employee_name'] ."</td>";
			                          		 	  echo "<td>". $row['employee_phone_no']. "</td>";
			                            		 	echo "<td>" .$row['employee_user'] ."</td>";
			                                   // echo "<td>" .$row['employee_password'] ."</td>";
			                            		  echo "<td>" .$row['employee_email'] ."</td>";
			                                  echo "<td>" .$row['employee_gender'] ."</td>";
			                                //   echo "<td>" .$row['employee_dob'] ."</td>";
			                                   echo "<td>" .$row['employee_address'] ."</td>";

			                                  // echo "<td>" .$row['employee_document'] ."</td>";
			                                  // echo "<td>" .$row['department'] ."</td>";
																				 echo "<td>" .$row['employee_designation'] ."</td>";

			                                   if($row['status']==1)
																				 {
																					 echo "<td><input type='checkbox' name='status' Checked> </td>";
																				 }
																				?>
																				<td><button name="update" class="btn btn-primary txt-white" style="width:100px;"><a href="update.php?id=<?php echo $row['employee_id']; ?>" class="text-white">Update</a></button></td>;
																					<?php
																					echo "</tr>";
																					$cnt=$cnt+1;
																		    	 }
																		 ?>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
					<!-- /Row -->
					<!-- Footer -->
					<footer class="footer container-fluid pl-30 pr-30">
					<div class="row">
						<div class="col-sm-12">
							<p>2017 &copy; Philbert. Pampered by Hencework</p>
						</div>
					</div>
					</footer>
					<!-- /Footer -->
					</div>
					<!-- /Main Content -->
					</div>
					<!-- /#wrapper -->

					<!-- JavaScript -->

					<!-- jQuery -->
					<script src="<?= $actual_link;?>/vendors/bower_components/jquery/dist/jquery.min.js"></script>

					<!-- Bootstrap Core JavaScript -->
					<script src="<?= $actual_link;?>/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

					<!-- wysuhtml5 Plugin JavaScript -->
					<script src="<?= $actual_link;?>/vendors/bower_components/wysihtml5x/dist/wysihtml5x.min.js"></script>

					<script src="<?= $actual_link;?>/vendors/bower_components/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.js"></script>

					<!-- Fancy Dropdown JS -->
					<script src="<?= $actual_link;?>/dist/js/dropdown-bootstrap-extended.js"></script>

					<!-- Bootstrap Wysuhtml5 Init JavaScript -->
					<script src="<?= $actual_link;?>/dist/js/bootstrap-wysuhtml5-data.js"></script>

					<!-- Data table JavaScript -->
					<script src="<?= $actual_link;?>/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
					<script src="<?= $actual_link;?>/dist/js/dataTables-data.js"></script>
					<script src="<?= $actual_link;?>/dist/js/employee-js.js"></script>
					<!-- Slimscroll JavaScript
					<script src="<?= $actual_link;?>/dist/js/jquery.slimscroll.js"></script> -->

					<!-- Owl JavaScript -->
					<script src="<?= $actual_link;?>/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

					<!-- Switchery JavaScript -->
					<script src="<?= $actual_link;?>/vendors/bower_components/switchery/dist/switchery.min.js"></script>

					<!-- Init JavaScript -->
					<script src="<?= $actual_link;?>/dist/js/init.js"></script>
   </head>
  </body>
</html>
