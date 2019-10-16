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
	 include('../connection.php');
	 
	 $sid = $_GET['sid'];
	 
	 $sql="SELECT * FROM `data1` WHERE `roll`='$sid'";
	 $run=mysqli_query($conn,$sql);
	 
	 $data=mysqli_fetch_assoc($run);
?>

<html>
<head>
<style>
footer
{
background:darkBLUE;
height:70px;
font-size:25px;
line-height:60px;
border: 5px solid black;
}
</style>
<body>
<header>
	<h5><a href="Search_student.php" style="float:left; margin-right:5px; color:#fff; font-size:15px;">Back to Search_student</a></h5>
	<h3><a href="Logout.php" style="float:right; margin-right:30px; color:#fff; font-size:20px;">Logout</a></h3>
      <h2 align="center"><font color="white">Welcome to Admin Dashboard<font size="5px">(Edit Student)</font></font></h2>
	   
</header>

<form  method="post" action="Update_data.php" >
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
<td><input name="roll" type="text" value= <?php echo $data['roll']; ?> readonly="readonly"></td>
<td><font color="white">Branch <span class="stylered">*</span> </td>
<td>
<select name="branch">
<option><?php echo $data['branch']; ?></option>
<option>_ _ _ _</option>
<option>C.S.E.</option>
<option>C.T.</option>
<option>E.E.</option>
<option>M.E.</option>
</select>
</td>
<td><font color="white">Semester <span class="stylered">*</span> </td>
<td>
<select name="sem">
<option><?php echo $data['sem']; ?></option>
<option>_ _ _ _</option>
<option>1st</option>
<option>2nd</option>
<option>3rd</option>
<option>4th</option>
<option>5th</option>
<option>6th</option>
</select>
</td>
</tr>
<tr class="stylesmall">
<td><font color="white">Name</td> <span class="stylered">*</span> </td>
<td><input name="name" type="text" value=<?php echo $data['name']; ?> maxlength="100"></td>
<td><font color="white">Gender</td>
<td>
<select name="gen">
<option><?php echo $data['gen']; ?></option>
<option>_ _ _ _</option>
<option>Male</option>
<option>Female</option>
<option>Other</option>
</select>
</td>
<td><font color="white">Contact No</td>
<td><input name="contact" type="text" value=<?php echo $data['contact']; ?>></td>
</tr>
<tr class="stylesmall">
<td><font color="white">Father's Name</td> <span class="stylered">*</span> </td>
<td><input name="f_name" type="text" value=<?php echo $data['f_name']; ?> maxlength="100"></td>
<td><font color="white">Father's Contact No</td>
<td><input name="f_contact" type="text" value=<?php echo $data['f_contact']; ?>></td>
<td><font color="white"> Email <span class="stylered">*</span> </td>
<td><input name="email" type="text" value=<?php echo $data['email']; ?>></td>
</tr>
<tr class="stylesmall">
<td><font color="white">Date Of Birth <span class="stylered">*</span> </td>
<td><input name="dob" type="text" value=<?php echo $data['dob']; ?>></td>
<td><font color="white">Category <span class="stylered">*</span> </td>
<td>
<select name="category">
<option><?php echo $data['category']; ?></option>
<option>_ _ _ _</option>
<option>General</option>
<option>OBC</option>
<option>SC</option>
<option>ST</option>
</select>
</td>
<td> <font color="white">Pin.:-</td>
<td><input name="pin" type="text" value=<?php echo $data['pin']; ?>></td>
</tr>
<tr class="stylesmall">
<td> <font color="white">District</td>
<td><input name="distt" type="text" value=<?php echo $data['distt']; ?>></td>
<td><font color="white">City</td>
<td><input name="address" type="text" value=<?php echo $data['address']; ?>></td>
<td><font color="white"> Post:-</td>
<td><input name="post" type="text" value=<?php echo $data['post']; ?> ></td>
</tr>
<tr class="stylesmall">
<td><font color="white">Village<span class="stylered">*</span> </td>
<td><input name="village" type="text" value=<?php echo $data['village']; ?> ></td>
<td><font color="white">Local Place<span class="stylered">*</span> </td>
<td><input name="lp" type="text" value=<?php echo $data['lp']; ?> ></td>
<td><font color="white">Status<span class="stylered">*</span> </td>
<td><input name="status" type="text" value=<?php echo $data['status']; ?>></td>
</tr>
<tr class="stylesmall">
<td><font color="white">Date Of Joining<span class="stylered">*</span> </td>
<td><input name="doj" type="text" value=<?php echo $data['doj']; ?>></td>
<td><font color="white">Student From TFW</td>
<td>
<select name="tfw">
<option><?php echo $data['tfw']; ?></option>
<option>_ _ _ _</option>
<option>NO</option>
<option>YES</option>
</select>
</td>
<td><font color="white">Employment Status</td>
<td><input name="emp_status" type="text" value=<?php echo $data['emp_status']; ?> ></td>
</tr>
<tr>
<td><font color="white">Year of studying</td>
<td><input name="year" type="text" value=<?php echo $data['year']; ?>></td>
</tr>
<tr class="stylesmall">


