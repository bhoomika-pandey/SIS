<?php

      session_start();
	  
	  if(isset($_SESSION['uid']))
	  {
	      header('location:admin/Admin_dash.php');
	  }


?>


<!DOCTYPE HTML>
<html lang="en_US">
<head>
    <meta charset="UTF-8">
	<title>Admin Login</title>
	<style>
header
{
   border-radius:10px;
   background-color:darkblue;
   margin-left:10px;
   margin-right:10px;
   height:70px;
   font-size:25px;
   line-height:20px;
   border: 5px solid black;
}
footer
{
border-radius:10px;
background:darkBLUE;
height:70px;
font-size:25px;
line-height:60px;
margin-left:10px;
margin-right:10px;
border: 5px solid black;
}
</style>
</head>
<body bgcolor="CornFlowerBlue">
<header>
  <h5><a href="index.php" style="float:left; margin-left:15px; color:white; font-size:20px;">Home</a></h5>
<center></h1><font color="white">WELCOME TO ADMIN LOGIN</font><h1></center>
</header>

    <h1 align="center">ADMIN LOGIN</h1>
	<form action="Admin_login.php" method="post">
	
	
	    <table align="center">
		    <tr>
			     <td><font color="white"> USER ID</td><td><input type="text"name="User_id"required</td>
			</tr>
                 <tr><td>&nbsp </td><td>&nbsp </td></tr>
			<tr>
			     <td><font color="white">PASSWORD</td><td><input type="password"name="Password"required</td>
			</tr>
                 <tr><td>&nbsp </td><td>&nbsp </td></tr>
            <tr>
                			
                <td colspan="2" align="center"><input type="submit"name="login" style="border-radius:50%; background-color:white;" value="Login"></td>
			</tr>
			<tr><td>&nbsp </td><td>&nbsp </td></tr>
            <tr><td>&nbsp </td><td>&nbsp </td></tr>
            <tr><td>&nbsp </td><td>&nbsp </td></tr>

            <tr><td>&nbsp </td><td>&nbsp </td></tr>
            <tr><td>&nbsp </td><td>&nbsp </td></tr>
            <tr><td>&nbsp </td><td>&nbsp </td></tr>
            <tr><td>&nbsp </td><td>&nbsp </td></tr>
          
           
		
        </table>			
	</form>
        <footer>
            <center></h1><font color="white">DEVELOPED BY :- BHOOMIKA, MO.ASIF, NITESH, UTTAM  (2018)</font><h1></center>
        </footer>	
</body>
</html>
<?php
  
  include('connection.php');
  
  if(isset($_POST['login']))
  {
       $user_id=$_POST['User_id'];
	   $password=$_POST['Password'];
	   $qry="SELECT * FROM `Administrator_login` WHERE User_id='$user_id' AND Password='$password'";
	   $run=mysqli_query($conn,$qry);
	   error_reporting(0);
        $row=mysqli_num_rows($run);
		if($row <1)
		{
		    ?>
			
			<script>
			      alert('Username or Password not match !!');
			      window.open('Admin_login.php','_self');
			</script>
<?php
		
		
		}
		else
		   {
		     $data=mysqli_fetch_assoc($run);
		   
		     $id=$data['id'];
		   

			 
			 $_SESSION['uid']=$id;
			 header('location:admin/Admin_dash.php');
		   }
  
  }
  
  
  
?>