<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../favicon.ico">

    <title>NAVABUDDHA HOSPITAL</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!--FOR FOOTER-->
    <link rel="stylesheet" href="custom/Pretty-Footer.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="custom/font-awesome.min.css">
    <!--END FOOTER-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="custom/style.css">
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

    <!--  navbar -->
   
    <?php include("header.php");
    ?>
<!--*************************End navbar *******************************-->
    <!--Carousel images in first beagaining -->

    <div class="container">
      <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div id ="imageCarousel" class="carousel slide" data-interval="5000" data-ride="carousel">
           <ol class="carousel-indicators">
             <li data-target="#imageCarousel"  data-slide-to="0"></li>
           	 <li data-target="#imageCarousel"  data-slide-to="1"></li>           	 
           </ol>
         <div class="carousel-inner">
          <div class="item active">
          	 <img src="image/doc2.jpg" class="img-responsive" >
          </div>
          <div class="item">
          	 <img src="image/doc1.jpg" class="img-responsive">
          </div>         	
         </div>
          <a href="#imageCarousel" class="carousel-control left" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>	
          <a href="#imageCarousel" class="carousel-control right" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>	
        </div>
       	
       </div>
      	
      </div>
    </div>

    <!--******************end of this carousel******************-->
  
    <!--*****************Doctor finding and another topic navbar bellow the carsouel nav bar*************************-->
    <div class="container ">
             <div class="row">
               <div class="col-xs-12">
	 	       <ul class="icons nav nav-tabs nav-justified highlighted">
		 		<li><a><img src="image/ambulance.png"><div>Ambulance Services</div></a></li>
		 		<li><a><img src="image/search.png"><div>Specialist Doctors</div></a></li>
		  		<li><a><img src="image/emergency.png"><br>Emergency Services</a></li>
		 		<li><a><img src="image/cath-lab.png"><br>ECG Services</a></li>		
		 	   </ul>
		 	 </div>
	      </div>
	  </div>    
     <!--***************** End Doctor finding and another topic navbar bellow the carsouel nav bar*************************-->   

     <!--Our Specialites image banner   -->
   
     
      <div class="container">
         <div class="margin-gap">
           <h3 class="text-center text-bold"> OUR FACILITATES</h3>
           <hr>
           <div class="row">
             <div class="large-block">
               <div class="col-md-3 col-sm-6 ">
                   <div class="large-block margin-gaps">
                     <div class="responsive_img">
                       <img src="image/cardiology.jpeg" >
                     </div>
                   <div class="innertext-design-mainpage">
                      <h3 class="text-bold">Cardiology</h3>
                   </div> 
                  </div>
               </div>  
               <div class="col-md-3 col-sm-6 ">
                   <div class="large-block margin-gaps">
                     <div class="responsive_img">
                       <img src="image/child.jpg" >
                     </div>
                    <div class="innertext-design-mainpage ">
                       <h3 class="text-bold">Obsetrics & Gynaecology</h3>
                    </div> 
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="large-block margin-gaps">
                    <div class="responsive_img">
                      <img src="image/head1.jpg" >
                    </div>
                    <div class="innertext-design-mainpage">
                      <h3 class="text-bold">Neurology</h3>
                    </div>
                   </div>
               </div>
              <div class="col-md-3 col-sm-6 ">
                 <div class="large-block margin-gaps">
                   <div class="responsive_img ">
                     <a href="facilitates.php"><img src="image/knowmore.jpg" ></a>  
                   </div>
                   <div class="innertext-design-mainpage-anchor">
                     <a href="facilitates.php" class="text-bold">Know more</a>
                   </div>
                  </div>
              </div>
             </div>
           </div> 
         </div>
        </div>  
    <!-- End Our Specialites image banner   -->
<!--*****************Doctor list***************************-->


   	    <div class="container">
          <div class="">
            <h3 class="text-center text-bold"> OUR DOCTORS</h3>
              <hr>
               <div class="row">
                 <div class="blocks_multiple"><!--this for making center text-->
                   <div class="col-md-3 col-sm-6 ">
                      <div class="responsive_img margin-gaps">
                          <a href="viewdoctor.php"><img src="image/docnam1.jpg" ><div class="text-bold ">Dr. Binod Pant</div>MBBS<div><a href="viewdoctor.php" class="btn btn-default">View Profile</a></div></a>
                     </div>  
                 </div>
                   <div class="col-md-3 col-sm-6 ">
                     <div class="responsive_img margin-gaps">
                      <div class="short-hr">
                         <hr>
                          <a href="viewdoctor1.php"><img src="image/docnam2.jpg" ><div class="text-bold ">Dr. Ashoka Bhatta</div>MBBS<div><a href="viewdoctor1.php" class="btn btn-default">View Profile</a></div></a>
                      </div>
                     </div>  
                    </div> 
                     <div class="col-md-3 col-sm-6">
                       <div class="responsive_img margin-gaps">
                         <div class="short-hr">
                           <hr>
                            <a href="viewdoctor2.php"><img src="image/docnam3.jpg" ><div class="text-bold ">Dr. Nishant Joshi</div>MBBS<div><a href="viewdoctor2.php" class="btn btn-default">View Profile</a></div></a>
                         </div>
                      </div>
                    </div> 
                    <div class="col-md-3 col-sm-6">
                       <div class="responsive_img margin-gaps">
                        <div class="short-hr">
                          <hr>
                          <a href="viewdoctor3.php"><img src="image/docnam4.jpg" ><div class="text-bold">Dr. Kamal Joshi</div>MBBS<div><a href="viewdoctor3.php" class="btn btn-default">View Profile</a></div></a>
                        </div>
                      </div>
                    </div> 
                   <div>
                 
                  </div> 
                 </div>
               </div>
                </div>
       </div> 
     <br><br>
 <!-- ********************End Our doctor image banner****************   -->
 <!--**************************footer*******************************-->
   
    <?php include("footer.php");
    ?>
 <!************************end footer****************************-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</html>
