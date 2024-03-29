<!DOCTYPE html>
<html lang="en">

  <head>

 <?php
  include ("_header.php")
  ?>

    <title>Contact | crg.io</title>
    <meta name="description" content="Contact Charlie for work opportunities and/or interesting banter." />
    <meta name="keywords" content="contact, email, charlie, crg.io, contact form, e-mail">

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
                    <section id="contact">
                      <div class="contact-div">
                          <!-- <h2 class="contactUs">Contact Us</h2> -->
                          <form name="sentMessage" id="contactForm" novalidate>
                              <div class="row control-group">
                                  <div class="form-group floating-label-form-group controls">
                                      <label>Name</label>
                                      <input type="text" class="form-control" placeholder="Tell me who you are." id="name" required data-validation-required-message="Please enter your name.">
                                      <p class="help-block text-danger"></p>
                                  </div>
                              </div>
                              <div class="row control-group">
                                  <div class="form-group floating-label-form-group controls">
                                      <label>Email Address</label>
                                      <input type="email" class="form-control" placeholder="your@emailaddress.com" id="email" required data-validation-required-message="Please enter your email address.">
                                      <p class="help-block text-danger"></p>
                                  </div>
                              </div>
                              <div class="row control-group">
                                  <div class="form-group floating-label-form-group controls">
                                      <label>Message</label>
                                      <textarea rows="5" class="form-control" placeholder="What's up?" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                      <p class="help-block text-danger"></p>
                                  </div>
                              </div>
                              <br>

                              <div id="success"></div>

                              <div class="form-group">
                                  <button type="submit" class="btn btn-success btn-md">Send</button>
                              </div>

                          </form>
                      </div>    
                    </section>       


<!-- Original Input Form -->
              <!-- <form name="contactform" method="post" action="_send_form_email.php">
               
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

                   <input type="submit" value="Submit" id="submit-button" class="btn btn-md btn-success"><a href="_send_form_email.php"></a>
                 </br>
                                     
              </form> -->

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

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

    
    </div> <!-- End main container "marketing" div -->

  </body>

</html>