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

<html>
<head>
<style>
footer
{
border-radius:10px;	
background:darkBLUE;
height:70px;
font-size:25px;
line-height:60px;
border: 5px solid black;
}
</style>
<body>
<header>
  <h5><a href="Admin_dash.php" style="float:left; margin-right:5px; color:#fff; font-size:15px;">Back to Admin Dashboard</a></h5>
	<h3><a href="Logout.php" style="float:right; margin-right:30px; color:#fff; font-size:20px;">Logout</a></h3>
       <h2 align="center"><font color="white">Welcome to Admin Dashboard<font size="5px">(Add Student)</font></font></h2>
	   
</header>
<form  method="post" action="" enctype="multipart/form-data">
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
<td><input name="roll" type="text" placeholder="15047c04010" required></td>
<td><font color="white">Branch </td>
<td>
<select name="branch">
<option>Select_Branch</option>
<option>C.S.E.</option>
<option>C.T.</option>
<option>E.E.</option>
<option>M.E.</option>
</select>
</td>
<td><font color="white">Semester  </td>
<td>
<select name="sem">
<option>Select_Semester</option>
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
<td><font color="white">Name <span class="stylered">*</span> </td>
<td><input name="name" type="text"placeholder="Bhoomika_Pandey" required></td>
<td><font color="white">Gender </td>
<td>
<select name="gen">
<option>Select_Gender</option>
<option>Male</option>
<option>Female</option>
<option>Other</option>
</select>
</td>
<td><font color="white">Contact No <span class="stylered">*</span> </td>
<td><input name="contact" type="text" placeholder="9425869500" required></td>
</tr>
<tr class="stylesmall">
<td><font color="white">Father's Name</td> <span class="stylered"></span> </td>
<td><input name="f_name" type="text" placeholder="Mr.Brijesh_Pandey"></td>
<td><font color="white">Father's Contact No. <span class="stylered"></span> </td>
<td><input name="f_contact" type="text" placeholder="9424857625" ></td>
<td><font color="white"> Email <span class="stylered"></span> </td>
<td><input name="email" type="email" placeholder="ram@gmail.com"></td>
</tr>
<tr class="stylesmall">
<td><font color="white">Date Of Birth </td>
<td><input name="dob" type="date" placeholder="26-08-1999"</td>
<td><font color="white">Category <span class="stylered"></span> </td>
<td>
<select name="category">
<option>Select_Category</option>
<option>General</option>
<option>OBC</option>
<option>SC</option>
<option>ST</option>
</select>
</td>
<td><font color="white"> Pin.:-</td>
<td><input name="pin" type="text" placeholder="485005"></td>
</tr>

