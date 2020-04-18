<?php
$con=mysqli_connect('localhost','shan','root','vms');
if(!$con)
{
	die('error');
}
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];

$sql="select gatepass_master.visitor_id,visitor_information.visitor_name,visitor_information.visitor_email,visitor_information.visitor_phone_no,visitor_information.visitor_company_name,visitor_information.visitor_phone_no,visitor_information.visitor_company_phone,visitor_information.visitor_meeting,visitor_information.visitor_address,gatepass_master.entry_time,gatepass_master.exit_time,visitor_information.status FROM gatepass_master,visitor_information WHERE gatepass_master.visitor_id = visitor_information.visitor_id and created_date between '$fromdate' and '$todate'";
$res = mysqli_query($con,$sql);
//$cnt=1;
//$sql = "SELECT gatepass_master.visitor_id,visitor_information.visitor_name,visitor_information.visitor_email,visitor_information.visitor_phone_no,visitor_information.visitor_company_name FROM gatepass_master,visitor_information WHERE gatepass_master.visitor_id = visitor_information.visitor_id AND DATE(created_date)=DATE(NOW()) ";
//$res=mysqli_query($con,$sql);

//$sql="select * from visitor_information where created_date between '$fromdate' and '$todate'";
//$res = mysqli_query($con,$sql);

function fetch_data()
{
	$con=mysqli_connect('localhost','shan','root','vms');
	if(!$con)
	{
		die('error');
	}
     $output = '';
     $sql1 = "SELECT * FROM visitor_information";
     $result = mysqli_query($con, $sql1);
		// $cnt=1;
     while($row = mysqli_fetch_array($result))
     {
     $output .= '<tr>

                         <td>'.$row["visitor_name"].'</td>
                         <td>'.$row["visitor_phone_no"].'</td>
                         <td>'.$row["visitor_email"].'</td>
                         <td>'.$row["visitor_address"].'</td>
                         <td>'.$row["visitor_meeting"].'</td>
												 <td>'.$row["visitor_company_name"].'</td>
												 <td>'.$row["visitor_company_phone"].'</td>
												 <td>'.$row["visitor_meeting_time"].'</td>
												 <td>'.$row["exit_time"].'</td>
                         <td><a class="text-inverse" title="Delete" data-toggle="tooltip" href="/vms/delete.php"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
                    </tr>
                         ';
											//	 $cnt=$cnt+1;
     }
     return $output;
}
if(isset($_POST["export"]))
{
     require_once('tcpdf/tcpdf.php');
     $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
     $obj_pdf->SetCreator(PDF_CREATOR);
     $obj_pdf->SetTitle("Visitor Report");
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
							<th>No.</th>
							<th>visitor Name</th>
							<th>Phone No.</th>
							<th>Email</th>
							<th>Address</th>
							<th>Meeting</th>
							<th>Company Name</th>
							<th>Company Phone No.</th>
							<th>Meeting Date And Time</th>
							<th>Exit Time</th>
			    </tr>
     ';
     $content .= fetch_data();
     $content .= '</table>';
     $obj_pdf->writeHTML($content);
     $obj_pdf->Output('Visitor Report.pdf', 'I');
}


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
				<form method="GET">

				</form>
        <div class="row heading-bg">
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark"></h5><br>

          </div>
        </div>

        <div class="panel panel-default card-view">
          <div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Visitor Details</h6>
						</div><br><br>
						  <div class="clearfix"></div>
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
                      <th>Address</th>
                      <th>Meeting</th>
                      <th>Company Name</th>
                      <th>Company Phone No.</th>
                      <th>Meeting Time</th>
                      <th>Exit Time</th>
											<th>Action</th>

                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>visitor Name</th>
                      <th>Phone No.</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Meeting</th>
                      <th>Company Name</th>
                      <th>Company Phone No.</th>
                      <th>Meeting Date And Time</th>
                      <th>Exit Time</th>
											<th>Action</th>

                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                        $cnt=1;
                        while($row = mysqli_fetch_array($res)) {
                          echo "<tr>";
                          echo "<td>" .$cnt."</td>";
                          echo "<td>" .$row['visitor_name'] ."</td>";
                          echo "<td>" .$row['visitor_phone_no'] ."</td>";
                          echo "<td>". $row['visitor_email']. "</td>";
                          echo "<td>" .$row['visitor_address'] ."</td>";
                          echo "<td>" .$row['visitor_meeting'] ."</td>";
                          echo "<td>" .$row['visitor_company_name'] ."</td>";
                          echo "<td>" .$row['visitor_company_phone'] ."</td>";
                          echo "<td>" .$row['entry_time'] ."</td>";
                          echo "<td>" .$row['exit_time'] ."</td>";
													if($row['status']==0)
													{
													?>
													<td><a class="text-inverse" title="Block" data-toggle="tooltip" href="blockvisitor.php?visitor_name=<?php echo $row['visitor_name']; ?>"><i class="fa fa-ban" aria-hidden="true" style="color:red;"></i></a></td>
													<?php }
													elseif($row['status']==1)
													{
													?>
														<td><a class="text-inverse" title="Unblock" data-toggle="tooltip" href="blockvisitor.php?visitor_name=<?php echo $row['visitor_name']; ?>"><i class="fa fa-check" aria-hidden="true" style="color:green;"></i></a></td>
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
						<input type="submit" name="export" value="Export to Excel" class="btn btn-primary" style="width:120px; height:34px; padding:6px;">
          </div>
        </div>
      </div>
      </div>

          <?php include_once("admin_footer.php");?>
  </div>
		        </form>
        </body>

        </html>
