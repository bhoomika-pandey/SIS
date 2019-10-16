<?php

include('../connection.php');
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
$id= $_POST['sid'];



	$query="UPDATE `data1` SET `roll` = '$roll', `branch` = '$branch', `name` = '$name', `sem` = '$sem', `f_name` = '$f_name', `f_contact` = '$f_contact', `dob` = '$dob',
	`category` = '$category', `distt` = '$distt', `pin` = '$pin',`email` = '$email', `address` = '$address', `contact` = '$contact',`emp_status`= '$emp_status',`gen` = '$gen',
	`tfw` = '$tfw',`village` = '$village',`post` = '$post',`lp` = '$lp',`status` = '$status',`doj` = '$doj',`year` = '$year',`b_uten` = '$b_uten',
	`per_ten` = '$per_ten',`result_ten` = '$result_ten' ,`b_utwelth`= '$b_utwelth',`per_twelth`= '$per_twelth',`result_twelth`= '$result_twelth',
	`sgpa_one`= '$sgpa_one',`result_one`= '$result_one',`cgpa_onetwo` = '$cgpa_onetwo',`attempts_one` = '$attempts_one',`sgpa_two`= '$sgpa_two',
	`result_two`= '$result_two',`attempts_two` = '$attempts_two',`sgpa_three`= '$sgpa_three',`result_three`= '$result_three',`cgpa_three` = '$cgpa_three',
	`attempts_three` = '$attempts_three',`sgpa_four`= '$sgpa_four',`result_four`= '$result_four',`cgpa_four` = '$cgpa_four',`attempts_four` = '$attempts_four',
	`sgpa_five`= '$sgpa_five',`result_five`= '$result_five',`cgpa_five` = '$cgpa_five',`attempts_five` = '$attempts_five',`sgpa_six`= '$sgpa_six',
	`result_six`= '$result_six',`attempts_six` = '$attempts_six',`sgpa_A`= '$sgpa_A',`result_A`= '$result_A',`oth_qua`= '$oth_qua',`fees_one` = '$fees_one',`fees_two` = '$fees_two',
	`fees_three` = '$fees_three',`fees_four` = '$fees_four',`fees_five` = '$fees_five',`fees_six` = '$fees_six',`year_ten` = '$year_ten',`year_twelth` = '$year_twelth',
	`year_one` = '$year_one',`year_two` = '$year_two',`year_three` = '$year_three',`year_four` = '$year_four',`year_five` = '$year_five',`year_six` = '$year_six'WHERE `roll` = '$id';";
	
	
$data = mysqli_query($conn,$query);

if($data)
{
	?>
	   <script>
	      alert('Data Updated Successfully.');
		  window.open('Update_form.php?sid=<?php echo $id;?>','_self');
	   </script>
    <?php
      
}


else
{
echo"All fields are required";
}

?>