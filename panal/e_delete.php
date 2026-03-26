<?php
include("config.php");
if(isset($_GET["abc"]))

{	

	$val=$_GET["abc"];
		$query = mysqli_query($con,"delete from dr where id='$val'");
		if($query)
		{
			header("Location:e_table.php");
		}
	
}


?>