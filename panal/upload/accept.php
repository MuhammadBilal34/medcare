<?php
include("config.php");
if(isset($_GET["aza"]))

{	

	$val=$_GET["aza"];
		$query = mysqli_query($con,"update request set status='Approved' where Id='$val'");
		if($query)
		{
			header("Location:review.php");
		}
	
}


?>