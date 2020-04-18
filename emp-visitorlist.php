<?php

$con=mysqli_connect('localhost','shan','root','vms');
if(!$con)
{
	die('error');
}

$sql="SELECT * FROM visitor_information where visitor_id='139'";
//DATE(created_date)=DATE(NOW())
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
		<?php include_once("emp-topmenu.php");?>
    <?php include_once("emp-sidebar.php");?>
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
                          <th>visitor Name</th>
                          <th>Phone No.</th>
                          <th>Email</th>
													<th>Purpose</th>
                          <th>Company Name</th>
                          <th>Company Phone No.</th>
                          <th>Meeting Time</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
													<th>No.</th>
                          <th>visitor Name</th>
                          <th>Phone No.</th>
                          <th>Email</th>
													<th>Purpose</th>
                          <th>Company Name</th>
                          <th>Company Phone No.</th>
                          <th>Meeting Time</th>
                          <th>Action</th>

                        </tr>
                      </tfoot>
                      <tbody>
                        <?php
														$cnt=1;
                            while($row = mysqli_fetch_assoc($res)) {
                              echo "<tr>";
															echo "<td>" .$cnt."</td>";
                              echo "<td>" .$row['visitor_name'] ."</td>";
                              echo "<td>" .$row['visitor_phone_no'] ."</td>";
                              echo "<td>". $row['visitor_email']. "</td>";
															echo "<td>". $row['meeting_purpose']. "</td>";
                              echo "<td>" .$row['visitor_company_name'] ."</td>";
                              echo "<td>" .$row['visitor_company_phone'] ."</td>";
                              echo "<td>" .$row['visitor_meeting_time'] ."</td>";
                              ?>
                              <td><input type="submit" name="" value="Approve" class="btn btn-primary" style="width:82px; height:34px; padding:6px;"><a href="update.php?id=<?php echo $row['visitor_id']; ?>"></a></input>&nbsp; &nbsp; <input type="submit" name="" value="Cancel" class="btn btn-default" style="width:79px; height:36px; padding:6px;"></input></td>
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
        </div>

      </div>
  <?php include_once("admin_footer.php");?>
    </form>
</body>

</html>
