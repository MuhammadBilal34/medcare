<!doctype html>
<html lang="en">
<head>
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
<?php
include('nav.php');
?>
<body>

   
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->

    <section class="banner-area d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <h1>Making Health<br>
                    Care Better Together</h1>
                    <p>Also you dry creeping beast multiply fourth abundantly our itsel signs bring our. Won form living. Whose dry you seasons divide given gathering great in whose you'll greater let livein form beast  sinthete
                    better together these place absolute right.</p>
                    <a href="appointment.php" class="main_btn">Make an Appointment</a>
                    <a href="" class="main_btn_light">View Department</a>
                </div>
            </div>
        </div>
    </section>

    <!--================End Home Banner Area =================-->


   




        </div>
    </section>
    <!-- ================ testimonial section end ================= -->    

 
            
  <form action="search.php" method="get" >
    <input type="text" name="valueToSearch" placeholder="Value to Search" style="width: 500px;margin-top: 20px; margin-left: 400px;  " class="form-control" ><br>
    <input type="submit" name="search" value="SEARCH" style="width: 200px; margin-left: 550px;  "   class="btn btn-primary"><br><br>
           <?php
              include("config.php");
                  if(isset($_GET['search'])){
                $n=$_GET['valueToSearch'];
                //echo"$n";
                $q ="SELECT * FROM dr WHERE location like '%$n%'";
                $rs=mysqli_query($con,$q);
                while($result=mysqli_fetch_assoc($rs))
              {
                  $a=$result['id'];
                $b=$result['name'];
                $c=$result['av'];
                $d=$result['ed'];
                $e=$result['ex'];
                $f=$result['location'];
                $g=$result['img'];

                 
                                           
              ?>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                      <div>
                        <th>Doctor ID </th>
                        <th> Doctor username</th>
                        <th>Doctor Avaliblity</th>
                        <th>Doctor Eduction</th>
                        <th>Doctor Experiance</th>
                        <th>Doctor Location</th>
                        <th>Doctor Image</th>
                      </div>

                    </thead>
                  <tbody>
              <tr>
                <td> <?php echo $a; ?></td>
                <td> <?php echo $b; ?></td>
                <td><?php echo $c; ?></td>
                <td><?php echo $d; ?></td>
                <td> <?php echo $e; ?></td>
                <td><?php echo $f; ?></td>
                <td><img src="assets/img/<?php echo $result['img']; ?>"  style="height:100px; width:100px;"></td>
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


    <!-- start footer Area -->
    <footer class="footer-area area-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-sm-6 single-footer-widget">
                    <h4>Top Products</h4>
                    <ul>
                        <li><a href="#">Managed Website</a></li>
                        <li><a href="#">Manage Reputation</a></li>
                        <li><a href="#">Power Tools</a></li>
                        <li><a href="#">Marketing Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6 single-footer-widget">
                    <h4>Features</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6 single-footer-widget">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Experts</a></li>
                        <li><a href="#">Agencies</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>You can trust us. we only send promo offers,</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                        method="get" class="form-inline">
                      
                        <button class="click-btn btn btn-default">
                            <i class="ti-arrow-right"></i>
                        </button>
                        <div style="position: absolute; left: -5000px;">
                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text" />
                        </div>

                        <div class="info"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row footer-bottom d-flex justify-content-between">
            <p class="col-lg-8 col-sm-12 footer-text m-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            <div class="col-lg-4 col-sm-12 footer-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-dribbble"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- End footer Area -->






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/theme.js"></script>
</body>
</html>