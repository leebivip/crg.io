<!DOCTYPE html>
<html lang="en">

  <head>

 <?php
  include ("_header.html")
  ?>

    <title>Charlie Gigante | Contact</title>

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
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Me</a></li>
                <li><a href="work.php">My Work</a></li>
                <li><a href="https://dl.dropboxusercontent.com/u/28425203/Charles_Gigante_Resume.pdf" target="_blank">Resume</a></li>
                <li><a href="https://www.linkedin.com/in/charlesgigante" target="_blank">Linked In</a></li>
                <li><a href="interests.php">Interests</a></li>
                <li class="active"><a href="contactform.php">Contact</a></li>
              </ul>
            </div><!--/.nav-collapse -->

          </div> <!-- End container -->

        </div>  <!-- End Nav Bar -->
        

        <!-- Wrap the rest of the page in another container to center all the content. -->
        <div class="container marketing">
          

<!-- Main Content -->
          </br></br></br></br>
          <div class="jumbotron">
            <center>
              <h2>Contact Me</h2>
              <h4 class="jumbotron-text">For full-time or contract opportunities, please reach out to me any time.</h4>
            </center>
            </br>
          </div>


<!-- START THE FEATURETTES -->

          <hr class="featurette-divider">



          <div class="row featurette">

            <section class="col-md-6">
              
              <form name="contactform" method="post" action="_send_form_email.php">
               
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                      <input type="text" name="full_name" class="form-control" placeholder="Please enter your full name">
                    </div> 
                  
                    </br>
                                   
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                      <input type="text" name="email" class="form-control" placeholder="you@yourdomain.com">
                    </div>
                  
                    </br>
                
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                      <input type="text" name="telephone" class="form-control" placeholder="Please enter your phone number">
                    </div>
                  
                    </br>
                                    
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                      <textarea class="input-xxlarge col-md-6 form-control" name="comments" placeholder="Compose your message here."></textarea>
                    </div>
                  
                    </br>

                   <input type="submit" value="Submit" id="submit-button" class="btn btn-md btn-success"><a href="http://charliegigante.com/_send_form_email.php"></a>
                 </br>
                                     
              </form>

            </section>

            <section class="col-md-6">
              <img class="img-responsive" src="images/telephonepoles.jpg">
            </section>

          </div>

          <hr class="featurette-divider">

<!-- /END THE FEATURETTES -->

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