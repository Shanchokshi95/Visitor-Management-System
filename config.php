<?php
class RaviKoQr
{
  public $server = "localhost";
  public $user = "shan";
  public $pass = "root";
  public $dbname = "vms";
	public $conn;
  public function __construct()
  {
  	$this->conn= new mysqli($this->server,$this->user,$this->pass,$this->dbname);
  	if($this->conn->connect_error)
  	{
  		die("connection failed");
  	}
  }
 	public function insertQr($visitor_name,$visitor_address,$visitor_phone_no,$visitor_email,$visitor_gender,$visitor_photo,$visitor_document,$visitor_meeting,$visitor_meeting_time,$meeting_purpose,$visitor_company_name,$visitor_company_address,$visitor_company_email,$visitor_company_phone,$qrimage,$qrcontent,$qrlink)
 	{
 			$sql = "INSERT INTO visitor_information(visitor_name,visitor_address,visitor_phone_no,visitor_email,visitor_gender,visitor_photo,visitor_document,visitor_meeting,visitor_meeting_time,meeting_purpose,visitor_company_name,visitor_company_address,visitor_company_email,visitor_company_phone,visitor_qrimage,qrcontent,qrlink) VALUES('$visitor_name','$visitor_address','$visitor_phone_no','$visitor_email','$visitor_gender','$visitor_photo','$visitor_document','$visitor_meeting','$visitor_meeting_time','$meeting_purpose','$visitor_company_name','$visitor_company_address','$visitor_company_email','$visitor_company_phone','$qrimage','$qrcontent','$qrlink')";
 			$query = $this->conn->query($sql);
    //  echo $sql;
      //exit();

    		$visitor_information_last_id =  $this->conn->insert_id;
        //echo $visitor_information_last_id;
    return $visitor_information_last_id;
    //die;


 	}

public function insertQr1($visitor_information_last_id)
{
  	$sql1 = "INSERT INTO notify_visitor(visitor_id)VALUES($visitor_information_last_id) ";
    $query1 = $this->conn->query($sql1);
    return $query1;
}

/*public function selectqr()
{
  	$sql2 = "select * from employee_master ";
    $query2 = $this->conn->query($sql2);
    return $query2;
}*/


 	public function displayImg()
 	{
 		$sql = "SELECT qrimg,qrlink from qrcodes where qrimg='$qrimage'";

 	}
}
$meravi = new RaviKoQr();
