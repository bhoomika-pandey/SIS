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
      <h2 align="center"><font color="white">Welcome to Admin Dashboard<font size="5px">(Student's List)</font></font></h2>
	   
</header>
<table align="center">
<form action="Search_b_s.php" method="post">
   <tr><td>&nbsp </td><td>&nbsp </td></tr>
   <tr>
       <th><font color="white">Enter Required Branch</th>
       <td>
	     <select name="branch">
            <option>C.S.E.</option>
            <option>C.T.</option>
            <option>E.E.</option>
            <option>M.E.</option>
         </select>
	   </td>
	      <tr>
       <th><font color="white">Enter Semester</th>
	   <td>
	   <select name="sem">
            <option>1st</option>
            <option>2nd</option>
            <option>3rd</option>
            <option>4th</option>
            <option>5th</option>
            <option>6th</option>
       </select>
	   </td>
	   </tr>
	   <tr>
	   <th><font color="white">Enter year</th>
       <td><input type="text" name="year" placeholder="Enter Year"></td>
	   <td>&nbsp;</td>
	   <td>&nbsp;</td>
   <td colspan="2"><input type="submit" name="submit"  style="border-radius:50%; background-color:white;" value="Search"></td></tr>
   <tr><td>&nbsp; </td><td>&nbsp; </td></tr>
<tr><td>&nbsp; </td><td>&nbsp; </td></tr>
<tr><td>&nbsp; </td><td>&nbsp; </td></tr>


</form>
</table>





<?php

if(isset($_POST['submit']))
{

include('../connection.php');
error_reporting(0);

$branch = $_POST['branch'];
$sem = $_POST['sem'];
$year = $_POST['year'];




$query = "SELECT * FROM `data1` WHERE `branch`='$branch' AND `sem`='$sem' AND `year`='$year' ";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


if($total !=0)
{
	?>
	
	<table align="center"border="10px"cellspacing="15"cellpadding="5">
	      <tr>
		      <th bgcolor="EEEEEE">Roll No.</th>
			  <th bgcolor="EEEEEE">Name </th>
			  <th bgcolor="EEEEEE">Contact No.</th>
			  <th bgcolor="EEEEEE">Email Id</th>
			  
		  </tr>
	
	
	
	
	<?php
	while($result=mysqli_fetch_assoc($data))
	{
      echo "<tr>
	         
		      <td  bgcolor='White'>".$result['roll']."</td>
			  <td  bgcolor='White'>".$result['name']."</td>
			  <td  bgcolor='White'>".$result['contact']."</td>
			  <td  bgcolor='White'>".$result['email']."</td>
			  
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
