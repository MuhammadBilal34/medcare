
<?php
session_start();
include("config.php");

if(!isset($_SESSION["U_N"]))
{
	
	header("Location:Login.php");
}
?>



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
<body>
    <div id="wrapper">
    
    
     <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                
                <?php
                	echo $_SESSION['U_N'];
				?>
				
                
                
                </a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="login.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>
         </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
              <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center"><img src="<?php echo $_SESSION['image'] ?>" class="user-image img-responsive"/></li>
        <li>
                    <a class="" style="background-color: #571AC0;"  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                </li>
                <li >
                    <a href="../index.php"><i class="fa fa-bolt fa-3x"></i>Doctor Panal</a>
                </li>
                <?php



                    $namee=$_SESSION['U_u'];
      
        if($namee=='admin')
        {


?>  
                <li >
                     <a href="#"><i class="fa fa-laptop fa-3x"></i>Registeration<span class="fa arrow">  </span></a>
                     <ul class="nav nav-second-level">
                            <li>
                                <a href="registeration.php">Registeration</a>
                            </li>
                            <li> <a href="e_table.php">About doctors  </a> 
                            </li>
                              <li> <a href="user_detail.php">About Users  </a> 
                            </li>
                        </ul>
                </li>


                <?php
            }
            ?>
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-3x"></i>About Patient<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="my.php">Appointment</a>
                            </li>
                            <li><a href="add.php"> Patient details</a>   </li>
                        </ul>
                      </li>  
               
 <?php



                    $namee=$_SESSION['U_u'];
      
        if($namee=='admin')
        {


?>  

                <li>
                        <a  href="review.php"><i class="fa fa-square-o fa-3x"></i> Cities<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="AddCities.php">Add Cities</a>
                            </li>
                            <li>
                                <a href="Showcities.php">Show Cities</a>
                            </li>
                        </ul>
                </li>
                <?php
            }
                ?>
                <li>
                    <a  href="make_profile.php"><i class="fa fa-envelope fa-3x"></i>Dr- Profile</a>
                </li> 

 <li>
                                <a href="review.php">My Appointment</a>
                            </li>



                </ul>
               
            </div>
            
        </nav>  
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Forms Page</h2>   
                        <h5> <h5> Welcome 
                        
                          <?php
                	echo $_SESSION['U_N'];
				?>
                         </h5> </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Element Examples
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Basic Form Examples</h3>
                              
                              
            <?php
			
			include("config.php");
			
			if(isset($_POST['submit'])){



                   $n=$_POST['p_n'];
				   $q=$_POST['p_q'];  
				   $p=$_POST['p_p'];
				   $i=$_FILES['file']['name'];
				   
				   $tmp_name=$_FILES['file']['tmp_name'];
				   
				   $path="assets/img/".$i;	
				   
				   if(move_uploaded_file($tmp_name,$path)){				
					$sql="insert into product (pro_name,pro_quantity,pro_price,p_image)values ('$n','$q','$p','$i')";

mysqli_query($con,$sql);
				   
if($sql){
	
	$mess="product inserted";
	
	}					
				else{
						$mess=mysqli_error();
					
					}
				
				}
			
			}
			?>                  
                              
                              
                              
                              
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Product name</label>
                                            <input class="form-control" type="text" name="p_n" />
                                         
                                        </div>
                                        <div class="form-group">
                                            <label>Product Quantity</label>
                                            <input class="form-control" type="text" name="p_q" />
                                        </div>
                                        <div class="form-group">
                                            <label>Product Price</label>
                                            <input class="form-control" type="text" name="p_p" />
                                        </div>
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" name="file" />
                                        </div>
                                        
                                          <div class="form-group">
                                            <label> <?php if(isset($_POST["submit"]))
											echo $mess ?></label>
                                           
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                    
                                        <input type="submit" name="submit" class="btn btn-success" value="Submit Button" />
                                        <button type="reset" class="btn btn-primary">Reset Button</button>

                                    </form>
                                    <br />
                                    

                                 
    </div>
                 <div class="col-md-6">
  
           <img src="<?php if(isset($_POST['submit']))echo "assets/img/". $i ?>" class="img-responsive"    />
  
  
  </div>                     
                                
                            </div>
                        </div>
                    </div>   
                
                     <!-- End Form Elements -->
                </div>
             
            </div>
                <!-- /. ROW  -->
               <div class="row">
               
               
               
               
                    
                </div>
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
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