<tr class="stylesmall">
<td><font color="white">District </td>
<td><input name="distt" type="text" placeholder="Satna"></td>
<td><font color="white">City</td>
<td><input name="address" type="text" placeholder="Satna_(M.P.)"></td>
<td><font color="white">Post</td>
<td><input name="post" type="text" placeholder="Birla_Vikas"></td>
</tr>
<tr class="stylesmall">
<td><font color="white">Village </td>
<td><input name="village" type="text" placeholder="Semariya"></td>
<td><font color="white">Local Place</td>
<td><input name="lp" type="text" placeholder="Nai_Basti"></td>
<td><font color="white">Status </td>
<td><input name="status" type="text" placeholder="Regular or Backalog"></td>
</tr>
<tr class="stylesmall">
<td><font color="white">Date Of Joining</td>
<td><input name="doj" type="date" placeholder="04/08/15"></td>
<td><font color="white">Student From TFW </td>
<td>
<select name="tfw">
<option>NO</option>
<option>YES</option>
</select>
</td>
<td><font color="white">Employment Status</td>
<td><input name="emp_status" type="text" placeholder="Software_Engineer"></td>
</tr>
<tr>
<td><font color="white">Year of stydying</td>
<td><input name="year" type="text" placeholder="2018"></td>
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
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><font color="white">Name of Exam </td>
<td><font color="white">Board/University </td>
<td><font color="white">Percentage or SGPA  </td>
<td><font color="white">Result(Ex.or Pass) </td>
<td><font color="white">CGPA </td>
<td><font color="white">NO.Of Attempts </td>
</tr>
<tr class="stylemall">
<td><font color="white">10th_<input name="year_ten" type="text"  placeholder="March-April(2014)"> </td>
<td>
<select name="b_uten">
<option>_ _ _ _</option>
<option>M.P._Board</option>
<option>CBSE</option>
<option>ICSE</option>
<option>U.P._Board</option>
<option>CG_Board</option>
</select>
</td>
<td><input name="per_ten" type="text"></td>
<td>
<select name="result_ten">
<option>_ _ _ _</option>
<option>Pass</option>
<option>Fail</option>
</select>
</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr class="stylemall">
<td><font color="white">12th_<input name="year_twelth" type="text"  placeholder="March-April(2016)"> </td>
<td>
<select name="b_utwelth">
<option>_ _ _ _</option>
<option>M.P._Board</option>
<option>CBSE</option>
<option>ICSE</option>
<option>U.P._Board</option>
<option>CG_Board</option>
</select>
</td>
<td><input name="per_twelth" type="text" ></td>
<td>
<select name="result_twelth">
<option>_ _ _ _</option>
<option>Pass</option>
<option>Fail</option>
</select>
</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr class="stylemall">
<td><font color="white">1st sem <input name="year_one" type="text"  placeholder="December-2015"></td>
<td><font color="white">RGPV Bhopal<span class="stylered"></span> </td>
<td><input name="sgpa_one" type="text" placeholder="0.0"></td>
<td>
<select name="result_one">
<option>_ _ _ _</option>
<option>Pass</option>
<option>Ex.</option>
</select>
</td>
<td rowspan="2"><input name="cgpa_onetwo" type="text" placeholder="0.0"></td>
<td><input name="attempts_one" type="text"></td>
</tr>
<tr class="stylemall">
<td><font color="white">2nd sem <input name="year_two" type="text"  placeholder="June-2016" ></td>
<td><font color="white">RGPV Bhopal<span class="stylered"></span> </td>
<td><input name="sgpa_two" type="text" placeholder="0.0"></td>
<td>
<select name="result_two">
<option>_ _ _ _</option>
<option>Pass</option>
<option>Ex.</option>
</select>
</td>
<td><input name="attempts_two" type="text"></td>
</tr>

<tr class="stylemall">
<td><font color="white">3rd sem <input name="year_three" type="text" placeholder="December-2016"></td>
<td><font color="white">RGPV Bhopal<span class="stylered"></span> </td>
<td><input name="sgpa_three" type="text" placeholder="0.0"></td>
<td>
<select name="result_three">
<option>_ _ _ _</option>
<option>Pass</option>
<option>Ex.</option>
</select>
</td>
<td><input name="cgpa_three" type="text" placeholder="0.0"></td>
<td><input name="attempts_three" type="text"></td>
</tr>

<tr class="stylemall">
<td><font color="white">4th sem <input name="year_four" type="text"  placeholder="June-2017" ></td>
<td><font color="white">RGPV Bhopal<span class="stylered"></span> </td>
<td><input name="sgpa_four" type="text" placeholder="0.0"></td>
<td>
<select name="result_four">
<option>_ _ _ _</option>
<option>Pass</option>
<option>Ex.</option>
</select>
</td>
<td><input name="cgpa_four" type="text" placeholder="0.0"></td>
<td><input name="attempts_four" type="text"></td>
</tr>

<tr class="stylemall">
<td><font color="white">5th sem <input name="year_five" type="text"   placeholder="December-2017"></td>
<td><font color="white">RGPV Bhopal<span class="stylered"></span> </td>
<td><input name="sgpa_five" type="text" placeholder="0.0"></td>
<td>
<select name="result_five">
<option>_ _ _ _</option>
<option>Pass</option>
<option>Ex.</option>
</select>
</td>
<td><input name="cgpa_five" type="text" placeholder="0.0"></td>
<td><input name="attempts_five" type="text"></td>
</tr>

<tr class="stylemall">
<td><font color="white">6th sem <input name="year_six" type="text"   placeholder="June-2018"></td> 
<td><font color="white">RGPV Bhopal<span class="stylered"></span> </td>
<td><input name="sgpa_six" type="text" placeholder="0.0" ></td>
<td>
<select name="result_six">
<option>_ _ _ _</option>
<option>Pass</option>
<option>Ex.</option>
</select>
</td>
<td>&nbsp;</td>
<td><input name="attempts_five" type="text"></td>
</tr>

