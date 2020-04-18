<?php
function fetch_data()
{
     $output = '';
     $connect = mysqli_connect("localhost", "shan", "root", "vms");
     $sql = "SELECT * FROM security_roster ORDER BY id ASC";
     $result = mysqli_query($connect, $sql);
     while($row = mysqli_fetch_array($result))
     {
     $output .= '<tr>
                         <td>'.$row["id"].'</td>
                         <td>'.$row["security_name"].'</td>
                         <td>'.$row["gate_number"].'</td>
                         <td>'.$row["shift"].'</td>
                         <td>'.$row["duty_time"].'</td>
                         <td><a href="#" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
                    </tr>
                         ';
     }
     return $output;
}
if(isset($_POST["print"]))
{
     require_once('tcpdf/tcpdf.php');
     $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
     $obj_pdf->SetCreator(PDF_CREATOR);
     $obj_pdf->SetTitle("Monthly Security Roster");
     $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
     $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
     $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
     $obj_pdf->SetDefaultMonospacedFont('helvetica');
     $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
     $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
     $obj_pdf->setPrintHeader(false);
     $obj_pdf->setPrintFooter(false);
     $obj_pdf->SetAutoPageBreak(TRUE, 10);
     $obj_pdf->SetFont('helvetica', '', 14);
     $obj_pdf->AddPage();
     $content = '';
     $content .= '
     <h3 align="center">Monthly Security Roster</h3><br /><br />
     <table border="1" cellspacing="0" cellpadding="5">
          <tr>
               <th>ID</th>
               <th>security name</th>
               <th>gate number</th>
               <th>shift</th>
               <th>duty time</th>
          </tr>
     ';
     $content .= fetch_data();
     $content .= '</table>';
     $obj_pdf->writeHTML($content);
     $obj_pdf->Output('security-roster.pdf', 'I');
}

		if(isset($_POST['upload'])){
      $connect = mysqli_connect("localhost", "shan", "root", "vms");
		    $filename = $_FILES["file"]["tmp_name"];
		    if($_FILES["file"]["size"] > 0)
		    {

		        $file = fopen($filename, "r");

		        while (($col = fgetcsv($file, 10000, ",")) !== FALSE)
		        {
		           // echo'<pre>'; print_r($col);
		            $insert = "INSERT INTO security_roster (security_name,gate_number,shift,duty_time)values('".$col[0]."','".$col[1]."','".$col[2]."','".$col[3]."')";
		            mysqli_query($connect,$insert);
		        }
		       $result='<div class="alert alert-success">Employee Data successfully Uploaded....</div>';
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
			<h4 class="txt-dark">Security Roster</h4>
		</div>
		<!-- Breadcrumb -->
		<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
			<ol class="breadcrumb">
			<a href="add_security.php"><button class="btn btn-circle" name="add_securit" style="background-color:green;"><i class="fa fa-plus-circle fa-4x" aria-hidden="true"></i></button></a>

			</ol>
		</div>
		<!-- /Breadcrumb -->
	</div>
	<!-- /Title -->

				<!-- Row -->
        <div class="row">
					<form method="post" enctype='multipart/form-data'>


          <div class="col-sm-12">
              <div class="panel panel-default card-view">
              <div class="panel-heading">
                <div class="pull-left">
                  <h6 class="panel-title txt-dark"></h6>
                </div>
                <div class="clearfix"></div>

              </div>
                    <div class="panel-wrapper collapse in">
                      <div class="panel-body">
                        <div class="table-wrap">
                          <div class="table-responsive">
                          <table  class="table table-striped table-bordered" style="width:100%">

                              <thead>
                               <tr>
                                  <th>ID</th>
                                  <th>Security Name</th>
                                  <th>Gate Number</th>
																	<th>Shift</th>
																	<th>Duty Time</th>
																	<th>Action</th>
																</tr>
                              </thead>
															<tbody>

                    <?php
                    echo fetch_data();
                    ?>
                  </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
                    <div class="row">
      								<div class="col-sm-6 ol-md-6 col-xs-12">
      									<div class="panel panel-default card-view">
      										<div class="panel-heading">
      											<div class="pull-left">
      												<h6 class="panel-title txt-dark">Upload Excel File</h6>
      											</div>
      											<div class="clearfix"></div>
      										</div>
      										<div class="panel-wrapper collapse in">
      											<div class="panel-body">
      												<!--<p class="text-muted">You can add a max file size by <code>data-max-file-size</code>.</p>-->
      												<div class="mt-40">
      													<input type='file' name='file' class="form-control" />
      												</div>
      											</div>
      										</div>
      									</div>
      								</div>
      							</diV>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <button class="btn  btn-success" class="form-control" name="upload">Upload</button>
                          <button class="btn  btn-success" class="form-control" name="print">Print</button>
                        </div>
                      </div>


      						<div class="col-sm-10 col-sm-offset-2"style=" width: 400px; height:60px; margin-left:-38px; padding: 25px;">
      							 <?php echo $result; ?>
      						</div>

      </form>

      		<?php include_once("admin_footer.php");?>


      </body>

      <!-- Form Flie Upload Data JavaScript -->
      <script src="dist/js/form-file-upload-data.js"></script>

      <!-- Bootstrap Daterangepicker JavaScript -->
      <script src="vendors/bower_components/dropify/dist/js/dropify.min.js"></script>

      </html>