</tr>
<tr bgcolor="#EEEEEE">
<td colspan="6" align="center" class="stylemedium">Educational
Qualification</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
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
<td><font color="white">10th__<span class="stylered"></span><input name="year_ten" type="text"  value=<?php echo $data['year_ten']; ?>> </td>
<td><input name="b_uten" type="text" value=<?php echo $data['b_uten']; ?> ></td>
<td><input name="per_ten" type="text" value=<?php echo $data['per_ten']; ?>></td>
<td>
<select name="result_ten">
<option><?php echo $data['result_ten']; ?></option>
<option>_ _ _ _</option>
<option>Pass</option>
<option>Ex.</option>
</select>
</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr class="stylemall">
<td><font color="white">12th__<span class="stylered"></span><input name="year_twelth" type="text" value=<?php echo $data['year_twelth']; ?>> </td>
<td><input name="b_utwelth" type="text" value=<?php echo $data['b_utwelth']; ?>></td>
<td><input name="per_twelth" type="text"  value=<?php echo $data['per_twelth']; ?>></td>
<td>
<select name="result_twelth">
<option><?php echo $data['result_twelth']; ?></option>
<option>_ _ _ _</option>
<option>Pass</option>
<option>Ex.</option>
</select>
</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr class="stylemall">
<td><font color="white">1st sem__<span class="stylered"></span> <input name="year_one" type="text" value=<?php echo $data['year_one']; ?>></td>
<td><font color="white">RGPV Bhopal<span class="stylered"></span> </td>
<td><input name="sgpa_one" type="text" value=<?php echo $data['sgpa_one']; ?>></td>
<td>
<select name="result_one">
<option><?php echo $data['result_one']; ?></option>
<option>_ _ _ _</option>
<option>Pass</option>
<option>Ex.</option>
</select>
</td>
<td rowspan="2"><input name="cgpa_onetwo" type="text" value=<?php echo $data['cgpa_onetwo']; ?>></td>
<td><input name="attempts_one" type="text" value=<?php echo $data['attempts_one']; ?>></td>
</tr>
<tr class="stylemall">
<td><font color="white">2nd sem__<span class="stylered"></span> <input name="year_two" type="text" value=<?php echo $data['year_two']; ?>></td>
<td><font color="white">RGPV Bhopal<span class="stylered"></span> </td>
<td><input name="sgpa_two" type="text" value=<?php echo $data['sgpa_two']; ?>></td>
<td>
<select name="result_two">
<option><?php echo $data['result_two']; ?></option>
<option>_ _ _ _</option>
<option>Pass</option>
<option>Ex.</option>
</select>
</td>
<td><input name="attempts_two" type="text" value=<?php echo $data['attempts_two']; ?>></td>
</tr>

<tr class="stylemall">
<td><font color="white">3rd sem__<span class="stylered"></span> <input name="year_three" type="text" value=<?php echo $data['year_three']; ?>></td>
<td><font color="white">RGPV Bhopal<span class="stylered"></span> </td>
<td><input name="sgpa_three" type="text" value=<?php echo $data['sgpa_three']; ?>></td>
<td>
<select name="result_three">
<option><?php echo $data['result_three']; ?></option>
<option>_ _ _ _</option>
<option>Pass</option>
<option>Ex.</option>
</select>
</td>
<td><input name="cgpa_three" type="text" value=<?php echo $data['cgpa_three']; ?>></td>
<td><input name="attempts_three" type="text" value=<?php echo $data['attempts_three']; ?>></td>
</tr>

<tr class="stylemall">
<td><font color="white">4th sem__<span class="stylered"></span> <input name="year_four" type="text" value=<?php echo $data['year_four']; ?>></td>
<td><font color="white">RGPV Bhopal<span class="stylered"></span> </td>
<td><input name="sgpa_four" type="text" value=<?php echo $data['sgpa_four']; ?>></td>
<td>
<select name="result_four">
<option><?php echo $data['result_four']; ?></option>
<option>_ _ _ _</option>
<option>Pass</option>
<option>Ex.</option>
</select>
</td>
<td><input name="cgpa_four" type="text" value=<?php echo $data['cgpa_four']; ?>></td>
<td><input name="attempts_four" type="text" value=<?php echo $data['attempts_four']; ?>></td>
</tr>

