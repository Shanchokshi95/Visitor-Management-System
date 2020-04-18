<?php
$con=mysqli_connect('localhost','shan','root','vms');
if(!$con)
{
	die('error');
}

$sqladmin = "SELECT count(employee_id) as total FROM employee_master WHERE user_role='admin' ";
$res = mysqli_query($con,$sqladmin);
$row = mysqli_fetch_assoc($res);
$num_rows = $row['total'];

$sqlemp = "SELECT count(employee_id) as total FROM employee_master WHERE user_role='employee'";
$res = mysqli_query($con,$sqlemp);
$row = mysqli_fetch_assoc($res);
$num_rows1 = $row['total'];

$sql2 = "SELECT count(employee_id) as total FROM employee_master WHERE user_role='security' ";
$res = mysqli_query($con,$sql2);
$row = mysqli_fetch_assoc($res);
$num_rows2 = $row['total'];
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
	 <!-- Preloader -->

 	<!-- /Preloader -->
 		<!-- /Left Sidebar Menu -->

 		<!-- Right Sidebar Menu -->

 		<!-- /Right Sidebar Menu -->



 		<!-- Right Sidebar Backdrop -->
 		<div class="right-sidebar-backdrop"></div>
 		<!-- /Right Sidebar Backdrop -->

         <!-- Main Content -->
 		<div class="page-wrapper">
             <div class="container-fluid pt-25">
 				<!-- Row -->

	 <!-- Row -->
	 <div class="row">


	 	<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
	 							 <div class="panel panel-default card-view panel-refresh">

	 			<div class="panel-heading">
	 				<div class="pull-left">
	 					<h6 class="panel-title txt-dark">Total User</h6>
	 				</div>

	 				<div class="clearfix"></div>
	 			</div>
	 			<div class="panel-wrapper collapse in">
	 				<div class="panel-body">
	 					<div>
	 						<canvas id="chart_6_php" height="191"></canvas>
	 					</div>
	 					<hr class="light-grey-hr row mt-10 mb-15"/>
	 					<div class="label-chatrs">
	 						<div class="">
	 							<span class="clabels clabels-lg inline-block bg-blue mr-10 pull-left"></span>
	 							<span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5"><?php echo $num_rows2; ?> Security</span></span>
	 							<div class="clearfix"></div>
	 						</div>
	 					</div>
	 					<hr class="light-grey-hr row mt-10 mb-15"/>
	 					<div class="label-chatrs">
	 						<div class="">
	 							<span class="clabels clabels-lg inline-block bg-green mr-10 pull-left"></span>
	 							<span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5"><?php echo $num_rows1; ?> Employee</span></span>
	 							<div class="clearfix"></div>
	 						</div>
	 					</div>
	 					<hr class="light-grey-hr row mt-10 mb-15"/>
	 					<div class="label-chatrs">
	 						<div class="">
	 							<span class="clabels clabels-lg inline-block bg-yellow mr-10 pull-left"></span>
	 							<span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5"><?php echo $num_rows; ?> Admin</span></span>
	 							<div class="clearfix"></div>
	 						</div>
	 					</div>
	 				</div>
	 			</div>
	 		</div>
	 	</div>

		

	 <!-- /Row -->

	 <!-- Row -->

	 <!-- Row -->
	 </div>

	 <!-- Footer -->

	 <!-- /Footer -->

	 </div>
	 <!-- /Main Content -->

	 </div>
	 <!-- /#wrapper -->

	 <!-- JavaScript -->

	 <!-- jQuery -->
	 <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>

	 <!-- Bootstrap Core JavaScript -->
	 <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	 <!-- Data table JavaScript -->
	 <script src="vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>

	 <!-- Slimscroll JavaScript -->
	 <script src="dist/js/jquery.slimscroll.js"></script>

	 <!-- simpleWeather JavaScript -->
	 <script src="vendors/bower_components/moment/min/moment.min.js"></script>
	 <script src="vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
	 <script src="dist/js/simpleweather-data.js"></script>

	 <!-- Progressbar Animation JavaScript -->
	 <script src="vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
	 <script src="vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>

	 <!-- Fancy Dropdown JS -->
	 <script src="dist/js/dropdown-bootstrap-extended.js"></script>

	 <!-- Sparkline JavaScript -->
	 <script src="vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>

	 <!-- Owl JavaScript -->
	 <script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

	 <!-- ChartJS JavaScript -->
	 <script src="vendors/chart.js/Chart.min.js"></script>

	 <!-- Morris Charts JavaScript -->
	 <script src="vendors/bower_components/raphael/raphael.min.js"></script>
	 <script src="vendors/bower_components/morris.js/morris.min.js"></script>
	 <script src="vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

	 <!-- Switchery JavaScript -->
	 <script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>

	 <!-- Init JavaScript -->
	 <script src="dist/js/init.js"></script>
	 <script src="dist/js/dashboard-data.js"></script>
	 </body>

	 </html>



 		<?php include_once("admin_footer.php");?>
		</body>
		<script>
		if( $('#chart_6_php').length > 0 ){
			var ctx6 = document.getElementById("chart_6_php").getContext("2d");
			var data6 = {
				 labels: [
				"Admin",
				"Employee",
				"Security"
			],
			datasets: [
				{
					data: [<?php echo $num_rows; ?>,<?php echo $num_rows1; ?>,<?php echo $num_rows2; ?>],
					backgroundColor: [
						"rgba(240,197,65,.6)",
						"rgba(46,205,153,.6)",
						"rgba(78,157,230,.6)",
					],
					hoverBackgroundColor: [
						"rgba(240,197,65,.6)",
						"rgba(46,205,153,.6)",
						"rgba(78,157,230,.6)",
					]
				}]
			};

			var doughnutChart  = new Chart(ctx6,{
				type: 'doughnut',
				data: data6,
				options: {
					animation: {
						duration:	3000
					},
					responsive: true,
					maintainAspectRatio:false,
					legend: {
						display:false
					},
					tooltip: {
						backgroundColor:'rgba(33,33,33,1)',
						cornerRadius:0,
						footerFontFamily:"'Poppins'"
					},
					elements: {
						arc: {
							borderWidth: 0
						}
					}
				}
			});
		}

	</script>
	</html>
