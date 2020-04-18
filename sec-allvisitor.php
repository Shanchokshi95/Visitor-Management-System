<?php
$con=mysqli_connect('localhost','shan','root','vms');
if(!$con)
{
	die('error');
}

$sql="SELECT * FROM visitor_information";
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
		<?php include_once("sec-topmenu.php");?>
		<?php include_once("sec-sidebar.php");?>
		<!-- Right Sidebar Backdrop -->

		<div class="right-sidebar-backdrop"></div>
		<!-- /Right Sidebar Backdrop -->
									<!-- Main Content -->
    <div class="page-wrapper">
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">Visitor Details</h6>
              </div>

              <div class="pull-right">
               <div class="col-md-6 col-sm-6 form-group">

            <!--<input type="text" placeholder="Search Visitor" class="form-control" style="margin-left:370px;">
						<button type="button" name="search" style="margin-left:410px;">Search</button>-->
						<div class="input-group mb-15">
							<input type="text" id="example-input1-group4" name="example-input1-group4" class="form-control" placeholder="Search" style="margin-left:568px;">
						<span class="input-group-btn">
								<button type="button" class="btn  btn-primary" style="margin-left:567px;"><i class="fa fa-search"></i></button>
								</span>
						</div>
              </div>
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
                          <th> Visitor Name</th>
                          <th>Phone No.</th>
                          <th>Company Name</th>
                          <th>GatePass</th>

                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>No.</th>
                          <th> Visitor Name</th>
                          <th>Phone No.</th>
                          <th>Company Name</th>
                          <th>GatePass</th>
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
                              echo "<td>" .$row['visitor_company_name'] ."</td>";
                              if($row['status']==0)
    													{
    													?>
    													  <td><input type="submit" name="" value="GatePass" class="btn btn-primary" style="width:82px; height:34px; padding:6px;"><a href="update.php?id=<?php echo $row['visitor_id']; ?>"></a></input></td>
                            <?php }
    													elseif($row['status']==1)
    													{
    													?>
    														<td><input type="submit" name="blocked" value="Blocked" class="btn btn-default" style="width:82px; height:34px; padding:6px;"><a href="update.php?id=<?php echo $row['visitor_id']; ?>"></a></input></td>
    													<?php
    													}
                              echo "</tr>";
                              $cnt=$cnt+1;
                              //$cnt = $cnt+1;
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
      <!-- /Row -->
    </div>


















    </div>
<?php include_once("admin_footer.php");?>
<script src="/fixed-width-light/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="/fixed-width-light/dist/js/dataTables-data.js"></script>

  </form>
</body>

</html>
