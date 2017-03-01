<!DOCTYPE html>
<html lang="en">
<head>
	<title>Don Griffin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>		
	<link rel="stylesheet" href="assets/css/main.css">
	<link href="bower_components/hover/css/hover-min.css" rel="stylesheet">
	<link rel="stylesheet" href="bower_components/wow/css/libs/animate.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	 <script src="bower_components/wow/dist/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
</head>
<body>
<!-- Header -->
<header>	
	<div class="top-header">		
	</div>
	<nav class="navbar navbar-inverse">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>	     
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav wow bounce">
		      <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>&ensp;Home</a></li>
		      <li><a href="book.php"><i class="fa fa-book" aria-hidden="true"></i>&ensp;Book</a></li>
		      <li><a href="author.php"><i class="fa fa-user" aria-hidden="true"></i>&ensp;Author</a></li>
		      <li><a href="order.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&ensp;Order</a></li>
		      <li><a href="blog.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>&ensp;Blog</a></li>
		      <li class="active"><a href="contact.php"><i class="fa fa-envelope" aria-hidden="true"></i>&ensp;Contact</a></li>
	      </ul>	     
	    </div>
	  </div>
	</nav>
</header>
<!-- Wrapper -->
<div class="wrap">
	<!-- Banner -->
	<div class="banner">
		<div class="container text-center wow bounceIn">
			<div class="author-image">
				<img src="images/author-page.jpg" alt="Author" class="img-responsive">
			</div>
			<h1>Don Griffin</h1>			
		</div>
	</div>
	<div class="get-in-touch">
		<div class="container text-center wow zoomIn">
			<h2>Get in Touch</h2>
			<p>Hello! I hope you&#x2019;re having a sun shiny day! Anyway, if you have any concerns or you just want to share something, please feel free to drop me a line. I would love to hear anything from you.</p>
			<form role="form" method="post" action="#" class="form-group">
				<input type="text" class="form-control id="fname" name="fname" placeholder="Name" required>
				<br>
				<input type="email" class="form-control id="email" name="email" placeholder="Email" required>
				<br>
				<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message" required></textarea>
				<div class="checkbox text-left">
					<label><input type="checkbox">Fan mail check box</label>
				</div>
				<div class="text-right" style="margin-top: -32px;">
					<button class="hvr-bounce-to-right" type="submit" name="sbmt">SEND</button>
				</div>
			</form>	
		</div>
	</div>
</div>
<!-- Footer -->
<footer>	
	<div class="social-nav text-center">
		<ul class="social-media wow rotateIn">
			<li class="facebook-icon hvr-grow"><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
			<li class="tumblr-icon hvr-grow"><a href="#"><i class="fa fa-tumblr-square" aria-hidden="true"></i></a></li>
			<li class="twitter-icon hvr-grow"><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
			<li class="googleplus-icon hvr-grow"><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
			<li class="pinterest-icon hvr-grow"><a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
		</ul>
		<ul class="navigation wow rotateIn">
			<li><a href="#">Home</a></li>
			<li><a href="#">Book</a></li>
			<li><a href="#">Author</a></li>
			<li><a href="#">Order</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
	<div class="copyright text-center">
		<div class="container">
			<p class=""><img src="images/litfire.png" alt="LitFire"> Copyright &copy; Don Griffin 2016. Website by LitFire Publishing, Achieve Your Publishing Success</p>
		</div>
	</div>	
</footer>
</body>
</html>