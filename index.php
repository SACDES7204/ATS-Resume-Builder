<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<title>Resume Builder</title>
		<meta charset="utf-8">
   		 <meta http-equiv="X-UA-Compatible" content="IE=edge">
   		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="css/bootstrap.css">
		<link href="css/carousel.css" rel="stylesheet">
	</head>
	<body>
<!-- NAVBAR -->
      <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Home</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="jobs.php">Browse Jobs</a></li>
		<li><a href="buildresume.php">Build my resume</a></li>
		<li><a href="jobseekers.php">Profiles</a></li>
              </ul>
              <ul class="nav navbar-nav pull-right">
              	<?php if(isset($_SESSION['user'])): ?>
                <li><a href="logout.php">Logout</a></li>
                <?php else : ?>
                 <li><a href="signup.php">Signup</a></li>
                 <li><a href="login.php">Login</a></li>
               <?php endif; ?>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

  <!--Corsule -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:#53b7f4">Build your ATS Friendly Resume</h1>
              <p style="color:#24141e">Many candidates get rejected for using resume templates that are unreadable by applicant tracking systems (ATS) and resume screening software. </p>
              <p><a class="btn btn-lg btn-primary" href="login.php" role="button">Login</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="img/2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:#53b7f4">Can Your Resume Beat The Bots?</h1>
              <p style="color:#24141e">If not, then you are at right place to build your first ATS Friendly Resume</p>
              <p><a class="btn btn-lg btn-primary" href="signup.php" role="button">Sign-Up</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:#53b7f4">Search Thousands of Jobs</h1>
              <p style="color:#24141e">Build and Post Your ATS Friendly Resume and Access Thousands of Pages of Career Info and Advice</p>
              <p><a class="btn btn-lg btn-primary" href="jobs.php" role="button">Browse Jobs</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
      <!-- START THE FEATURETTES -->

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">So what is <span class="text-muted">ATS?</span></h2>
          <p class="lead">In the contemporary world, whenever you apply for a job in a serious company or a big corporation, in most cases your resume won’t be read by a human being, at least at the first stage. The truth is that nowadays successful companies face a situation when they get hundreds or even thousands of applications when they open a position. In order to reduce the number of resumes revised by personal managers, they use an applicant tracking system (ATS). This system’s main task is to screen the application forms and to get rid of unsuitable candidates in a quick and efficient way. That is why the key to success is to manage to get through this system. Here we are! In this situation, an ATS friendly resume turns into your life-saving belt which will keep you afloat.</p>
        </div>
        <div class="col-md-5" >
          <img class="featurette-image img-responsive center-block" src="img/5.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">This is how your resume will be processed <span class="text-muted">Take a look !.</span></h2>
          <p class="lead">Applicant tracking systems act as an electronic gatekeeper for an employer. The ATS parses a resume's content into categories and then scans it for specific keywords to determine if the job application should be passed along to the recruiter. Its job is to essentially weed out unqualified applicants so the recruiter can devote his or her time to evaluating the candidates who are more likely to be a match for the position. In other words, the ATS is apt to toss the least-qualified candidates, rather than identify the applicants who are the best fit.

Unfortunately, that means if a resume is not written and formatted with the applicant tracking system in mind, a qualified candidate can be easily passed over.

</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="img/6.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, Don't let the bots stop you from landing your dream job. <span class="text-muted">Get an ATS-proof resume today.</span></h2>
          <p class="lead">You Got Your Dream Job</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="img/4.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
     <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <hr class="featurette-divider">

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2019 Resume Builder &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')         </script> 
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.js"></script>

	</body>
</html>
