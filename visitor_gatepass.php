<?php
/*function fetch_data()
  {
//       $output = '';
       $visitor_id = $_GET['visitor_id'];
       $con = mysqli_connect("localhost", "shan", "root", "vms");
       $sql = "SELECT * FROM visitor_information WHERE visitor_id = $visitor_id";
       $res = mysqli_query($con, $sql);
       while($row = mysqli_fetch_array($res))
       {
       $output .= '
                        <tr rowspan="5">
                        <td>visitor id</td>
                        <td>'.$row["visitor_id"].'</td>
                        </tr>
                        <tr>
                        <td>visitor Name</td>
                        <td>'.$row["visitor_name"].'</td>
                        </tr>
                        <tr>
                        <td>visitor Email</td>
                        <td>'.$row["visitor_email"].'</td>
                        </tr>
                        <tr>
                        <td>visitor Gender</td>
                        <td>'.$row["visitor_gender"].'</td>
                        </tr>
                        <tr>
                        <td>visitor Email</td>
                        <td>'.$row["visitor_email"].'</td>
                        </tr>
                        <tr>
                        <td>visitor Email</td>
                        <td>'.$row["visitor_email"].'</td>
                        </tr>
                        <tr>
                        <td>visitor Email</td>
                        <td>'.$row["visitor_email"].'</td>
                        </tr>
              ';
       }
       return $output;
  }*/


   require_once('tcpdf/tcpdf.php');
     $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
     $obj_pdf->SetCreator(PDF_CREATOR);
     $obj_pdf->SetTitle("Visitor Gate Pass");
     $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
     $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
     //$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
     $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
     $obj_pdf->SetDefaultMonospacedFont('helvetica');
     $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
     $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
     $obj_pdf->setPrintHeader(false);
     $obj_pdf->setPrintFooter(false);
     $obj_pdf->SetAutoPageBreak(TRUE, 10);
     $obj_pdf->SetFont('helvetica', '', 14);
     //$img = file_get_contents(Mage::getBaseDir('vms') . '/image/abdoluteweb.jpg');
     //$PDF_HEADER_LOGO = $tcpdf->Image('@' . $img);
     //$obj_pdf->Image('/var/www/html/vms/image/0.jpeg', 15, 140, 75, 113, 'JPG','', true, 150, '');
     $obj_pdf->AddPage();

     //$obj_pdf->Image('/html/vms/image/absoluteweb.jpg');

     $con = mysqli_connect("localhost", "shan", "root", "vms");
     $visitor_id = $_GET['visitor_id'];
     $sql = "SELECT * FROM visitor_information WHERE visitor_id = $visitor_id";
     $res = mysqli_query($con, $sql);
     //$obj_pdf->Image($imgdata);

     while($row = mysqli_fetch_array($res))
     {
      // $obj_pdf->cell(130,20,'<img src="http://localhost/vms/image/absoluteweb.jpg">',0,0);

      $content = '';
      $content .= ' <h3 align="center"><img src="/var/www/html/vms/image/absoluteweb.jpg"></h3>
                    <hr>
                    ';
       $obj_pdf->writeHTML($content);
       $obj_pdf->cell(120,10,'',0,0);
       $obj_pdf->cell(13,10,'Date:',0,0);
       $obj_pdf->cell(20,10,$row['created_date'],0,1);
       //$img = "<img src='/var/www'>";
       //$obj_pdf->cell(34,20,$img,0,1);
       //echo "<td><img class='inline-block mb-10' width='50px' height='50px' src='image/".$row['employee_photo']."' >"; "</td>";
      // $obj_pdf->cell(10,10,$row['visitor_photo'],0);
      $path = "image/";
      $filename = $row['visitor_photo'];
      $filepath = $path.$filename;
       $obj_pdf->Image($filepath,15,55,40,40);

       $obj_pdf->cell(60,10,'',0,0);
       $obj_pdf->cell(40,10,'Visitor Name:',0,0);
       $obj_pdf->cell(20,10,$row['visitor_name'],0,1);

       $obj_pdf->cell(60,10,'',0,0);
       $obj_pdf->cell(40,10,'Company Name:',0,0);
       $obj_pdf->cell(20,10,$row['visitor_company_name'],0,1);

       $obj_pdf->cell(60,10,'',0,0);
       $obj_pdf->cell(40,10,'Employee Name:',0,0);
       $obj_pdf->cell(20,10,'sagar desai',0,1);


      $obj_pdf->cell(60,10,'',0,0);
      $obj_pdf->cell(40,10,'Meeting Purpose:',0,0);
      $obj_pdf->cell(20,10,$row['meeting_purpose'],0,1);

       $obj_pdf->cell(60,10,'',0,0);
       $obj_pdf->cell(40,10,'Meeting Time:',0,0);
       $obj_pdf->cell(20,10,$row['visitor_meeting_time'],0,1);

    //   $obj_pdf->cell(60,10,'',0,0);
      // $obj_pdf->cell(40,10,'Exit Time:',0,0);
       //$obj_pdf->cell(20,10,'',0,1);

       $obj_pdf->cell(40,10,'',0,1);
       $obj_pdf->cell(40,10,'',0,1);
       $path = "qrcode/userQr/";
       $filename1 = $row['visitor_qrimage'];
       $filepath1= $path.$filename1;
        $obj_pdf->Image($filepath1,155,90,40,40);

      // $obj_pdf->cell(80,10,$row['visitor_qrimage'],0,0);
       $obj_pdf->cell(60,10,'Employee Signature',0,1);

      // $obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

       $html = '';
       $html .= '<hr>';
       $obj_pdf->writeHTML($html);

       $obj_pdf->SetFont('helvetica', '', 30);
       $obj_pdf->cell(60,10,'',0,0);
       $obj_pdf->cell(50,10,'VISITOR',0,1);
       //$obj_pdf->cell(50,40,'Signature',0,0);

      // $content .= '<hr>';
    //$content .= fetch_data();

     //$obj_pdf .= '</table>';

     $obj_pdf->Output('Visitor-gatepass.pdf', 'I');
}

 ?>
<!--     <table border="1" cellspacing="0" cellpadding="5">
          <tr>
               <th>visitor id</th>
               <th>visitor name</th>
               <th>Email</th>
               <th>Gender</th>
          </tr>






                             <label> '.$row["visitor_id"].'</label><br>
                              <label>'.$row["visitor_name"].'</label><br>
                              <label>'.$row["visitor_email"].'</label><br>
                             <label>'.$row["visitor_gender"].'</label><br>

-->
