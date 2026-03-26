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
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
        <div id="page-wrapper" style="text-align: center;" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 style="color: #571AC0;">Doctor Details</h2>   
                        <h5>Welcome <?php echo $_SESSION['U_N']; ?> , Love to see you back. </h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Doctor Profiles
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Doctor ID</th>
                                            <th>Doctor USERNAME</th>
                                            <th>Doctor AVABILITY</th>
                                            <th>Doctor EDUCATION</th>
                                            <th>Doctor EXPERIANCE</th>
                                            <th>Doctor IMAGE</th>
                                            <th>Doctor LOCATION</th>
                                            <th>DELETE Doctor</th>
                                            <th>UPDATE Doctor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                          <?php
									            include("config.php");
									            $sql="select * from doc";
									            $rs=mysqli_query($con,$sql);
									            while($result=mysqli_fetch_array($rs)){
									        ?>
                                      <tr class="odd gradeX">
                                            <td><?php echo $result['id'] ?></td>
                                            <td><?php echo $result['username'] ?></td>
                                            <td><?php echo $result['avability'] ?></td>
                                            <td><?php echo $result['education'] ?></td>
                                            <td><?php echo $result['experiance'] ?>
                                            </td><td><?php echo $result['location'] ?></td>
                                            <td><img src="upload/<?php echo $result['image']; ?>"  style="height:100px; width:100px;"></td>
                                            <td><a  href="d_delete.php?abc=<?php echo $result['Id']?>" style="text-decoration:none; color:#000;">
                                            <button  class="btn btn-success" >Delete</a></td>
                                            <td><a href="d_update.php?az=<?php echo $result['Id']?>" style="text-decoration:none; color:#000;">
                                            <button  class="btn btn-primary" >update</a></td>
                                      </tr>
                                     <?php
									                   }
									                   ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                  <!--End Advanced Tables -->
                </div>
            </div>
            <!-- /. ROW  -->
            <!-- /. ROW  -->
            <div class="row">
            
  <form action="table.php" method="get" >
    <input type="text" name="valueToSearch" placeholder="Value to Search" size="40" class="form-control" ><br><br>
      <input type="submit" name="search" value="SEARCH" class="btn btn-primary"><br><br>
           <?php
              include("config.php");
		          if(isset($_GET['search'])){
	            $n=$_GET['valueToSearch'];
	            //echo"$n";
	            $q ="SELECT * FROM doc WHERE name like '%$n%'";
	            $rs=mysqli_query($con,$q);
	            while($result=mysqli_fetch_assoc($rs))
              {
	              $a=$result['id'];
                $b=$result['username'];
                $c=$result['avability'];
                $d=$result['education'];
                $e=$result['experiance'];
                $f=$result['location'];
              ?>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                      <tr>
                        <th>Doctor ID</th>
                        <th>Doctor USERNAME</th>
                        <th>Doctor AVABILITY</th>
                        <th>Doctor EDUCATION</th>
                        <th>Doctor EXPERIANCE</th>
                        <th>Doctor LOCATION</th>
                      </tr>
                    </thead>
                  <tbody>
              <tr>
                <td> <?php echo $a; ?></td>
                <td> <?php echo $b; ?></td>
                <td> <?php echo $c; ?></td>
                <td> <?php echo $d; ?></td>
                <td> <?php echo $e; ?></td>
                <td> <?php echo $f; ?></td>
                <td><img src="upload<?php echo $result['img']; ?>"  style="height:100px; width:100px;"></td>
                <!--<td ><a href="Fetch.php" /> CANCEL</td>-->
              </tr>
      </table>
      <?php } }
	
	     else{
		        echo"Wrong Input";
          	echo mysqli_error($con);
	         }
      ?>
	      <div class="col-md-6">
        <!--    Context Classes  -->
        <!--  end  Context Classes  -->
        </div>
      </div>
    <!-- /. ROW  -->
    </div>
  </div>
  <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
<!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
        </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
