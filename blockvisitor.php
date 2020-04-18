<?php
$visitor_name = $_GET['visitor_name'];
$con=mysqli_connect('localhost','shan','root','vms');
if(!$con)
{
	die('error');
}

$sql = "UPDATE visitor_information SET status='1' WHERE visitor_name = '$visitor_name'";
$res=mysqli_query($con,$sql);
//echo $sql;
//die;

  header('location:admin-visitordetail.php');

?>
<!--<td><a class="text-inverse" title="Block" data-toggle="tooltip" href="blockvisitor.php?visitor_name=<?php echo $row['visitor_name']; ?>"><i class="fa fa-ban" aria-hidden="true" style="color:red;"></i></a>
-->
