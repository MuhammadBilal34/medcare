<?php
session_start();
if(!isset($_SESSION["U_N"]))
{
	
	header("Location:Login.php");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php



include('config.php');


//$qry="select * from visitors";

$qry="select Country,sum(visitors) from visitor group by Country";

$rs=mysqli_query($con,$qry);


?>
<head>
    <meta charset="utf-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Free Bootstrap Admin Template : Binary Admin</title>
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

   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Country', 'visitors'],
        
        <?php
        
        while($result=mysqli_fetch_assoc($rs)){
            
            //echo "['".$result['Country']."',".$result['visitors']."],";
                echo "['".$result['Country']."',".$result['sum(visitors)']."],";
        }
        
        ?>
        
        
        
        ]);

        var options = {
          title: 'My visitors Ratio'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
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
        <div id="page-inner">
                <div class="row">
                    <div style="text-align: center;" class="col-md-12">
                     <h2 style="color:#571AC0;">Admin Dashboard</h2>   
                        <h5>Welcome <?php echo $_SESSION['U_N']; ?>, Love to see you back. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                 <!-- /. ROW  -->
                <hr />                
              
                 <!-- /. ROW  -->
                
                 <!-- /. ROW  -->
              
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="chat-panel panel panel-default chat-boder chat-panel-head" >
                        <div class="panel-heading">
                            Doctor Profiles
                        </div>


                        <div class="panel-body">
                            <ul class="chat-box">
                                
                                    <div class="chat-body"> 
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Patient ID</th>
                                            <th>Patient NAME</th>
                                            <th>Patient Desier Name</th>
                                            <th>Patient EMAIL</th>
                                            <th>Patient PASSWORD</th>
                                            <th>Patient RE-PASSWORD</th>
                                            <th>Patient UPDATE</th>
                                            <th>Patient DELETE</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                          <?php
                                                include("config.php");
                                                $sql="select * from p_login";
                                                $rs=mysqli_query($con,$sql);
                                                while($result=mysqli_fetch_array($rs)){
                                            ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $result['id'] ?></td>
                                            <td><?php echo $result['name'] ?></td>
                                            <td><?php echo $result['d_user'] ?></td>
                                            <td><?php echo $result['email'] ?></td>
                                            <td><?php echo $result['password'] ?></td>
                                            <td><?php echo $result['r_password'] ?></td>
''
                                                     <td><a href="g_update.php?az=<?php echo $result['id']?>"  style="text-decoration:none; color:#000;">
                                            <button  class="btn btn-primary" >UPDATE</a></td>

                                                     <td><a href="g_delet.php?az=<?php echo $result['id']?>"  style="text-decoration:none; color:#000;">
                                            <button  class="btn btn-primary" >DELETE</a></td>
                                         </tr>

                                     <?php
                                                       }
                                                       ?>
                                    </tbody>
                                </table>                                       
                                          
                                </div>
                            </ul>
                        </div>
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
