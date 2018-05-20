<!doctype html>
<html>
<? include "head.php";?>
<body>
    <div class="container">
<? include "header.php";?>


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
              <h1>Alecto is simple PSD Template Nam varius accumsan elementum aliquam</h1>
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
      <script src="js/jquery.min.js"></script> 
      <script src="js/bootstrap.min.js"></script> 
    </div> 
    <? include "footer.php";?>
  </body>
  </html>
