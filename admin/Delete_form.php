


<?php

include('../connection.php');

    $id=$_REQUEST['sid'];
	
	$query="DELETE FROM `data1` WHERE `roll`='$id';";
	
	
$data = mysqli_query($conn,$query);

if($data)
{
	?>
	   <script>
	      alert('Data Deleted Successfully.');
		  window.open('Delete_student.php','_self');
	   </script>
    <?php
      
}


else
{
echo"All fields are required";
}

?>
