
<?php
/*if(isset($_POST['login']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];
	$employee_user=$_POST['username'];
	$employee_password=$_POST['password'];
  //$user=$_POST['']
  $con=mysqli_connect('localhost','shan','root','vms');
  if(!$con)
  {
  	die('error');
  }

if($_POST['user']== 'security')
{
  $sql = "SELECT * from employee_master WHERE employee_user='$employee_user' and employee_password='$employee_password' ";
  $res=mysqli_query($con,$sql);
	 //echo $sql;
	 //exit();
  $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
	if(isset($row)) {
		 session_start();
		 $_SESSION['employee_id']=$security_id;
     $_SESSION['employee_id'] = true;
 		 header("location:add_employee.php");
	  }
	}

	//}
    // if (!session_id())
      //       session_start();
//				 $_SESSION['employee_id']=$security_id;
  //       $_SESSION['employee_id'] = true;


	 //}

elseif($_POST['user']== 'employee')
{
  $sql = "SELECT * from employee_master WHERE employee_user='$employee_user' and employee_password='$employee_password' ";
  $res=mysqli_query($con,$sql);
	$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
	  if(isset($row)){
      if ($_POST['password'] == $password && $_POST['username'] == $username) {
         if (!session_id())
             session_start();
         $_SESSION['employee_id']=$employee_id;
         $_SESSION['employee_id'] = true;
         header("location:add_employee.php");
       }
     }
	 }
	 elseif($_POST['user']== 'admin')
	 {
	   $sql = "SELECT * from admin WHERE username='$username' and password='$password' ";
	   $res=mysqli_query($con,$sql);
		 $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
	  if(isset($row)){
	       if ($_POST['password'] == $password && $_POST['username'] == $username) {
	          if (!session_id())
	              session_start();
								$_SESSION['admin_id']=$admin_id;
			          $_SESSION['admin_id'] = true;
	          header("location:index.php");
	        }
	      }
	 	 }

	 }*/
   if(isset($_GET['delete']))
   {
     $visitor_id=$_GET['visitor_id'];
   $con=mysqli_connect('localhost','shan','root','vms');
   if(!$con)
   {
     die('error');
   }
   $sql = "DELETE FROM visitor_information WHERE ";
   $res=mysqli_query($con,$sql);
   if($res)
   {
     header("location:sec-previsitor.php");
   }
 }
?>
