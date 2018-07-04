<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IAVMS</title>
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="homePage.css">

    
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

	<!-- animate.css -->
	<link rel="stylesheet" href="assets/animate/animate.css" />
	<link rel="stylesheet" href="assets/animate/set.css" />

	<!-- gallery -->
	<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">
	<!-- Carosel start-->
  <script type="text/javascript">
              $(document).ready(function(){
              $('a[href^="#"]').on('click',function (e) {
               e.preventDefault();

                var target = this.hash;
                var $target = $(target);

              $('html, body').stop().animate({
                'scrollTop': $target.offset().top
                 }, 900, 'swing', function () {
                  window.location.hash = target;
                });
               });
            });
  </script>


  

</head>
<body>
	<div>
		<img src='images/upperFlag.jpg' alt="Image of indian flag" id="upperFlag">
	</div>	
	<div class="row">
		<div class="col-md-2">
			
		</div>
		<div class="col-md-8">
			<img src="images/mainPageLogo.jpg" id="mainPageLogo">
		</div>
		<div class="col-md-2">		
			
		</div>
	</div>
		

	</div>
	<div>
	<!--navbar-->
	
	
		<nav class="navbar navbar-default navbar-inverse" id="mainNavigation">
		<div class="container">
			<div class="navbar-header">

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#list-elements">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="navbar-collapse collapse" id="list-elements">
				<ul class="nav navbar-nav" id="navUlElements">

					<li class="active"><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
					<li> <a href="regiments.html"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Regiments</a></li>
		      			
					<li>
						<a href="gallery.html"><i class="fa fa-file-image-o" aria-hidden="true"></i>&nbsp;Gallery</a>
					</li>
					<li><a href="#aboutTheWebsite"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;About</a></li>
					
					<li>
						<span style="margin-left: 420px;"></span><button class="button" style="vertical-align:middle;"><a href="login.html"><span  id="spanLogIn">Log In </span></a></button>
					</li>
			 	</ul>
			</div>

		</div>		
		</nav>



	<!--navbar end-->
	</div>
