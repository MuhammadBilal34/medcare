<?php
include("config.php");
if(isset($_GET["abc"]))

{	

	$val=$_GET["abc"];
$query = mysqli_query($con,"update appionment set status='Decline' where id='$val'");
		if($query)
		{
			header("Location:review.php");
		}
	
}


?>