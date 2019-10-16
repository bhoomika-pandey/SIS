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
	<h3><a href="Logout.php" style="float:right; margin-right:30px; color:#fff; font-size:20px;">Logout</a></h3>
	
       <h2 align="center"><font color="white">Welcome to Admin Dashboard</font></h2>
</header>	   
	
	    <table style="width:50%" align="center">
		    <tr><td>&nbsp; </td><td>&nbsp; </td></tr>
            <tr><td>&nbsp; </td><td>&nbsp;</td></tr>
		    <tr>
			     <td>&nbsp; </td><td>&nbsp; </td>
			     <td><font size="5px" color="white">1.</font></td><td><a href="b.php"><font size="5px" color="white">Add Student Details</font></a></td>
		    </tr>
			<tr><td>&nbsp; </td><td>&nbsp; </td></tr>
			 <tr>
			     <td>&nbsp;</td><td>&nbsp;</td>
			     <td><font size="5px" color="white">2.</font></td><td><a href="Search_student.php"><font size="5px" color="white"> Search Student Details & Edit</font></a></td>
		    </tr>
			<tr><td>&nbsp; </td><td>&nbsp;</td></tr>
			 <tr>
			     <td>&nbsp;&nbsp; </td><td>&nbsp;&nbsp; </td>
			     <td><font size="5px" color="white">3.</font></td><td><a href="Delete_student.php"><font size="5px" color="white">Delete Student Details</font></a></td>
		    </tr>
			



<tr><td>&nbsp </td><td>&nbsp </td></tr>

<tr><td>&nbsp </td><td>&nbsp </td></tr>
<tr><td>&nbsp </td><td>&nbsp </td></tr>
<tr><td>&nbsp </td><td>&nbsp </td></tr>
<tr><td>&nbsp </td><td>&nbsp </td></tr>
<tr><td>&nbsp </td><td>&nbsp </td></tr>
<tr><td>&nbsp </td><td>&nbsp </td></tr>
<tr><td>&nbsp </td><td>&nbsp </td></tr>

</table></td>
</tr>
<tr height="15%">

</tr>
<footer>
<center></h1><font color="white">DEVELOPED BY :- BHOOMIKA, MO.ASIF, NITESH, UTTAM (2018)</font></center>
			</table>

	</body>
	</html>