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

				</form>
        <div class="row heading-bg">
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark"></h5><br>

          </div>
          <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
              <a href="add_employee.php"><button class="btn btn-circle btn-primary" name="add_employee" ><i class="fa fa-plus-circle fa-4x" aria-hidden="true"></i></button></a>
            </ol>
          </div>

        </div>
        <form method="post" enctype="multipart/form-data">
        <div class="panel panel-default card-view">
          <div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Employee</h6>
						</div><br><br>
						  <div class="clearfix"></div>
          <div class="panel-body">
            <div class="table-wrap">
              <div class="table-responsive">
                <table id="datable_2" class="table table-hover table-bordered display mb-30" >
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Photo</th>
                      <th>Employee Name</th>
                      <th>Mobile No.</th>
                      <th>Email</th>
                      <th>Gender</th>
                      <th>Address</th>
                      <th>User Role</th>
                      <th>Department</th>
                      <th>Status</th>
                      <th>Action</th>

                    </tr>
                  </thead>
                  <tfoot>

                      <tr>
                        <th>No.</th>
                        <th>Photo</th>
                        <th>Employee Name</th>
                        <th>Mobile No.</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>User Role</th>
                        <th>Department</th>
                        <th>Status</th>
                        <th>Action</th>

                      </tr>
                    </tfoot>
                  <tbody>
                    <?php
                        $cnt=1;
                        while($row = mysqli_fetch_array($res)) {
                          echo "<tr>";
                          echo "<td>" .$cnt."</td>";
                          echo "<td><img class='inline-block mb-10' width='56px' height='53px' style='border-radius:28px;'  src='image/".$row['employee_photo']."' >"; "</td>";
                          echo "<td>" .$row['employee_name'] ."</td>";
                          echo "<td>". $row['employee_phone_no']. "</td>";
                          echo "<td>" .$row['employee_email'] ."</td>";
                          echo "<td>" .$row['employee_gender'] ."</td>";
                          echo "<td>" .$row['employee_address'] ."</td>";
                          echo "<td>" .$row['user_role'] ."</td>";
                          echo "<td>" .$row['department'] ."</td>";
                          if($row['status']==1)
                          {
                            echo "<td><input type='checkbox' name='status' Checked> </td>";
                          }
                          else {
                            echo "<td><input type='checkbox' name='status'> </td>";
                          }
                         ?>
                         <td><button name="update" class="btn btn-primary" style="width:85px; height:35px; padding:0px;"><a href="update.php?id=<?php echo $row['employee_id']; ?>" class="text-white">Update</a></button></td>;
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

          <?php include_once("admin_footer.php");?>
  </div>
		        </form>
        </body>

        </html>
