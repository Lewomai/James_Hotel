<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Express Hotel </title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "style.css" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >EXPRESS HOTEL</a>
			</div>
		</div>
	</nav>	
	<ul id = "menu">
		<li><a class="btn btn-primary" href="index.php" role="button">Home</a></li> 
		<li><a class="btn btn-primary" href = "aboutus.php" role="button" >About us</a></li> 
		<li><a class="btn btn-primary" href = "contactus.php" role="button" >Contact us</a></li> 
		<li><a class="btn btn-primary" href = "gallery.php" role="button" >Gallery</a></li> 
		<li><a class="btn btn-primary" href = "dineandlounge.php" role="button" >Dine and Lounge</a></li> 			
		<li><a class="btn btn-primary" href = "reservation.php" role="button" > Reservation</a></li>
		<li><a class="btn btn-primary" href = "rulesandregulation.php" role="button" >Regulation</a></li>
	</ul>
	<div id="myCarousel" class="carousel slide container-fluid" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
		</ol>
		<div style = "margin:auto;" class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="1.jpg" style = "width:100%; height:450px;" />
			</div>
		
			<div class="item">
				<img src="2.jpg" style = "width:100%; height:450px;"  />
			</div>
		
			<div class="item">
				<img src="g5.jpg" style = "width:100%; height:450px;" />
			</div>
		
			<div class="item">
				<img src="r1.jpg" style = "width:100%; height:450px;" />
			</div>
			
			<div class="item">
				<img src="e.jpg" style = "width:100%; height:450px;" />
			</div>
			
			<div class="item">
				<img src="f.jpeg" style = "width:100%; height:450px;" />
			</div>
			
			<div class="item">
				<img src="g.png" style = "width:100%; height:450px;" />
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
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; James_D 2023 </label>
	</div>
</body>
<script src = "jquery.js"></script>
<script src = "bootstrap.js"></script>	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
crossorigin="anonymous"></script>
</html>