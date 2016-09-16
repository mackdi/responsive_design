<!DOCTYPE HTML>
<HTML>
<head lang="en">
<head>
	<meta charset="utf-8">
	<title>Responsive design with Bootstrap</title>
	<link rel="stylesheet" href="css/style.css" media="screen" title="no title">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  	<link rel="stylesheet" type="text/css" href="css/modal_box.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand"> HOME </a>
			</div> <!-- navbar header -->
			<div class="colapse navbar-colapse" id="navbar-collapse">
				
				<!-- include modal login -->
				<?php include "login.php" ?>

				<!-- button for the login -->
				<button class="btn navbar-btn navbar-right" onclick="document.getElementById('id01').style.display='block'">Login <i class="fa fa-sign-in" aria-hidden="true"></i></button>
				
				<ul class="nav navbar-nav">
					<li><a href="#">Feedback</a></li>
					<li><a href="#">Gallery</a></li>
					<li><a href="#">Featires</a></li>
					<li><a href="#">F.A.Q.</a></li>
					<li><a href="#">Contact Me</a></li>
				</ul>
			</div>
		</div> <!-- container -->
	</nav> <!-- end navbar -->

<!-- jumbotron -->

<div class="jumbotron">
	<div class="container text-center">
		<h1> My application</h1>
		<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

		<div class="btn-group">
			<a href="#" class="btn btn-lg btn-info"> Download the App </a>
			<a href="#" class="btn btn-lg btn-warning"> Visit store </a>
			<a href="#" class="btn btn-lg btn-danger"> Spred the word </a>
		</div>
	</div> <!--  end container -->
</div> <!-- end jumbotron -->

<div class="container">
<section>
	 <div class="page-header" id="feedback">
		 <h2>Feedback.<small> Check out the awesome feedback</small></h2>
	 </div>
	 <!-- end feedback -->
	 <div class="row">
		 <div class="col-lg-4">
		  <blockquote>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
				<footer>John Doe</footer>
			</blockquote>
		</div> <!-- end col -->
		 <div class="col-lg-4">
		  <blockquote>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
				<footer>John Doe</footer>
			</blockquote>
		</div>  <!-- end col -->
		 <div class="col-lg-4">
		  <blockquote>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
				<footer>John Doe</footer>
			</blockquote>
		</div>  <!-- end col -->
	 </div>  <!-- end row -->
</section>
</div>  <!-- end of container -->

<!-- call to action -->
<section>
	<div class="well">
		<div class="container text-center">
			<h3> Subscribe for more</h3>
			<p> Enter your name & mail</p>
			<form class="form-inline" action="index.html" method="post">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" id="name" class="from-control" placeholder="Enter your name">
				</div>
				&nbsp &nbsp
				<div class="form-group">
					<label for="email">Email address</label>
					<input type="text" id="email" class="from-control" placeholder="Enter your email">
				</div>
				<button type="submit" name="subscribe">Subscribe</button>
			</form>
		</div> <!-- end of container -->
	</div> <!-- end of well -->
</section> <!-- end of call to action -->

<!-- Gallery -->
<div class="container">
<section id="gallery-carousel">
	<div class="page-header" id="gallery">
		<h2>Gallery.<small> Check out the awesome Gallery</small></h2>
	</div>

	<div class="carousel slide" id="screenshot-carousel" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#screenshot-carousel" data-slide-to="1"></li>
			<li data-target="#screenshot-carousel" data-slide-to="2"></li>
			<li data-target="#screenshot-carousel" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active">
				<img src="images/image_1_800x480.jpg" alt="image one" />
				<div class="carousel-caption">
					<h3>image heading</h3>
					<p> this is the caption </p>
				</div>
			</div>
			<div class="item">
				<img src="images/image_2_800x480.jpg" alt="image two" />
			</div>
			<div class="item">
				<img src="images/image_3_800x480.jpg" alt="image one" />
			</div>
			<div class="item">
				<img src="images/image_4_800x480.jpg" alt="image one" />
			</div>
		</div> <!-- end of carousel inner -->
		<a href="#screenshot-carousel" class="left carousel-control" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a href="#screenshot-carousel" class="right carousel-control" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>  <!-- end of carousel -->
	
</section>
</div>
<!-- features -->

<div class="container">
<section>
	<div class="page-header" id="features">
		<h2>Features.<small> Some of the coolest Features of this app</small></h2>
	</div>
	<div class="row">
		<div class="col-lg-8">
			<h3>This is the heading</h3>
			<P> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </P>
		</div>
		<div class="col-lg-4">
			<img src="images/imac.jpg" class="img-responsive" alt="imac">
			
		</div>
		<div class="row">
		<div class="col-lg-8">
			<h3>This is the heading</h3>
			<P> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </P>
		</div>
		<div class="col-lg-4">
			<img src="images/smartphone.jpg" class="img-responsive" alt="smartphone">
		</div>
		<div class="row">
		<div class="col-lg-8">
			<h3>This is the heading</h3>
			<P> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </P>
		</div>
		<div class="col-lg-4">
			<img src="images/user.jpg" class="img-responsive" alt="user">
			<br>
		</div>

		<div class="row">
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-body text-center">
						<span class="glyphicon glyphicon-refresh my-class"></span>
						<h4>This is heading</h4>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-body text-center">
						<span class="glyphicon glyphicon-camera my-class"></span>
						<h4>This is heading</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-body text-center">
						<span class="glyphicon glyphicon-cloud my-class"></span>
						<h4>This is heading</h4>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</div>
<!-- f.a.q -->
<div class="container">
<section>
<div class="page-header" id="faq">
		<h2>F.A.Q <small>  Questions and Answers </small></h2>
	</div>
	<div class="panel-group" id="accordion">
		<div class="pannel panel-default">
			<div class="panel-heading">
				<div class="panel-title">
				<a href="#collapse-1" data-toggle="collapse" data-parent="#accordion">Question one?</a>	
			</div>
				<!--  End panel title -->
		
		<div id="collapse-1" class="pannel-collapse collapse">
			<div class="panel-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
			</div>
			</div>
		</div>

		</div>


	</div>



</section>
</div>



<!-- jquery 2.4.1 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- my script-->
<script type="text/javascript" src="script/modal_form.js"></script>
<!-- font awesome -->
<script src=" https://use.fontawesome.com/0e7f49fa15.js " ></script>
</body>
</html>
