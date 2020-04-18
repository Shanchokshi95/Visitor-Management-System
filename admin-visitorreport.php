<?php
function fetch_data()
{
     $output = '';
     $connect = mysqli_connect("localhost", "shan", "root", "vms");
     $sql = "SELECT * FROM visitor_information ORDER BY id ASC";
     $result = mysqli_query($connect, $sql);
     while($row = mysqli_fetch_array($result))
     {
     $output .= '<tr>
                         <td>'.$row["id"].'</td>
                         <td>'.$row["security_name"].'</td>
                         <td>'.$row["gate_number"].'</td>
                         <td>'.$row["shift"].'</td>
                         <td>'.$row["duty_time"].'</td>
                         <td><a class="text-inverse" title="Delete" data-toggle="tooltip" href="/vms/delete.php"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
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
