<!DOCTYPE html>
<html lang="en">

  <head>

 <?php
  include ("_header.php")
  ?>

    <title>My Interests | Music &amp; Photography | crg.io</title>
    <meta name="description" content="Charlie's interests include photography, music and more. Browse examples of his content here." />
    <meta name="keywords" content="music, photography, interests, personal, new york city, new york, nyc">

  </head>

  <body>

<!-- Google Analytics Code -->
<?php include_once("analyticstracking.php") ?>

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
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Me</a></li>
                <li><a href="work.php">My Work</a></li>
                <li><a href="<?php echo $resume ?>" target="_blank">Resume</a></li>
                <li><a href="https://www.linkedin.com/in/charlesgigante" target="_blank">Linked In</a></li>
                <li class="active"><a href="interests.php">Interests</a></li>
                <li><a href="contactform.php">Contact</a></li>
              </ul>
            </div><!--/.nav-collapse -->

          </div> <!-- End container -->

        </div>  <!-- End Nav Bar -->
        

        <!-- Wrap the rest of the page in another container to center all the content. -->
        <div class="container marketing">

          <!-- Main Content -->
          </br></br></br></br>
          <div class="jumbotron jumbotron-interests">
            <center><h2><span class="glyphicon glyphicon-heart"></span> Interests</h2></center>
            <!-- <h4 class="jumbotron-text"></h4> -->
            </br>
          </div>


          <div class="row">

              <div class="col-lg-7">
                <img class="img-about" src="images/funstuff.jpg" alt="Vinyl Record">
                <h2><span class="glyphicon glyphicon-headphones"></span> Music</h2>
                <p class="bio">I am a musician of over 25 years, having begun as a professionally trained jazz drummer. I have since progressed into a multi-instrumentalist electronic music composer and DJ. I have a vast collection of vinyl records and possess exhaustive knowledge of popular music. My recent musical compositions are collected in the Soundcloud player you see here. Please <a href="contactform.php">reach out to me</a> if you are interested in collaborating or commissioning original work.</p>
              </div>
              <div class="col-lg-5">
                <iframe class="soundcloud" width="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/44489902%3Fsecret_token%3Ds-kDoTs&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
              </div>       
            
          </div><!-- /.row -->


          <hr class="featurette-divider">


          <div class="row">
            <div class="col-lg-12">
              <h2><span class="glyphicon glyphicon-camera"></span> Photography</h2>
              <p class="bio">Though only an amateur, I do possess a deep fondness for the art of photography and spend considerable time with a lens focused on the world around me. I have done professional runway shoots for fashion blog, <a href="http://www.modernglossy.com/tag/charles-gigante/" target="_blank">Modern Glossy</a>, and often use my camera to document New York City's endlessly interesting cityscape.</p>
              </p>
            </div>
          </div>

          <div class="row">
            
            <div class="col-lg-12">
              <!-- #################### Carousel Begin #################### -->
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img class="img" src="images/photography/city1.jpg" alt="1">
                  </div>
                  <div class="item">
                    <img class="img" src="images/photography/fashion15.jpg" alt="Fashion 15">
                  </div>
                  <div class="item">
                    <img class="img" src="images/photography/city7.png" alt="7">
                  </div>                        
                  <div class="item">
                    <img class="img" src="images/photography/nature1.jpg" alt="Nature 1">
                  </div>
                  <div class="item">
                    <img class="img" src="images/photography/fashion1.jpg" alt="Fashion 1">
                  </div>                                                                                                                                               
                  <div class="item">
                    <img class="img" src="images/photography/city8.jpg" alt="8">
                  </div>
                  <div class="item">
                    <img class="img" src="images/photography/nature8.jpg" alt="Nature 8">
                  </div>
                  <div class="item">
                    <img class="img" src="images/photography/fashion7.jpg" alt="Fashion 7">
                  </div>
                  <div class="item">
                    <img class="img" src="images/photography/city4.jpg" alt="4">
                  </div>                  
                  <div class="item">
                    <img class="img" src="images/photography/city3.jpg" alt="3">
                  </div>
                  <div class="item">
                    <img class="img" src="images/photography/fashion2.jpg" alt="Fashion 2">
                  </div>                      
                  <div class="item">
                    <img class="img" src="images/photography/nature6.jpg" alt="Nature 6">
                  </div>
                  <div class="item">
                    <img class="img" src="images/photography/fashion16.jpg" alt="Fashion 16">
                  </div>


                </div><!-- End carousel-inner -->
                                          
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
                <!-- End Controls -->

              </div><!-- End carousel-example-generic -->
            <!-- #################### Carousel End #################### -->  

            </div><!-- End col-lg-12 -->
            
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