<?php
include("config.php");
if(isset($_GET["ac"]))

{	

	$val=$_GET["ac"];
		$query = mysqli_query($con,"delete from city where id='$val'");
		if($query)
		{
			header("Location:Showcities.php");
		}
	
}


?>