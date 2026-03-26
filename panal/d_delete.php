<?php
include("config.php");
if(isset($_GET["abc"]))

{	

	$val=$_GET["abc"];
		$query = mysqli_query($con,"delete from reg where Id='$val'");
		if($query)
		{
			header("Location:user_detail.php");
		}
	
}


?>