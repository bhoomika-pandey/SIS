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
      <h2 align="center"><font color="white">Welcome to Admin Dashboard<font size="5px">(Delete Student)</font></font></h2>
	   
</header>
	
<table align="center">
<form action="Delete_student.php" method="post">
   <tr><td>&nbsp </td><td>&nbsp </td></tr>
   <tr>
       <th><font color="white">Enter Student Roll No.</th>
       <td><input type="text" name="roll" placeholder="Enter Roll No."></td>
        <td colspan="2">&nbsp;</td>
	   <td colspan="2"><input type="submit"  style="border-radius:50%; background-color:white;" name="submit" value="Search"></td>
   </tr>
   
  
</form>
</table>





	 <?php
    
	if(isset($_POST['submit']))
	{
		$dbhost='localhost';
        $username='root';
        $password="";
        $db="student1";
        $conn=mysqli_connect("$dbhost","$username","$password","$db");
		
		$roll = $_POST['roll'];
		
		$query="SELECT * FROM `data1` WHERE `roll`='$roll'";
	     $run=mysqli_query($conn,$query);
		 
		 
		 if(mysqli_num_rows($run)<1)
		 {
			 echo "No Record Found";
			 
		 }
		 else
		 {
			 $count=0;
			 while($data=mysqli_fetch_assoc($run))
			 {
				 $count++;
				 ?>
				    
<table width="100%">
<tr>
<td width="100%" height="15%" align="center"></td>
</tr>
<tr>
<td width="100%" height="80%" align="center"><table width="80%"
border="1" cellpadding="2" cellspacing="0" bordercolor="black">
<tr bgcolor="#EEEEEE">
<td colspan="6" align="center" class="stylemedium">Student
Information</td>
</tr>
<tr class="stylesmall">
<td><font color="white">Roll No. <span class="stylered">*</span> </td>
<td bgcolor="White"><?php echo $data['roll']; ?></td>
<td><font color="white">Branch <span class="stylered">*</span> </td>
<td bgcolor="White"><?php echo $data['branch']; ?></td>
<td><font color="white">Semester <span class="stylered">*</span> </td>
<td bgcolor="White"><?php echo $data['sem']; ?></td>
</tr>
<tr class="stylesmall">
<td maxlength="100"><font color="white">Name</td> <span class="stylered">*</span> </td>
<td bgcolor="White"><?php echo $data['name']; ?></td>
<td><font color="white">Gender</td>
<td bgcolor="White"><?php echo $data['gen']; ?></td>
<td><font color="white">Contact No</td>
<td bgcolor="White"><?php echo $data['contact']; ?></td>
</tr>
<tr class="stylesmall">
<td maxlength="100"><font color="white">Father's Name</td> <span class="stylered">*</span> </td>
<td bgcolor="White"><?php echo $data['f_name']; ?></td>
<td><font color="white">Father's Contact No.</td>
<td bgcolor="White"><?php echo $data['f_contact']; ?></td>
<td  maxlength="200"><font color="white"> Email <span class="stylered">*</span> </td>
<td bgcolor="White"><?php echo $data['email']; ?></td>
</tr>
<tr class="stylesmall">
<td><font color="white">Date Of Birth <span class="stylered">*</span> </td>
<td bgcolor="White"><?php echo $data['dob']; ?></td>
<td><font color="white">Category <span class="stylered">*</span> </td>
<td bgcolor="White"><?php echo $data['category']; ?></td>
<td><font color="white"> Pin.:-</td>
<td bgcolor="White"><?php echo $data['pin']; ?></td>
</tr>
<tr class="stylesmall">
<td><font color="white"> District</td>
<td bgcolor="White"><?php echo $data['distt']; ?></td>
<td><font color="white">City</td>
<td bgcolor="White"><?php echo $data['address']; ?></td>
<td maxlength="100"><font color="white">Post<span class="stylered">*</span> </td>
<td bgcolor="White"><?php echo $data['post']; ?></td>
</tr>
<tr class="stylesmall">
<td><font color="white">Village<span class="stylered">*</span> </td>
<td bgcolor="White"><?php echo $data['village']; ?></td>
<td><font color="white">Local Place<span class="stylered">*</span> </td>
<td maxlength="100" bgcolor="White"><?php echo $data['lp']; ?></td>
<td><font color="white">Status<span class="stylered">*</span> </td>
<td bgcolor="White"><?php echo $data['status']; ?></td>
</tr>
<tr class="stylesmall">
<td><font color="white">Date Of Joining<span class="stylered">*</span> </td>
<td bgcolor="White"><?php echo $data['doj']; ?></td>
<td><font color="white">Student From TFW</td>
<td bgcolor="White"><?php echo $data['tfw']; ?></td>
<td maxlength="100"><font color="white">Employment Status</td>
<td bgcolor="White"><?php echo $data['emp_status']; ?></td>
</tr>
<tr>
<td><font color="white">Year of studying</td>
<td bgcolor="White"><?php echo $data['year']; ?></td>
<td colspan="5">&nbsp;</td>
</tr>
<tr>
<td colspan="6" align="center" class="stylemedium" bgcolor="#EEEEEE">Educational
Qualification</td>
</tr>
<tr>
<td colspan="6">&nbsp;</td>

</tr>
<tr class="stylesmall">
<td><font color="white">Name of Exam<span class="stylered"></span> </td>
<td><font color="white">Board/University<span class="stylered"></span> </td>
<td><font color="white">Percentage or SGPA<span class="stylered"></span> </td>
<td><font color="white">Result(Ex.or Pass)<span class="stylered"></span> </td>
<td><font color="white">CGPA<span class="stylered"></span> </td>
<td><font color="white">NO.Of Attempts<span class="stylered"></span> </td>
</tr>
<tr class="stylemall">
<td><font color="white">10th__<span class="stylered"></span><?php echo $data['year_ten']; ?> </td>
<td bgcolor="White"><?php echo $data['b_uten']; ?></td>
<td bgcolor="White"><?php echo $data['per_ten']; ?></td>
<td bgcolor="White"><?php echo $data['result_ten']; ?></td>
<td colspan="2">&nbsp;</td>
</tr>

<tr class="stylemall">
<td><font color="white">12th__<span class="stylered"></span><?php echo $data['year_twelth']; ?> </td>
<td bgcolor="White"><?php echo $data['b_utwelth']; ?></td>
<td bgcolor="White"><?php echo $data['per_twelth']; ?></td>
<td bgcolor="White"><?php echo $data['result_twelth']; ?></td>
<td colspan="2">&nbsp;</td>
</tr>

<tr class="stylemall">
<td><font color="white">1st sem__<span class="stylered"></span> <?php echo $data['year_one']; ?></td>
<td><font color="white">RGPV Bhopal<span class="stylered"></span> </td>
<td bgcolor="White"><?php echo $data['sgpa_one']; ?></td>
<td bgcolor="White"><?php echo $data['result_one']; ?></td>
<td rowspan="2" bgcolor="White"><?php echo $data['cgpa_onetwo']; ?></td>
<td bgcolor="White"><?php echo $data['attempts_one']; ?></td>
</tr>
<tr class="stylemall">
<td><font color="white">2nd sem__<span class="stylered"></span> <?php echo $data['year_two']; ?></td>
<td><font color="white">RGPV Bhopal<span class="stylered"></span> </td>
<td bgcolor="White"><?php echo $data['sgpa_two']; ?></td>
<td bgcolor="White"><?php echo $data['result_two']; ?></td>
<td bgcolor="White"><?php echo $data['attempts_two']; ?></td>
</tr>

<tr class="stylemall">
<td><font color="white">3rd sem__<span class="stylered"></span> <?php echo $data['year_three']; ?></td>
<td><font color="white">RGPV Bhopal<span class="stylered"></span> </td>
<td bgcolor="White"><?php echo $data['sgpa_three']; ?></td>
<td bgcolor="White"><?php echo $data['result_three']; ?></td>
<td bgcolor="White"><?php echo $data['cgpa_three']; ?></td>
<td bgcolor="White"><?php echo $data['attempts_three']; ?></td>
</tr>

<tr class="stylemall">
<td><font color="white">4th sem__<span class="stylered"></span><?php echo $data['year_four']; ?> </td>
<td><font color="white">RGPV Bhopal<span class="stylered"></span> </td>
<td bgcolor="White"><?php echo $data['sgpa_four']; ?></td>
<td bgcolor="White"><?php echo $data['result_four']; ?></td>
<td bgcolor="White"><?php echo $data['cgpa_four']; ?></td>
<td bgcolor="White"><?php echo $data['attempts_four']; ?></td>
</tr>

<tr class="stylemall">
<td><font color="white">5th sem__<span class="stylered"></span> <?php echo $data['year_five']; ?></td>
<td><font color="white">RGPV Bhopal<span class="stylered"></span> </td>
<td bgcolor="White"><?php echo $data['sgpa_five']; ?></td>
<td bgcolor="White"><?php echo $data['result_five']; ?></td>
<td bgcolor="White"><?php echo $data['cgpa_five']; ?></td>
<td bgcolor="White"><?php echo $data['attempts_five']; ?></td>
</tr>

<tr class="stylemall">
<td><font color="white">6th sem__<span class="stylered"></span><?php echo $data['year_six']; ?> </td>
<td><font color="white">RGPV Bhopal<span class="stylered"></span> </td>
<td bgcolor="White"><?php echo $data['sgpa_six']; ?></td>
<td bgcolor="White"><?php echo $data['result_six']; ?></td>
<td bgcolor="White">&nbsp;</td>
<td bgcolor="White"><?php echo $data['attempts_six']; ?></td>
</tr>

<tr class="stylemall">
<td><font color="white">Aggregate(CGPA)<span class="stylered"></span> </td>
<td><font color="white">RGPV Bhopal<span class="stylered"></span> </td>
<td bgcolor="White"><?php echo $data['sgpa_A']; ?></td>
<td bgcolor="White"><?php echo $data['result_A']; ?></td>
<td bgcolor="White" colspan="2">&nbsp;</td>
</tr>
<tr>
<td colspan="6">&nbsp;</td>
</tr>
<tr>
<td colspan="4" align="center" class="stylemedium" bgcolor="#EEEEEE">Other Qualifications</td>
<td bgcolor="#EEEEEE">Semester</td>
<td bgcolor="#EEEEEE">Fees</td>
</tr>
<tr>
<td colspan="4">&nbsp;</td>


<td><font color="white">1st sem<span class="stylered"></span> </td> 
<td bgcolor="White"><?php echo $data['fees_two']; ?></td>
</tr>
<tr>
<tr class="stylemall">
<td><font color="white">Enter Your Other Qualification(if any)</td>
<td bgcolor="White"><?php echo $data['oth_qua']; ?></td>
<td colspan="2">&nbsp </td>
<td><font color="white">2nd sem<span class="stylered"></span> </td> 
<td bgcolor="White"><?php echo $data['fees_one']; ?></td>
<tr>
<td colspan="4">&nbsp;</td>
<td><font color="white">3rd sem<span class="stylered"></span> </td> 
<td bgcolor="White"><?php echo $data['fees_one']; ?></td>
</tr>

<tr>
<td colspan="4">&nbsp;</td>
<td><font color="white">4th sem<span class="stylered"></span> </td> 
<td bgcolor="White"><?php echo $data['fees_one']; ?></td>
</tr>
<tr>

<td colspan="4" bgcolor="#EEEEEE"><span class="stylered">* <em>means fields are
compulsory</em> </span></td>
<td><font color="white">5th sem<span class="stylered"></span> </td> 
<td bgcolor="White"><?php echo $data['fees_one']; ?></td>
</tr>
<tr>
<td colspan="4">&nbsp;</td>
<td><font color="white">6th sem<span class="stylered"></span> </td> 
<td bgcolor="White"><?php echo $data['fees_one']; ?></td>
</tr>
<tr>
<td colspan="6" align="center">
<input name="delete" type="button"  style="border-radius:50%; background-color:white;" value="_Delete_" 
onClick="self.location='Delete_form.php?sid=<?php echo $data['roll']; ?>'">&nbsp;&nbsp;&nbsp;&nbsp;
<input name="close" type="button"  style="border-radius:50%; background-color:white;" value="_Close_"
onClick="self.location='Admin_dash.php'"></td>
</tr>
</table></td>
</tr>
<tr>
<td width="100%" height="5%" align="center"></td>
</tr>
</table>
<footer>
<center></h1><font color="white">DEVELOPED BY :- BHOOMIKA, MO.ASIF, NITESH, UTTAM (2018)</font><h1></center>
</footer>

				 
				 <?php
				 
				 
			 }
		 } 
	}	

?>
</table>

































