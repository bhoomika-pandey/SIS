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
	<h5><a href="Admin_dash.php" style="float:left; margin-right:5px; color:#fff; font-size:15px;">Back to Admin Dashboard</a></h5>
	<h3><a href="Logout.php" style="float:right; margin-right:30px; color:#fff; font-size:20px;">Logout</a></h3>
      <h2 align="center"><font color="white">Welcome to Admin Dashboard<font size="5px">(Search Field)</font></font></h2>
	   
</header>
	
  <table style="width:50%" align="center">
		    <tr><td>&nbsp </td><td>&nbsp </td></tr>
            <tr><td>&nbsp </td><td>&nbsp </td></tr>
		
			 <tr>
			     <td>&nbsp; </td><td>&nbsp; </td> <td>&nbsp;&nbsp; </td><td>&nbsp;&nbsp; </td>
			     <td><font size="5px" color="white">1.</font></td><td><a href="Search_name.php"><font size="5px" color="white">Search Student By Name</font></a></td>
		    </tr>
			<tr><td>&nbsp </td><td>&nbsp </td></tr>
			 <tr>
			     <td>&nbsp; </td><td>&nbsp; </td> <td>&nbsp;&nbsp; </td><td>&nbsp;&nbsp; </td>
			     <td><font size="5px" color="white">2.</font></td><td><a href="View_student.php"><font size="5px" color="white">Search Student By Roll No.& Edit</font></a></td>
		    </tr>
			<tr><td>&nbsp </td><td>&nbsp </td></tr>
            <tr>
			     <td>&nbsp;&nbsp; </td><td>&nbsp;&nbsp; </td> <td>&nbsp;&nbsp; </td><td>&nbsp;&nbsp; </td>
			     <td><font size="5px" color="white">3.</font></td><td><a href="Search_b_s.php"><font size="5px" color="white">Find Student List</font> </a></td>
                    </tr>
			<tr><td>&nbsp </td><td>&nbsp </td></tr>
			 <tr>
			 
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>

<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>


</table></td>
</tr>
<tr height="15%">

</tr>
<footer>
<center></h1><font color="white">DEVELOPED BY :- BHOOMIKA, MO.ASIF, NITESH, UTTAM</font></center>
			</table>
	

	</body>
	</html>