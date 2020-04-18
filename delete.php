<?php
$con=mysqli_connect('localhost','shan','root','vms');
if(!$con)
{
	die('error');
}
$id=$_GET['id'];
$sql="DELETE FROM security_roster WHERE id='$id' ";
$res = mysqli_query($con,$sql);
if($res)
{
  header('location:security_roster.php');
}
?>
