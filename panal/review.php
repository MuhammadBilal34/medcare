<?php
session_start();
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

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">


		<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     	<!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     	<!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                    <a href="index2.php"><i class="fa fa-bolt fa-3x"></i>Doctor Panal</a>
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
        <!-- /. NAV SIDE  -->        <div id="page-wrapper" >
            <div id="page-inner">
            <div class="container">
            </div>
         <div class="row ">
                <br />
                <br />
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-md-12 col-xs-offset-1">
                    <div style="text-align: center;" class="col-md-12">
                     <h2  style="color: #571AC0; ">Appointment Approvals</h2>
                     <h5>Welcome <?php echo $_SESSION['U_N']; ?> , Love to see you back. </h5>
                    </div>
                </div>
<table class="table table-hover"  style="margin-top:190px; width: 1184px; text-align: center;  background:#CCC;">
  <thead>
    <tr style="font-size:18px;" >
      <th style="text-align:center;" scope="col">Patient ID</th>
      <th style="text-align:center;" scope="col">PATIENT NAME</th>
      <th style="text-align:center;" scope="col">DEASES NAME</th>
      <th style="text-align:center;" scope="col">DOCTOR NAME</th>
      <th style="text-align:center;" scope="col">DOCTOR TIMING</th>
      <th style="text-align:center;" scope="col">LOCATION</th>
      <th style="text-align:center;" scope="col">STATUS</th>
      <th style="text-align:center;" scope="col">PATIENT CONTACT</th>
      <th style="text-align:center;" scope="col">REJECT PATIENT</th>
      <th style="text-align:center;" scope="col">ACCEPT PATIENT</th>
    
    </tr>
  </thead>
  
  
<?php
    include("config.php");

    $name=$_SESSION["U_N"];
    $sql="select * from appionment where dr_name='$name'";
    $rs=mysqli_query($con,$sql);
    while($result=mysqli_fetch_array($rs)){
?>
    <tr class="odd gradeX">
        <td><?php echo $result['id'] ?></td>
        <td><?php echo $result['p_name'] ?></td>
        <td><?php echo $result['deases_name'] ?></td>
        <td><?php echo $result['dr_name'] ?></td>
        <td><?php echo $result['dr_timing'] ?></td>
        <td><?php echo $result['location'] ?></td>
        <td><?php echo $result['status'] ?></td>
        <td><?php echo $result['p_contact'] ?></td>
        <td><a  href="reject.php?abc=<?php echo $result['id']?>" style="text-decoration:none; color:#000;">
        <button  class="btn btn-success" >REJECT</a></td>
        <td><a href="accept.php?aza=<?php echo $result['id']?>" style="text-decoration:none; color:#000;">
        <button  class="btn btn-primary" >ACCEPT</a></td>
       
    </tr>
   
    <?php
    }
    ?>  
                                </tbody>
                            </table>

                    </div>
                </div>
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
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>