<tr class="stylemall">
<td><font color="white">Aggregate(CGPA)<span class="stylered"></span> </td>
<td><font color="white">RGPV Bhopal<span class="stylered"></span> </td>
<td><input name="sgpa_A" type="text"  placeholder="0.0"></td>
<td>
<select name="result_A">
<option>_ _ _ _</option>
<option>Pass</option>
<option>Ex.</option>
</select>
</td>
<td colspan="2">&nbsp;</td>
</tr>
<tr>
<td colspan="6">&nbsp;</td>
</tr>
<tr>
<td bgcolor="White"><input type="file" name="image" value="" required></td>
</tr>

<tr bgcolor="#EEEEEE">
<td colspan="4" align="center" class="stylemedium">Other Qualifications</td>
<td bgcolor="#EEEEEE">Semester</td>
<td bgcolor="#EEEEEE">Fees</td>
<tr>
<td>&nbsp </td>
<td>&nbsp </td>
<td>&nbsp </td>
<td>&nbsp </td>
<td><font color="white">1st sem<span class="stylered"></span> </td> 
<td><input name="fees_one" type="text" ></td>
</tr>

<tr class="stylemall">
<td><font color="white">Enter Your Other Qualification(if any)</td>
<td><input name="oth_qua" type="text"></td>
<td>&nbsp </td>
<td>&nbsp </td>
<td><font color="white">2nd sem<span class="stylered"></span> </td> 
<td><input name="fees_two" type="text" ></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>

<td><font color="white">3rd sem<span class="stylered"></span> </td> 
<td><input name="fees_three" type="text"></td>

</tr>

<tr>
<td colspan="4">&nbsp;</td>
<td><font color="white">4th sem<span class="stylered"></span> </td> 
<td><input name="fees_four" type="text"></td>
</tr>
<tr>
<td colspan="4" bgcolor="EEEEEE"><span class="stylered">* <em>means fields are
compulsory</em> </span></td>
<td><font color="white">5th sem<span class="stylered"></span> </td> 
<td><input name="fees_five" type="text" ></td>
</tr>
<tr>
<td colspan="4">&nbsp;</td>
<td><font color="white">6th sem<span class="stylered"></span> </td> 
<td><input name="fees_six" type="text" ></td>
</tr>
<tr>
<td colspan="6" align="center"><input name="submit" type="submit" style="border-radius:50%;background-color:white;"
 value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;
<input name="reset" type="reset"  style="border-radius:50%; background-color:white;" value="Reset">&nbsp;&nbsp;&nbsp;&nbsp;
<input name="close" type="button" style="border-radius:50%; background-color:white;" value="Close"
onClick="self.location='Admin_dash.php'"></td>
</tr>
</table></td>
</tr>
<tr>
<td width="100%" height="5%" align="center"></td>
</tr>
</table>
</form>
<footer>
<center></h1><font color="white">DEVELOPED BY :- BHOOMIKA, MO.ASIF, NITESH, UTTAM (2018)</font><h1></center>
</footer>
</body>
</html>


<?php
$dbhost='localhost';
$username='root';
$password="";
$db="student1";
$conn=mysqli_connect("$dbhost","$username","$password","$db");

