<?php
include("config.php");
if(isset($_GET["ac"]))

{	

	$val=$_GET["ac"];
		$query = mysqli_query($con,"delete from p_info where id ='$val'");
		if($query)
		{
			header("Location:table.php");
		}
	
}


?>