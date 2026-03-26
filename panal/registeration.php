<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<?php

if(isset($_POST['sub'])){
include("config.php");
require_once "PHPMailer/PHPMailerAutoload.php";
$name=$_POST['user'];
$user=$_POST['d_user'];
$e=$_POST['email'];
$p=$_POST['pass'];
$r_p=$_POST['r_password'];



if(!empty($_FILES['file']['name'])){

$names=$_FILES['file']['name'];//flags.png
		$tmp_name = $_FILES['file']['tmp_name'];
		$location = 'upload/';
		$path=$location.$names;
			if(move_uploaded_file($tmp_name,$path))
			{	
			
$sql="insert into reg (name,username,email,password,r_password,img)values ('$name','$user','$e','$p','$r_p','$path')";

mysqli_query($con,$sql);

if($sql)
				{
				
				$result="Account create sucessfully";
				//==Email Process===================
				$mail = new PHPMailer;
				//Enable SMTP debugging. 
				//$mail->SMTPDebug = 3;                               
				//Set PHPMailer to use SMTP.
				$mail->isSMTP();            
				//Set SMTP host name                          
				$mail->Host = "smtp.gmail.com";
				//Set this to true if SMTP host requires authentication to send email
				$mail->SMTPAuth = true;                          
				//Provide username and password     
				$mail->Username = "studentaccp2019@gmail.com";                 
				$mail->Password = "Aptech123+";                           
				//If SMTP requires TLS encryption then set it
				$mail->SMTPSecure = "tls";                           
				//Set TCP port to connect to 
				$mail->Port = 25;                                   
				
				$mail->From = "studentaccp2019@gmail.com";
				$mail->FromName = "Information";
				
				$mail->addAddress("studentaccp2019@gmail.com", "My Cart");
				$mail->AddCC($e,'');
				
				$mail->isHTML(true);
				
				$mail->Subject = "Confirmation Email ";
				$mail->Body = "<h3>Profile Info:</h3>
				<table border=1>
				<tr>
			
				
				<tr><td>User Name</td><td>".$name."</td></tr>
				<tr><td>Email #</td><td>".$e."</td></tr>
				<tr><td>Password #</td><td>".$p."</td></tr>
			
				
				</table>";
				
				$mail->AltBody = "Now you can continue witb this email and password as username and password";
				$mail->send();		
			//==End Email Process===================
			
			
			}
			else
			{
					
				$result='Account not Create';
			}
		}			
		else
		{				
			$result='ERROR';
		}
	}
	else
	{		
		$result='Please choose a file:(';
	}
}
?>
<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <h2> Binary Admin : Doctor's Registration</h2>
               
                <h5>( Register yourself to get access )</h5>
                 <br />
            </div>
        </div>
         <div class="row">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>  New User ? Register Yourself </strong>  
                            </div>
                            <div class="panel-body">
                                <form method="post" enctype="multipart/form-data">
<br/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input type="text" name="user" class="form-control" placeholder="Your Name" />
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="d_user" class="form-control" placeholder="Desired Username" />
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope" ></i></span>
                                            <input type="text" name="email" class="form-control" placeholder="Your Email" />
                                        </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="pass" class="form-control" placeholder="Enter Password" />
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="r_password" class="form-control" placeholder="Retype Password" />
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
       										<input type="file" name="file" class="form-control"  />
                                     	</div>
                                        
                                      
   

    
    

                                        
                                        
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">
                                          	<label>
                                            	<?php if(isset($_POST["sub"]))
												echo $result ?>
                                            </label>
                                        </span>
                                    </div>   
                                     <input type="submit" name="sub" class="btn btn-success " value="Register Me"/>
                                    <hr />
                                    Already Registered ?  <a href="login.php" >Login here</a>
                                    </form>
                            </div>
                           </div>
                   
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