if(isset($_POST['submit']))
{
$roll=$_POST['roll'];
$branch=$_POST['branch'];
$name=$_POST['name'];
$sem=$_POST['sem'];
$f_name=$_POST['f_name'];
$f_contact= $_POST['f_contact'];
$dob= $_POST['dob'];
$category= $_POST['category'];
$distt= $_POST['distt'];
$pin= $_POST['pin'];
$email= $_POST['email'];
$address= $_POST['address'];
$contact= $_POST['contact'];
$emp_status= $_POST['emp_status'];
$gen= $_POST['gen'];
$tfw= $_POST['tfw'];
$village= $_POST['village'];
$post= $_POST['post'];
$lp= $_POST['lp'];
$status= $_POST['status'];
$doj= $_POST['doj'];
$year= $_POST['year'];
$b_uten= $_POST['b_uten'];
$per_ten= $_POST['per_ten'];
$result_ten= $_POST['result_ten'];
$b_utwelth= $_POST['b_utwelth'];
$per_twelth= $_POST['per_twelth'];
$result_twelth= $_POST['result_twelth'];
$sgpa_one= $_POST['sgpa_one'];
$result_one= $_POST['result_one'];
$cgpa_onetwo= $_POST['cgpa_onetwo'];
$attempts_one= $_POST['attempts_one'];
$sgpa_two= $_POST['sgpa_two'];
$result_two= $_POST['result_two'];
$attempts_two= $_POST['attempts_two'];
$sgpa_three= $_POST['sgpa_three'];
$result_three= $_POST['result_three'];
$cgpa_three= $_POST['cgpa_three'];
$attempts_three= $_POST['attempts_three'];
$sgpa_four= $_POST['sgpa_four'];
$result_four= $_POST['result_four'];
$cgpa_four= $_POST['cgpa_four'];
$attempts_four= $_POST['attempts_four'];
$sgpa_five= $_POST['sgpa_five'];
$result_five= $_POST['result_five'];
$cgpa_five= $_POST['cgpa_five'];
$attempts_five= $_POST['attempts_five'];
$sgpa_six= $_POST['sgpa_six'];
$result_six= $_POST['result_six'];
$attempts_six= $_POST['attempts_six'];
$sgpa_A= $_POST['sgpa_A'];
$result_A= $_POST['result_A'];
$oth_qua= $_POST['oth_qua'];
$fees_one= $_POST['fees_one'];
$fees_two= $_POST['fees_two'];
$fees_three= $_POST['fees_three'];
$fees_four= $_POST['fees_four'];
$fees_five= $_POST['fees_five'];
$fees_six= $_POST['fees_six'];
$year_ten= $_POST['year_ten'];
$year_twelth= $_POST['year_twelth'];
$year_one= $_POST['year_one'];
$year_two= $_POST['year_two'];
$year_three= $_POST['year_three'];
$year_four= $_POST['year_four'];
$year_five= $_POST['year_five'];
$year_six= $_POST['year_six'];
$imagename= $_FILES['image']['name'];
$tempname= $_FILES['image']['tmp_name'];
$folder= '../dataimg/'.$imagename;
move_uploaded_file($tempname,$folder);

$check=mysqli_query($conn,"select * from data1 where roll='$roll'");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0)
	   {
      ?>
	   <script>
	      alert('Student Already Exists');

	   </script>
    <?php
   } 
   else
	   {  



	$query="INSERT INTO `data1`(`roll`, `branch`, `name`, `sem`, `f_name`, `f_contact`, `dob`, `category`, `distt`, `pin`, `email`, `address`, `contact`,
	`emp_status`, `gen`, `tfw`, `village` , `post`, `lp`, `status`, `doj`, `year`,`b_uten`, `per_ten`, `result_ten`, `b_utwelth`, `per_twelth`, `result_twelth`,
	`sgpa_one`, `result_one`, `cgpa_onetwo`, `attempts_one`, `sgpa_two`, `result_two`, `attempts_two`, `sgpa_three`, `result_three`, `cgpa_three`, `attempts_three`, 
	`sgpa_four`, `result_four`, `cgpa_four`, `attempts_four`, `sgpa_five`, `result_five`, `cgpa_five`, `attempts_five`, `sgpa_six`,
	`result_six`,`attempts_six`, `sgpa_A`, `result_A`, `oth_qua`, `fees_one`, `fees_two`, `fees_three`, `fees_four`, `fees_five`, `fees_six`,`year_ten`, 
	`year_twelth`,`year_one`, `year_two`,`year_three`, `year_four`, `year_five`, `year_six`, `image`)
	VALUES ('$roll','$branch','$name','$sem','$f_name','$f_contact','$dob','$category','$distt','$pin','$email','$address','$contact','$emp_status','$gen','$tfw',
	'$village','$post','$lp','$status','$doj','$year','$b_uten','$per_ten','$result_ten','$b_utwelth','$per_twelth','$result_twelth',
	'$sgpa_one','$result_one','$cgpa_onetwo','$attempts_one','$sgpa_two','$result_two','$attempts_two','$sgpa_three','$result_three',
	'$cgpa_three','$attempts_three','$sgpa_four','$result_four','$cgpa_four','$attempts_four','$sgpa_five','$result_five','$cgpa_five','$attempts_five',
	'$sgpa_six','$result_six','$attempts_six','$sgpa_A','$result_A','$oth_qua','$fees_one','$fees_two','$fees_three','$fees_four','$fees_five','$fees_six',
	'$year_ten','$year_twelth','$year_one','$year_two','$year_three','$year_four','$year_five','$year_six','$folder')";
	
$data = mysqli_query($conn,$query);

if($data)
{
?>
	   <script>
	      alert('Data Inserted Successfully.');
               window.open('b.php','_self');
	   </script>
    <?php
      
}
	   }

}
?>