<?php


session_start();
			 
       if($_SESSION['uid'])
      {
         echo "";
      }

      else
      {
           header('location: ../Admin_login.php');
      }

?>
<?php
     include('Header.php');
	
?>
<header>
	<h5><a href="Search_student.php" style="float:left; margin-right:5px; color:#fff; font-size:15px;">Back to Search Student</a></h5>
	<h3><a href="Logout.php" style="float:right; margin-right:30px; color:#fff; font-size:20px;">Logout</a></h3>
      <h2 align="center"><font color="white">Welcome to Admin Dashboard<font size="5px">(Search Student)</font></font></h2>
	   
</header>
<table align="center">
<form action="Search_name.php" method="post">
   <tr><td>&nbsp </td><td>&nbsp </td></tr>
   <tr>
       <th><font color="white">Enter Student Name</th>
       <td><input type="text" name="name" placeholder="Enter Name"></td>
       <td>&nbsp;</td>
	   <td>&nbsp;</td>
	    
   <td colspan="2"><input type="submit" name="submit"  style="border-radius:50%; background-color:white;" value="Search"></td></tr>
   <tr><td>&nbsp </td><td>&nbsp </td></tr>
<tr><td>&nbsp </td><td>&nbsp </td></tr>
<tr><td>&nbsp </td><td>&nbsp </td></tr>


</form>
</table>





<?php

if(isset($_POST['submit']))
{

include('../connection.php');
error_reporting(0);

$name = $_POST['name'];

		
$query = "SELECT * FROM `data1` WHERE `name`='$name'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


if($total !=0)
{
	?>
	
	<table align="center" border="10px"cellspacing="15"cellpadding="5">
	      <tr>
		      <th bgcolor="#EEEEEE">Image</th>
		      <th bgcolor="#EEEEEE">Roll No.</th>
			  <th bgcolor="#EEEEEE">Name </th>
			  <th bgcolor="#EEEEEE">Branch</th>
		  </tr>
	
	
	
	
	<?php
	while($result=mysqli_fetch_assoc($data))
	{
      echo "<tr>
	          <td ><a href='$result[image]'><img src='".$result['image']."'height='100' width='100'/></a></td>
		      <td  bgcolor='White'>".$result['roll']."</td>
			  <td  bgcolor='White'>".$result['name']."</td>
			  <td  bgcolor='White'>".$result['branch']."</td>
			  
		  </tr>";
	}
}
else
{
	?>
	  <script>
	      alert('No Record Found.');

	   </script>
	<?php
	
}
}
?>

</table>
