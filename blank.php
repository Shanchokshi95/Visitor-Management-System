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
            <div class="container-fluid">

				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">blank page</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>speciality pages</span></a></li>
							<li class="active"><span>blank page</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->

				<div class="panel panel-default card-view">
			
				<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Mobile No</th>
						<th>Username</th>
						<!--<th>Password</th>-->
						<th>Email</th>
						<th>Gender</th>
					<!--	<th>DOB</th>-->
						<th>Address</th>
						<th>Photo</th>
						<!--<th>Document</th>-->
						<th>Department</th>
						<th>Designation</th>

						<th>status</th>

        </thead>
				<tbody>

					<?php
							while($row = mysqli_fetch_assoc($res)) {

								echo "<tr>";
								echo "<td>" .$row['employee_id'] ."</td>";
								echo "<td>" .$row['employee_name'] ."</td>";
								echo "<td>". $row['employee_phone_no']. "</td>";
								echo "<td>" .$row['employee_user'] ."</td>";
								 // echo "<td>" .$row['employee_password'] ."</td>";
								echo "<td>" .$row['employee_email'] ."</td>";
								echo "<td>" .$row['employee_gender'] ."</td>";
							//   echo "<td>" .$row['employee_dob'] ."</td>";
								 echo "<td>" .$row['employee_address'] ."</td>";
								 echo "<td>" .$row['employee_photo'] ."</td>";
								// echo "<td>" .$row['employee_document'] ."</td>";
								 echo "<td>" .$row['employee_department'] ."</td>";
								 echo "<td>" .$row['employee_designation'] ."</td>";

								 if($row['status']==1)
								 {
									 echo "<td><input type='checkbox' name='status' Checked> </td>";
								 }
								 else{

										echo "<td><input type='checkbox' name='status'> </td>";

								}?>

								<td><button name="update" class="btn btn-success txt-white" style="width:100px;"><a href="update.php?id=<?php echo $row['employee_id']; ?>" class="text-white">Update</a></button></td>;
									<?php
										 echo "</tr>";
							 }
						 ?>

				</tbody>
			</table>
</div>

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


</body>

</html>