<tr class="stylemall">
<td><font color="white">5th sem__<span class="stylered"></span><input name="year_five" type="text" value=<?php echo $data['year_five']; ?>> </td>
<td><font color="white">RGPV Bhopal<span class="stylered"></span> </td>
<td><input name="sgpa_five" type="text" value=<?php echo $data['sgpa_five']; ?>></td>
<td>
<select name="result_five">
<option><?php echo $data['result_five']; ?></option>
<option>_ _ _ _</option>
<option>Pass</option>
<option>Ex.</option>
</select>
</td>
<td><input name="cgpa_five" type="text" value=<?php echo $data['cgpa_five']; ?>></td>
<td><input name="attempts_five" type="text" value=<?php echo $data['attempts_five']; ?>></td>
</tr>

<tr class="stylemall">
<td><font color="white">6th sem__<span class="stylered"></span><input name="year_six" type="text" value=<?php echo $data['year_six']; ?>> </td>
<td><font color="white">RGPV Bhopal<span class="stylered"></span> </td>
<td><input name="sgpa_six" type="text"  value=<?php echo $data['sgpa_six']; ?>></td>
<td>
<select name="result_six">
<option><?php echo $data['result_six']; ?></option>
<option>_ _ _ _</option>
<option>Pass</option>
<option>Ex.</option>
</select>
</td>
<td>&nbsp;</td>
<td><input name="attempts_six" type="text" value=<?php echo $data['attempts_six']; ?>></td>
</tr>

<tr class="stylemall">
<td><font color="white">Aggregate(CGPA)<span class="stylered"></span> </td>
<td><font color="white">RGPV Bhopal<span class="stylered"></span> </td>
<td><input name="sgpa_A" type="text" value=<?php echo $data['sgpa_A']; ?> ></td>
<td>
<select name="result_A">
<option><?php echo $data['result_A']; ?></option>
<option>_ _ _ _</option>
<option>Pass</option>
<option>Ex.</option>
</select>
</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr bgcolor="#EEEEEE">
<td colspan="4" align="center" class="stylemedium">Other Qualifications</td>
<td bgcolor="#EEEEEE">Semester</td>
<td bgcolor="#EEEEEE">Fees</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><font color="white">1st sem<span class="stylered"></span> </td>
<td><input name="fees_one" type="text" value=<?php echo $data['fees_one']; ?>></td>

</tr>
<tr>
<td colspan="4">&nbsp;</td>
<td><font color="white">2nd sem<span class="stylered"></span> </td>
<td><input name="fees_two" type="text" value=<?php echo $data['fees_two']; ?>></td>
</tr>
<tr class="stylemall">
<td><font color="white">Enter Your Other Qualification(if any)</td>
<td><input name="oth_qua" type="text"  value=<?php echo $data['oth_qua']; ?>></td>
<td colspan="2">&nbsp;</td>

<td><font color="white">3rd sem<span class="stylered"></span> </td>
<td><input name="fees_three" type="text" value=<?php echo $data['fees_three']; ?>></td>

<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><font color="white">4th sem<span class="stylered"></span> </td>
<td><input name="fees_four" type="text" value=<?php echo $data['fees_four']; ?>></td>
</tr>

<tr>
<td colspan="4">&nbsp;</td>
<td><font color="white">5th sem<span class="stylered"></span> </td>
<td><input name="fees_five" type="text" value=<?php echo $data['fees_five']; ?>></td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEEE"><span class="stylered">* <em>means fields are
compulsory</em> </span></td>
<td><font color="white">6th sem<span class="stylered"></span> </td>
<td><input name="fees_six" type="text" value=<?php echo $data['fees_six']; ?>></td>
</tr>
<input type="hidden" name="sid" value="<?php echo $data['roll']; ?>">
<tr>
<td colspan="6" align="center"><input name="submit" type="submit"  style="border-radius:50%; background-color:white;" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;
<input name="close" type="button" value="_Close_"  style="border-radius:50%; background-color:white;"
onClick="self.location='View_student.php'"></td>
</tr>
</table></td>
</tr>
<tr>
<td width="100%" height="5%" align="center"></td>
</tr>
</table>
&nbsp;&nbsp;&nbsp;
</form>
<footer>
<center></h1><font color="white">DEVELOPED BY :- BHOOMIKA, MO.ASIF, NITESH, UTTAM (2018)</font><h1></center>
</footer>
</body>
</html>


