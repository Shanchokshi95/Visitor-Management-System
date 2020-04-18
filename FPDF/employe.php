<?php
     require 'fpdf.php';

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->setTextColor(252, 3, 3);
        $pdf->Cell(200,20,'Employe Management System',0,1,'C');
        $pdf->setLeftMargin(30);
        $pdf->setTextColor(0, 0, 0);

        $pdf->Cell(20,10,"Date:",0,0,'C');
        $pdf->Cell(30,10,date("j-n-Y"),0,1,'C');
        // table column
        $pdf->Cell(20,10,'id',1,0,'C');
        $pdf->Cell(40,10,'security_name',1,0,'C');
        $pdf->Cell(40,10,'gate_number',1,0,'C');
        $pdf->Cell(40,10,'shift',1,0,'C');
        $pdf->Cell(40,10,'duty_time',1,1,'C');

        // table rows
        $pdf->SetFont('Arial','',14);
        $con = new PDO('mysql:host=localhost;dbname=vms','shan','root');
        $query ="SELECT * FROM security_roster";
        $result = $con->prepare($query);
        $result->execute();
        if($result->rowCount()!=0)
        {
                         $i=0;
            while($employe = $result->fetch())
            {
              $pdf->Cell(20,10,++$i,1,0,'C');
              $pdf->Cell(40,10,$employe['security_name'],1,0,'C');
              $pdf->Cell(40,10,$employe['gate_number'],1,0,'C');
              $pdf->Cell(40,10,$employe['shift'],1,1,'C');
              $pdf->Cell(40,10,$employe['duty_time'],1,1,'C');
            }

        }

        $pdf->Output();


?>
