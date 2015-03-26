<!DOCTYPE html>
<html lang="en">

  <head>

 <?php
  include ("_header.html")
  ?>

    <title>Charlie Gigante | About Me</title>

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
                <li class="active"><a href="about.php">About Me</a></li>
                <li><a href="work.php">My Work</a></li>
                <li><a href="https://www.dropbox.com/s/bxjs13c6mukueab/Charles_Gigante_Resume.pdf" target="_blank">Resume</a></li>
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
          <div class="row">
            <div class="col-lg-8">
              <div class="about-me-main">
                <center><h1>About Me</h1></center>
                <div>
                  <img class="profile-pic" alt="Charlie's Picture with dog, Izzy." title="Charlie with dog, Izzy." src="images/aboutme-square.jpg" />
                  <p class="bio">I began my digital and mobile industry affair in 2001 - the days of monophonic ringtones, grayscale graphics and brick phones. Over the past decade+, I have played a central role at several major innovators and content publishers in the mobile space. Whether managing the mobile personalization for top-tiered brands such as <strong><em>DC Comics</em></strong> and <strong><em>Harry Potter</em></strong> at <strong>Warner Bros.</strong>, being the production head of <strong>Universal Music Group</strong>'s multi-million dollar ringtone business, or developing rich promotional campaigns for consumer brands using image recognition technology, I have consistently been on the front-lines of high-profile digital endeavors for years.
                  <p class="bio">I was recently awarded a <strong>Certificate in Web Development from New York University</strong> and possess a variety of skills in both client and server-side programming. I have experience in <em>HTML5, CSS3, JavaScript/JQuery, PHP</em> and <em>MySQL</em>.</p>
                  <p class="bio">When I'm not up to my ears in all things digital, I produce original music, DJ, and am a photographer. I live in New York City with my beloved dog, Isabel. For professional inquiries (or to simply say hello), <a href="/contactform.php">drop me an email</a>.</p>
                  <p class="bio">Thank you for visiting.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 well" id="about-col-lg-4">
              <center> <!--This centers all of the text in the well -->
                <h1>Recent Experience <span class="text-muted">[at a glance]</span></h1>
                <p><a class="btn btn-default" href="https://www.dropbox.com/s/bxjs13c6mukueab/Charles_Gigante_Resume.pdf?dl=1" role="button">Download Full Resume</a></p>
                </br>
                <h4>Ideally, LLC</h4>
                <p class="job-title">Director of Product Management <span class="job-dates">(2013 – Present)</span></p>
                </br>
                <h4>in8 iD, a division of NantMobile</h4>
                <p class="job-title">Manager, Content &amp; Promotions <span class="job-dates">(2011 – 2013)</span></p>
                </br>
                <h4>Universal Music Group Distribution</h4>
                <p class="job-title">Senior Producer, Mobile <span class="job-dates">(2007 – 2010)</span></p>
                </br>
                <h4>Warner Bros. Advanced Digital Services</h4>
                <p class="job-title">Lead of Wireless Personalization <span class="job-dates">(2005 – 2007)</span></p>
                </br>
                <h4>Infospace Mobile</h4>
                <p class="job-title">Manager of Production <span class="job-dates">(2001 – 2005)</span></p>

                <hr class="featurette-divider">

                <h1>Skills</h1>
                <div>
                  <p class="fontchange-p">Mobile App Development</p>
                  <p class="fontchange-p">Analytics &amp; Reporting</p>
                  <p class="fontchange-p">Internet &amp; Email Marketing</p>
                  <p class="fontchange-p">Adobe Photoshop &amp; InDesign</p>
                  <p class="fontchange-p">Management &amp; Team Building</p>
                  <p class="fontchange-p">Process Streamlining</p>
                  <p class="fontchange-p">Product &amp; Content Development</p>
                  <p class="fontchange-p">Product Functionality</p>
                  <p class="fontchange-p">Social Media Management</p>
                  <p class="fontchange-p">Website Development &amp; Design: HTML5, CSS3, jQuery, JavaScript, PHP, MySQL, Search Engine Optimization, Responsive Design, etc.</p>
                </center>
          
            </div><!-- /.col-lg-4 -->

          </div><!-- /.row -->

<!-- <div id="clear"></div> -->




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