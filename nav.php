 
</!DOCTYPE html>
<html>
<head>
    <title></title>

     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Medcare Medical</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
 <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="top_menu row m0">
            <div class="container">
                <div class="float-left">
                    <a class="dn_btn" href="mailto:medical@example.com"><i class="ti-email"></i>medical@example.com</a>
                    <span class="dn_btn"> <i class="ti-location-pin"></i>Find our Location</span>
                </div>
                <div class="float-right">
                    <ul class="list header_social">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                        <li><a href="#"><i class="ti-skype"></i></a></li>
                        <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                    </ul>   
                </div>
            </div>  
        </div>  
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="about-us.php">About</a></li> 
                            <li class="nav-item"><a class="nav-link" href="department.php">Department</a></li> 
                            <li class="nav-item"><a class="nav-link" href="doctors.php">Doctors</a></li> 

                                <li class="nav-item"><a class="nav-link" href="search.php">search</a></li>                          
                                <ul class="dropdown-menu">
                                    
                                </ul>
                            </li> 
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

<?php
if(isset($_SESSION["U_u"]))
{

?>
                             <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                            



 <?php                        } ?>
                            
                        
<?php
if(isset($_SESSION["U_p"]))
{

?>
                            <li class="nav-item"><a class="nav-link" href="logout.php">logout</a></li>


 <?php                     
 
 
 
    }
    
    else
    {?>
            <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li> 

   <?php  }
    
     ?>




                       </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</body>
</html>




 