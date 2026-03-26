<?php
include("config.php");
if(isset($_GET["az"]))

{	

	$val=$_GET["az"];
		$query = mysqli_query($con,"delete from p_login where id='$val'");
		if($query)
		{
			header("Location:add.php");
		}
	
}


?>