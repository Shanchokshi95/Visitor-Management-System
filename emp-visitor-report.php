<?php

$con=mysqli_connect('localhost','shan','root','vms');
if(!$con)
{
	die('error');
}
//$sql = "SELECT * FROM notify_visitor INNER JOIN visitor_information ON notify_visitor.visitor_id = visitor_information.visitor_id ";
//$res=mysqli_query($con,$sql);

//$sql = "SELECT notify_visitor.receiver_id,notify_visitor.visitor_id,notify_visitor.request_id,employee_master.employee_name,visitor_information.visitor_name,visitor_information.visitor_email,visitor_information.visitor_phone_no,visitor_information.visitor_company_name FROM notify_visitor,employee_master,visitor_information WHERE notify_visitor.visitor_id = visitor_information.visitor_id AND notify_visitor.receiver_id = employee_master.employee_id  ";
//$res=mysqli_query($con,$sql);
//echo $sql;
//die();
//$sql2 = ""

$sql = "SELECT gatepass_master.employee_id,gatepass_master.visitor_id,employee_master.employee_name,visitor_information.visitor_name,visitor_information.visitor_email,visitor_information.visitor_phone_no,visitor_information.visitor_company_name,gatepass_master.difference
 FROM gatepass_master,employee_master,visitor_information
 WHERE gatepass_master.visitor_id = visitor_information.visitor_id AND gatepass_master.employee_id = employee_master.employee_id ";
$res=mysqli_query($con,$sql);
//echo $sql;



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
            <h5 class="txt-dark"></h5><br>

          </div>
        </div>

        <form method="POST">

        <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">Employee's Visitor</h6>
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
                          <th>Employee Name</th>
                          <th>Visitor Name</th>
                          <th>Visitor PhoneNo.</th>
													<th>Company Name</th>
                          <th>Time Spent(In Hour)</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
													<th>No.</th>
                          <th>Employee Name</th>
                          <th>Visitor Name</th>
                          <th>Visitor PhoneNo.</th>
													<th>Company Name</th>
                          <th>Time Spent(In Hour)</th>
                        </tr>
                      </tfoot>
                      <tbody>
                <?php
                    $cnt=1;
                    while($row = mysqli_fetch_assoc($res)) {

                      echo "<tr>";
                      echo "<td>" .$cnt."</td>";
                      echo "<td>" .$row['employee_name'] ."</td>";
                      echo "<td>" .$row['visitor_name'] ."</td>";
                      echo "<td>" .$row['visitor_phone_no'] ."</td>";
                      echo "<td>" .$row['visitor_company_name'] ."</td>";
											echo "<td>" .$row['difference'] ."</td>";
									//		echo "<td>" .$row['entry_time,exit_time'] ."</td>";

											echo "</tr>";
                        $cnt=$cnt+1;}

                      ?>
                    </tbody>
                  </table>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
          </div>
         </div>
    <?php include_once("admin_footer.php");?>
      </form>
    </body>
</html>
