<?php

if(isset($_POST['add']))
{
//  $photo=$_POST['photo'];

$msg="";
  $con=mysqli_connect('localhost','shan','root','vms');
  if(!$con)
  {
  	die('error');
  }



    $target = "image/". basename($_FILES["photo"]["name"]);

    $photo = $_FILES['photo']['name'];
    $admin_name=$_POST['admin_name'];
    $email=$_POST['email'];
    $contact_no=$_POST['contact_no'];
    $username=$_POST['username'];
    $password=$_POST['password'];
       // Insert record
       $query = "INSERT INTO admin(admin_name,email,contact_no,username,password,photo)VALUES('$admin_name','$email','$contact_no','$username','$password','$photo')";

       mysqli_query($con,$query);

       // Upload file
      if(move_uploaded_file($_FILES['photo']['tmp_name'],$target));{
        $msg="seccess";
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
      <a href="<?= $actual_link;?>/security_roster.php"><button class="btn btn-circle" name="security_roster" style="background-color:green;"><i class="fa fa-arrow-left fa-4x" aria-hidden="true"></i></button></a>

      </ol>
    </div>
    <!-- /Breadcrumb -->
  </div>
				<!-- Row -->
        <!-- /Title -->
  <form method="POST" enctype="multipart/form-data">
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
                        <label class="control-label mb-10">admin Name</label>
                        <input type="text" class="form-control" placeholder="admin Name" name="admin_name" required/>
                        <!--<span class="help-block"> This is inline help </span>-->
                      </div>
                    </div>

                    <!--/span-->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="control-label mb-10">email</label>
                        <input type="text" class="form-control" placeholder="email" name="email" required/>
                        <!--<span class="help-block"> This is inline help </span>-->
                      </div>
                    </div>
                  </div>
                    <!--/span-->



                  <div class="row">
                     <div class="col-md-6">
                         <div class="form-group">
                         <label class="control-label mb-10">contact_no</label>
                         <input type="text" class="form-control" placeholder="contact_no" name="contact_no" required/>
                         <!--<span class="help-block"> This is inline help </span>-->
                       </div>
                      </div>

                                        <!--/span-->
                    <div class="col-md-6">
                      <div class="form-group">
                         <label class="control-label mb-10">username</label>
                           <input type="text" class="form-control" name="username">

                        </div>
                   </div>
                  </div>
                </div>



                                  <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                         <label class="control-label mb-10">password</label>
                                         <input type="text" class="form-control" placeholder="password" name="password" required/>
                                         <!--<span class="help-block"> This is inline help </span>-->
                                       </div>
                                      </div>

                                                        <!--/span-->
                                    <div class="col-md-6">
                                      <div class="form-group">
                                         <label class="control-label mb-10">photo</label>
                                           <input type="file" class="form-control" name="photo">

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
