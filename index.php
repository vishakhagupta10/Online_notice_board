<?php
include('connection.php');
session_start();
 ?>
<html>
	<head>
		<title>Online Notice Board</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
			<nav class="navbar navbar-default navbar-fixed-top" style="background:#000">
  <div class="container">

  <ul class="nav navbar-nav navbar-left">
    <li><a href="index.php"><strong>Online Notice Board</strong></a></li>


	  <li><a href="index.php?option=about"><span class="glyphicon glyphicon-user"></span> About</a></li>



	<li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>

	</ul>


<ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>



</div>
</nav>

<div class="container-fluid">
	<!-- slider -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/Desert.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/Jellyfish.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>

	 <div class="item">
      <img src="images/Penguins.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- slider end-->
</div>


<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php
		@$opt=$_GET['option'];

		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}

			else if($opt=="New_user")
			{
			include('registration.php');
			}


			else if($opt=="login")
			{
			include('login.php');
			}
		}
		else
		{
		echo "<h2></h2>
  <b> <h1> Global excellence in knowledge economy</b></h1> </br>

  <b> <h1> Our Mission </h1> </b></br>

  In pursuance of our vision we have short run mission as guidance:

  Teaching and research with focus on emerging technologies, business process and high-tech solutions in low-tech environment;

   Integrating technologies and management in cross-cultural environments;

  Shaping students innovative, entrepreneurial, supportive, assured and international </br>

<b> <h1>  Quality Policy  </h1>  </b> </br>

  ABV-IIITM is committed at offering quality education, training, research, competency development and consultancy to the satisfaction of all its stakeholders. This institute through its innovative teaching methods and research aims at improving effectiveness of IT and management practices on a continuous basis.  All along ABV-IIITM works towards creating a knowledge-networked environment. We achieve this through:

  Proper understanding of quality policy and its effective communication across all levels

  Adherence to this policy on  a routine basis.

  Periodical audits on quality procedures.";

		}
		?>




		</div>
	<!-- container -->

		<div class="col-sm-4">
			<div class="panel panel-default">
  <div class="panel-heading">Latest news</div>
  <div class="panel-body">
INTERNATIONAL CONFERENCE ON ADVANCES IN NANOMATERIALS AND DEVICES FOR ENERGY AND ENVIRONMENT 27TH - 29TH JANUARY 2019 </br> </br>
    FDP ON WIRELESS COMMUNICATION - WICOM 2018 - 3RD -7TH DECEMBER 2018 </br> </br>
    FACULTY DEVELOPMENT PROGRAM ON PHYSICS AND TECHNOLOGY OF MATERIALS - 8 TO 14 OCTOBER, 2018 (LAST DATE 20TH SEP 2018) </br> </br>
      FDP ON DATA COMMUNICATION - WICOM 2018 - 13RD -17TH DECEMBER 2018 </br> </br>
  STUDENT DEVELOPMENT PROGRAM ON MATHEMATICS AND TECHNOLOGY OF MATERIALS - 18 TO 24 OCTOBER, 2018 (LAST DATE 20TH SEP 2018) </br>

  </div>
</div>

		</div>
	</div>

</div>



<br/>
<br/>
<br/>
<br/>

<!-- footer-->

			<!--<nav class="navbar navbar-default navbar-bottom" style="background:black">
  <div class="container">

  <ul class="nav navbar-nav navbar-left">
    <li><a href="http://www.phptpoint.com/"> Developed by  Phptpoint</a></li>

	</ul>




</div>
</nav>-->
<!-- footer-->

	</body>
</html>
