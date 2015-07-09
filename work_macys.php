<!DOCTYPE html>
<html lang="en">

  <head>

 <?php
  include ("_header.php")
  ?>

    <title>Work Example: Macy's | crg.io</title>
    <meta name="description" content="View work samples from a mobile project for Macy's that Charlie worked on." />
    <meta name="keywords" content="mobile, content, mobile app, new york city, producer, marketing, project manager, resume, Macys, Macy's, photos, in8 id, in8 mobile">



<!-- Add fancyBox -->
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>





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
                <li class="active"><a href="work.php">My Work</a></li>
                <li><a href="<?php echo $resume ?>" target="_blank">Resume</a></li>
                <li><a href="https://www.linkedin.com/in/charlesgigante" target="_blank">Linked In</a></li>
                <li><a href="interests.php">Interests</a></li>
                <li><a href="contactform.php">Contact</a></li>
              </ul>
            </div><!--/.nav-collapse -->

          </div> <!-- End container -->

        </div>  <!-- End Nav Bar -->
        

        <!-- Wrap the rest of the page in another container to center all the content. -->
        <div class="container marketing">
          
          <!-- Main Content -->
          </br></br></br></br>

          <!-- START THE FEATURETTES -->

          <div class="row featurette">
            <div class="col-md-12">
              <h2 class="featurette-heading">in8 iD:<span class="text-muted"> Macy's "American Icons" Campaign</span></h2>
              <p>Below are a selection of several pages from the "American Icons" mailer I programmed.</p>
              </br>

<!-- <ul class="list">
  <li>
    <a class="various" href="#inline" title="Image Title Goes Here"><img class="featurette-image img-responsive" src="images/work/macys/1_small.jpg" /></a>
    <div style="display: none">
      <div id="inline">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In libero quo animi, ratione dolor quaerat, sunt quos officia quisquam dolores totam nam amet voluptas voluptatem commodi cum, ipsa incidunt eveniet.</div>
    </div>
  </li>
</ul> -->

              <img class="featurette-image img-responsive" src="images/work/macys/1.jpg" /></br>
              <img class="featurette-image img-responsive" src="images/work/macys/2.jpg" /></br>
              <img class="featurette-image img-responsive" src="images/work/macys/3.jpg" /></br>
              <img class="featurette-image img-responsive" src="images/work/macys/4.jpg" /></br>
              <a class="btn btn-success" href="work.php" role="button">Go Back</a>
            </div><!-- End col-md-12 -->

          </div>


 

          <hr class="featurette-divider">

          <!-- /END THE FEATURETTES -->


          <!-- FOOTER -->
           <?php
            include ("_footer.php")
            ?>



<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
    
<!-- Fancybox Javascript -->
<script type="text/javascript">
  $(document).ready(function() {
    $(".fancybox").fancybox();
  });

  // This is for the "inline" Fancybox JS
  $(document).ready(function() {
    $(".various").fancybox({
      maxWidth  : 800,
      maxHeight : 600,
      fitToView : false,
      width   : '70%',
      height    : '70%',
      autoSize  : false,
      closeClick  : false,
      openEffect  : 'none',
      closeEffect : 'none'
    });
  });
</script>


    </div> <!-- End main container "marketing" div -->

  </body>

</html>