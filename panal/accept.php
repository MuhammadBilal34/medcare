<?php
include("config.php");
if(isset($_GET["aza"]))

{	

	$val=$_GET["aza"];
		$query = mysqli_query($con,"update appionment set status='Approved' where id='$val'");
		if($query)
		{
			header("Location:review.php");
		}
	
}


?>