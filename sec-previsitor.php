<?php
$con=mysqli_connect('localhost','shan','root','vms');
if(!$con)
{
	die('error');
}
//$status=$_POST['status'];
//$sql="select * from visitor_information";
//$res=mysqli_query($con,$sql);
//$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
//$visitor_meeting=$row['visitor_meeting'];
$sql="select * from visitor_information where visitor_meeting='premeeting'";
//if($visitor_meeting=="premeeting")
//{

  $res=mysqli_query($con,$sql);
	$_SESSION['visitor_id']=$visitor_id;
  //$row = mysqli_fetch_array($res,MYSQLI_ASSOC);

//}
/*if(isset($_GET["gatepass"]))
{
     require_once('tcpdf/tcpdf.php');
		 $sql = "select * from visitor_information ";
		 $res=mysqli_query($con,$sql);
	   $row = mysqli_fetch_array($res,MYSQLI_ASSOC);

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
		 $obj_pdf->cell(130 ,5,$row['visitor_name'],0,1);
     $obj_pdf->AddPage();

		   $con=mysqli_connect('localhost','shan','root','vms');
		   if(!$con)
		   {
		   	die('error');
		   }

		 $sql="SELECT * FROM visitor_information WHERE visitor_id = '".$_GET['visitor_id']."' ";
		 $res = mysqli_query($con,$sql);
		 while($row= (mysqli_fetch_array($res,MYSQLI_ASSOC)))
		 {
    $name = $row['visitor_name'];
    $address = $row['visitor_id'];
    $class = $row['vsitor_email'];
    $phone = $row['visitor_phone_no'];

    $obj_pdf->SetXY (20,60);
    $obj_pdf->SetFontSize(12);
    $obj_pdf->SetTextColor(0,0,0);
    $obj_pdf->Write(7,$name);
    $obj_pdf->SetXY (20,65);
    $obj_pdf->Write(7,$address);
    $obj_pdf->SetXY (20,70);
    $obj_pdf->Write(7,$class);
    $obj_pdf->SetXY (20,90);
    $obj_pdf->Write(7,$phone);
    $obj_pdf->Ln();
}
     $content = '';
     $content .= '
     <h3 align="center">Visitor Gate Pass</h3><br /><br />
      Visitor Name:<br>
		 Phone No:<br>
		 Email:<br>
		 Company Name:<br>
		 In Time:<br>
     ';
     $content .=
		 //$content .=
		// $content .= fetch_data();
     //$content .= '</table>';
     $obj_pdf->writeHTML($content);
     $obj_pdf->Output('GatePass.pdf', 'I');

}
*/

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
								<!-- Title -->
        <div class="row heading-bg">
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">Pre Visitor List</h5><br>
          </div>
        </div>
		<form action="visitor_gatepass.php" method="POST">
		<?php
      while($row = mysqli_fetch_array($res,MYSQLI_ASSOC)) { ?>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-primary contact-card card-view">
              <div class="panel-heading">
                <div class="pull-left">
                  <div class="pull-left user-img-wrap mr-15">
                    <?php echo "<img class='card-user-img img-circle pull-left' width='80px' height='80px' src='image/". $row['visitor_photo']."' > "; ?>
                  </div>
                  <div class="pull-left user-detail-wrap">
                    <span class="block card-user-name">
                      <?php echo $row['visitor_name']; ?>
                    </span>
                 </div>
                </div>
                <!--<div class="pull-right">
                  <a class="pull-left inline-block mr-15" href="#">
                    <i class="zmdi zmdi-delete txt-light"></i>
                  </a>
               </div>-->
                <div class="clearfix"></div>
              </div>
              <div class="panel-wrapper collapse in">
                <div class="panel-body row">
                  <div class="user-others-details pl-15 pr-15">
                    <div class="mb-15">
                      <i class="zmdi zmdi-email-open inline-block mr-10"></i>
                      <span class="inline-block txt-dark"><?php echo $row['visitor_email']; ?></span>
                    </div>
                    <div class="mb-15">
                      <i class="fa fa-industry" aria-hidden="true"></i>&nbsp;&nbsp;
                      <span class="inline-block txt-dark"><?php echo $row['visitor_company_name']; ?></span>
                    </div>
                    <div class="mb-15">
                      <i class="zmdi zmdi-phone inline-block mr-10"></i>
                      <span class="inline-block txt-dark"><?php echo $row['visitor_phone_no']; ?></span>
                    </div>
                 </div>
                  <hr class="light-grey-hr mt-20 mb-20"/>
                  <div class="emp-detail pl-15 pr-15">
                    <div class="mb-5">
                      <span class="inline-block capitalize-font mr-5">Meeting Time:</span>
                      <span class="txt-dark"><?php echo $row['visitor_meeting_time']; ?></span>
                    </div>
                  </div>
                  <div class="emp-detail pl-15 pr-15">
                    <div class="mb-5 pull-right">
                    <button name="gatepass" class="btn btn-primary" style="width:79px; height:34px; padding:6px; margin-top:-50px;"><a href="visitor_gatepass.php?visitor_id=<?php echo $row['visitor_id']; ?>" style="color:white;">GatePass</a></button>
                    </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
<?php }?>
      </div>
    </div>
        <?php include_once("admin_footer.php");?>
          </form>
    </body>

  </html>
