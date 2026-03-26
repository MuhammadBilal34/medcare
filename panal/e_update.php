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
                <a class="navbar-brand" style="background-color: #571AC0; font-size: 20px; text-align: center; " href="index.php">
                <?php
                  echo $_SESSION['U_N'];
        ?>
        </a> 
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"> &nbsp; <a href="logout.php" style="background-color: #571AC0;" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div style="text-align: center;" class="col-md-12">
                     <h2 style="color: #571AC0;">Edited Profile</h2>
                     <h5>Welcome <?php echo $_SESSION['U_N']; ?> , Love to see you back. </h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edited profile Detail
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Edited Doctor Profile </h3>
                                    <?PHP
                                      include("config.php");
					                            $ab=$_GET['az'];
					                            $sql="select * from dr where id='$ab'";
					                            $rs=mysqli_query($con,$sql);
					                            while($result=mysqli_fetch_array($rs)){
                                        if($sql)
             {
                $mess="update Successfully";
              }         
      else
      {
        $mess=mysqli_error();
      }
				                            ?>
                                  <form method="post" enctype="multipart/form-data">
                                      <div class="form-group">
                                            <label>Employee ID</label>
                                            <input  class="form-control" type="text" name="e_i" value="<?php echo $result['id'] ?>" />
                                      </div>
                                      <div class="form-group">
                                        <label>Employee Name</label>
                                        <input class="form-control" type="text" name="e_n"  value=" <?php echo $result['name'] ?>" />
                                      </div>
                                      <div class="form-group">
                                        <label>Employee Username</label>
                                        <input class="form-control" type="text" name="e_u"  value=" <?php echo $result['av'] ?>" />
                                      </div>

                                      <div class="form-group">
                                        <label>Employee Email</label>
                                        <input class="form-control" type="text" name="e_e"  value=" <?php echo $result['ed'] ?>" />
                                      </div>
                                      <div class="form-group">
                                            <label>Employee Password</label>
                                            <input class="form-control" type="text" name="e_p"  value="<?php echo $result['ex'] ?>"/>
                                      </div>
                                      <div class="form-group">
                                            <label>Employee Re-Password</label>
                                            <input class="form-control" type="text" name="e_rp"  value="<?php echo $result['location'] ?> "/>
                                      </div>
                                      <div class="form-group">
                                      <label> 
                                          <?php 
                                              if(isset($_POST["submit"]))
											                        echo $mess 
                                          ?>
                                      </label>
                                      </div>
                                        <input type="submit" name="submit" class="btn btn-success" value="Submit Button" />
                                        <button type="reset" class="btn btn-primary">Reset</button>
                                  </form>
                                <br />
                            </div>
                  <div class="col-md-6">
                    <img src="upload<?php echo $result['img']; ?>" class="img-responsive"    />
                  </div>     
                  <?php
					             }
									?>  
      <?php
        include("config.php");
        $ab=$_GET['az'];
        if(isset($_POST['submit'])){
	  	  $a=$_POST['e_n'];
	      $b=$_POST['e_u'];
	      $c=$_POST['e_e'];
        $d=$_POST['e_p'];
        $e=$_POST['e_rp'];
	      $sql="update dr set name='$a',av='$b',ed='$c' ,ex='$d' ,location='$e' where id='$ab'";
	      mysqli_query($con,$sql);
	    }
      ?>
              </div>
            </div>
          </div>   
          <!-- End Form Elements -->
        </div>
      </div>
    <!-- /. ROW  -->
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
