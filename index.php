<!DOCTYPE html>
<html lang="en">

  <head>

 <?php
  include ("_header.html")
  ?>

    <title>digital media professional in New York City | crg.io</title>
    <meta name="description" content="Charlie is a digital media professional specializing in Mobile Apps, Web Development, Project &amp; Content Management, Digital Marketing, Social Media, Music and more." />
    <meta name="keywords" content="mobile, content, mobile app, new york city, producer, marketing, social media, project manager, music, resume, brooklyn, nyc">

  </head>

  <body>

<!-- Facebook Javascript Code -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>


        <div class="navbar navbar-fixed-top" role="navigation">
          <div class="container">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Charlie Gigante</a>
            </div>

            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.php">About Me</a></li>
                <li><a href="work.php">My Work</a></li>
                <li><a href="https://drive.google.com/file/d/0BzG5XvnnmDFNejREQzVJR3o1UXM/view?usp=sharing" target="_blank">Resume</a></li>
                <!-- Direct Download Link: https://drive.google.com/uc?export=download&id=0BzG5XvnnmDFNejREQzVJR3o1UXM -->
                <li><a href="https://www.linkedin.com/in/charlesgigante" target="_blank">Linked In</a></li>
                <li><a href="interests.php">Interests</a></li>
                <li><a href="contactform.php">Contact</a></li>
              </ul>
            </div><!--/.nav-collapse -->

          </div> <!-- End container -->

        </div>  <!-- End Nav Bar -->
        <div class="clear"></div>

        
        <!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide animated fadeIn" data-ride="carousel">
          <!-- Indicators
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol> -->
          <div class="carousel-inner">

            <div class="item active">
              <a href="about.php"><img src="images/carousel/carousel-prague.jpg" alt="First slide"></a>
              <div class="container">
                <div class="carousel-caption">
                  <h1>Who I Am</h1>
                  <p class="fontchange-p">Mobile industry veteran, web developer, musician, DJ and photographer.</p>
                </div>
              </div>
            </div>

             <div class="item">
              <a href="work.php"><img src="images/carousel/keyboard.jpg" alt="Second slide"></a>
              <div class="container">
                <div class="carousel-caption">
                  <h1>What I Do</h1>
                  <p class="fontchange-p">Browse work samples from my past projects.</p>
                </div>
              </div>
            </div>

            <div class="item">
              <a href="interests.php"><img src="images/carousel/funstuff.jpg" alt="Third slide"></a>
              <div class="container">
                <div class="carousel-caption">
                  <h1>Beyond Work</h1>
                  <p class="fontchange-p">When I'm not up to my ears in all things digital, I do things. Have a look and listen.</p>
                </div>
              </div>
            </div>
          </div>

          <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div><!-- /.carousel end -->



        <!-- Wrap the rest of the page in another container to center all the content. -->
        <div class="container marketing animated fadeIn">

          <!-- Three columns of text below the carousel -->
          <div class="row" id="index-row">

            <a href="about.php">
              <div class="col-lg-4">
                <div class="featurette-main1">
                  <span class="glyphicon glyphicon-user"></span>
                  <h2>About Me</h2>
                  <p class="fontchange-p">Click here to read a short bio on my history and browse through recent professional experience.</p>
                </div>
              </div><!-- /.col-lg-4 -->
            </a>


            <a href="work.php">
              <div class="col-lg-4">
                <div class="featurette-main2">
                  <span class="glyphicon glyphicon-briefcase"></span>
                  <h2>My Work</h2>
                  <!--  <p class="fontchange-p">Browse through samples of my work: mobile apps, personalization content and websites.</p>-->
                  <p class="fontchange-p">
                    <strong>Mobile Applications</strong></br>
                    <strong>Content Production</strong></br>
                    <strong>Website Development</strong>
                  </p>
                </div>
              </div><!-- /.col-lg-4 -->
            </a>


            <a href="interests.php">
              <div class="col-lg-4">
                <div class="featurette-main3">
                  <span class="glyphicon glyphicon-headphones"></span>
                  <h2>My Interests</h2>
                  <p class="fontchange-p">A collection of my original music productions and photography.</p>
                </div>
              </div><!-- /.col-lg-4 -->
            </a>

          </div><!-- /.row -->

          <div id="clear"></div>




          <!-- FOOTER -->
           <?php
            include ("_footer.php")
            ?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
    
    </div> <!-- End main container "marketing" div -->

  </body>

</html>