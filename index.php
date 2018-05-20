<!Doctype html>
<html>
<? include "head.php";?>
<body>
  <div class="container">
   <div class="nav"> <!-- Linia nav --> 
     <div class="col-sm-1 col-md-1 col-lg-4">
      <div id ="logo">
        <a href="index.php"><img src="images/logo.jpg" ></a>
      </div><!-- sf de linia logo --> 
    </div>
    <div class="col-sm-1col-md-1 col-lg-8">
     <ul>
       <li><a href="#"><a href="index.php">Home</a></li>
       <li><a href="#"><a href="about.php">About</a></li>
       <li><a href="#"><a href="Work.php">Work</a></li>
       <li><a href="#"><a href="services.php">Services</a></li> 
       <li><a href="#"><a href="blog.php">Blog</a></li>  
       <li><img src="images/search.jpg" alt="Search" width="23" height="23"></li>
     </ul> 
   </div>
 </div>


 <div class="carousel"> <!-- Linia carusel--> 
  <div class="col-sm12 col-md-12 col-lg-12" style="background-color:#000406";>

   <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/fundal.jpg" alt="1" style="width:100%;">
        <div class="carousel-caption">
          <h1>Alecto is simple PSD Template Nam varius accumsan elementum aliquam</h1>

        </div>
      </div>
      <div class="item">
        <img src="images/fundal.jpg" alt="2" style="width:100%;">
        <div class="carousel-caption">
         Alecto is simple PSD Template Nam varius accumsan elementum aliquam
       </div>
     </div>

     <!-- Left and right controls -->
     <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<? include "footer.php";?>
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

</div> 
</body>
</html>
