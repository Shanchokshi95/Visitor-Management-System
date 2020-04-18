<?php

$con=mysqli_connect('localhost','shan','root','vms');
if(!$con)
{
	die('error');
}

$sql="SELECT * FROM visitor_information where DATE(created_date)=DATE(NOW())";
$res=mysqli_query($con,$sql);

//$sql = "SELECT gatepass_master.visitor_id,visitor_information.visitor_name,visitor_information.visitor_email,visitor_information.visitor_phone_no,visitor_information.visitor_company_name FROM gatepass_master,visitor_information WHERE gatepass_master.visitor_id = visitor_information.visitor_id AND DATE(created_date)=DATE(NOW()) ";
//$res=mysqli_query($con,$sql);
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
            <h5 class="txt-dark">Visitors List</h5><br>

          </div>
        </div>

        <form method="POST" action="admin-visitordetail.php">

            <div class="row">
              <div class="col-sm-12 col-xs-11">
                <div class="panel panel-default card-view">
                  <form method="POST" enctype="multipart/form-data">
                  <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-12 col-xs-12">
                          <div class="panel panel-default card-view">
                           <div class="form-wrap">


                             <div class="row">
                                 <div class="col-md-6">
                                 <div class="form-group">
                                   <label class="control-label mb-10" for="exampleInputpwd_1">From Date</label>
                                   <div class="input-group">
                                     <div class="input-group-addon"> <i class="ti-time"></i></div>
                                     <input type="date" class="form-control" id="exampleInputpwd_1"  name="fromdate">
                                   </div>
                                 </div>
                               </div>
                             <div class="row">
                                 <div class="col-md-6">
                                 <div class="form-group">
                                   <label class="control-label mb-10" for="exampleInputpwd_2">To Date</label>
                                   <div class="input-group">
                                     <div class="input-group-addon"> <i class="ti-time"></i></div>
                                     <input type="date" class="form-control" id="exampleInputpwd_2"  name="todate">
                                   </div>
                                 </div>
                               </div>
                             </div>
                             	<button type="submit" class="btn btn-primary mr-10" name="submit" style="margin:15px;">Submit</button>
                           </div>
                         </div>
                          </div>
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
