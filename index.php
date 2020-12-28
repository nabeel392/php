<?php 

session_start();

$servername='localhost';
$username='root';
$password='';
$dbname = "test";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
?>


<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title> Car site </title>
	<meta name="description" content="Scarica gratis il nostro Template HTML/CSS GARAGE. Se avete bisogno di un design per il vostro sito web GARAGE può fare per voi. Web Domus Italia">
	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
	<link rel="stylesheet" type="text/css" href="khud.css">

</head>
<body>
<!-- Header -->
<div class="allcontain">
<div class="header">
<ul class="socialicon">
<!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
<li><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
</ul>
<ul class="givusacall">
<li>Give us a call : +1273918273 </li>
</ul>
<ul class="logreg">
<li><a href="user_login.php">Login </a> </li>
<li><a href="create_user.php"><span class="register">Register</span></a></li>

</ul>
</div>
<!-- Navbar Up -->
<nav class="topnavbar navbar-default topnav">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
<span class="sr-only"> Toggle navigaion</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<a class="navbar-brand logo" href="#"><img src="image/logo1.png" alt="logo"></a>
</div>	 
</div>
<div class="collapse navbar-collapse" id="upmenu">
<ul class="nav navbar-nav" id="navbarontop">
<li class="active"><a href="#">HOME</a> </li>
<!-- <li class="dropdown">
<a href="#" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CATEGORIES <span class="caret"></span></a>
<ul class="dropdown-menu dropdowncostume">
<li><a href="#">Sport</a></li>
<li><a href="#">Old</a></li>
<li><a href="#">New</a></li> 
</ul>
</li>
<!-- <li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DEALERS <span class="caret"></span></a>
<ul class="dropdown-menu dropdowncostume">
<li><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="3">3</a></li> 
</ul>
</li>-->
<li>
<!-- <a href="contact.html">CONTACT</a> -->
 
</li>
<!-- <button><span class="postnewcar">POST NEW CAR</span></button> -->
</ul>
</div>
</nav>
</div>
<!--_______________________________________ Carousel__________________________________ -->
<section style="background-color:purple;box-shadow: 0 0 15px 15px rgba(0,0,0,0.2)">
<div class="allcontain">
<div id="carousel-up" class="carousel slide" data-ride="carousel">
<div class="carousel-inner " role="listbox">
<div class="item active">
<img src="img/range_rover.jpg" alt="benz">
<div class="carousel-caption">
<!-- <h2>Porsche 356</h2>
<p>Lorem ipsum dolor sit amet, consectetur ,<br> sed do eiusmod tempor incididunt ut labore </p>	 -->
</div>
</div>
<div class="item">
<img src="img/lambo.jpg" alt="benz">
<div class="carousel-caption">
<!-- <h2>Porche</h2>
<p>Lorem ipsum dolor sit amet, consectetur ,<br>
sed do eiusmod tempor incididunt ut labore </p> -->
</div>
</div>
<div class="item">
<img src="img/dodge.jpg" alt="benz">
<div class="carousel-caption">
<!-- <h2>Car</h2>
<p>Lorem ipsum dolor sit amet, consectetur ,<br>
sed do eiusmod tempor incididunt ut labore </p> -->
</div>
</div>
</div>
<nav class="navbar navbar-default midle-nav">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed textcostume" data-toggle="collapse" data-target="#navbarmidle" aria-expanded="false">
<h1>SEARCH TEXT</h1>
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
</section>
<!-- <div class="collapse navbar-collapse" id="navbarmidle">
<div class="searchtxt">
<h1>SEARCH TEXT</h1>
<form class="navbar-form navbar-left searchformmargin" role="search">
</div>
<div class="form-group">
<input type="text" class="form-control searchform" placeholder="Enter Keyword">
</div>
</form>
<ul class="nav navbar-nav navbarborder">
<li class="li-category">
<a class="btn  dropdown-toggle btn-costume"  id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Category<span class="glyphicon glyphicon-chevron-down downicon"></span></a>
<ul class="dropdown-menu" id="mydd">
<li><a href="#">Epic</a></li>
<li><a href="#">Old</a></li>
<li><a href="#">New</a></li>
</ul>
</li>
<li class="li-minyear"><a class="btn  dropdown-toggle btn-costume"  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Min Year <span class="glyphicon glyphicon-chevron-down downicon"></span></a>
<ul class="dropdown-menu" id="mydd2">
<li><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
</ul>
</li>
<li class="li-maxyear"><a class="btn dropdown-toggle btn-costume"  id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Max Year <span class="glyphicon glyphicon-chevron-down downicon"></span></a>
<ul class="dropdown-menu" id="mydd3">
<li><a href="#">1900</a></li>
<li><a href="#">2000</a></li>
<li><a href="#">2016</a></li>
</ul>
</li>
<li class="li-slideprice">
<p> <label class="slidertxt" for="amount">Price </label>
<input class="priceslider" type="text" id="amount" readonly="readonly">
</p>
<div id="slider-range"></div>
</li>
<li class="li-search"> <button class="searchbutton"><span class="glyphicon glyphicon-search "></span></button></li>
</ul>
 </div> -->
</nav>
</div>
</div>
<!-- ____________________Featured Section ______________________________--> 
<!-- <div class="allcontain">
<div class="feturedsection">
<h1 class="text-center"><span class="bdots">&bullet;</span>F E A T U R E S<span class="carstxt">C A R S</span>&bullet;</h1>
</div>
<div class="feturedimage">
<div class="row firstrow">
<?php
$result = mysqli_query($conn,"SELECT * FROM cars_tbl");
if (mysqli_num_rows($result) > 0) {
?> 
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<div class="col-lg-6 costumcol colborder1">
<div class="row costumrow">
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
<img src='<?= "img/".$row['car_image'] ?>'height="350" width="150" >
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
<div class="featurecontant">
<h1><?= $row["car_name"] ; ?></h1>
<p><?= $row["car_discription"] ; ?> </p>
<h2>Price &euro;</h2>
<button id="btnRM" onclick="rmtxt()">READ MORE</button>
 	
</div>
</div>
</div>
</div>
</div>
<?php
$i++;
}
}
?>
	</div> -->
	
<!-- ________________________LATEST CARS SECTION _______________________-->



<div  class="latestcars">
<h1  class="text-center">&bullet;CARS IMAGES &bullet;</h1>
<!-- <ul class="nav nav-tabs navbar-left latest-navleft">
<li role="presentation" class="li-sortby"><span class="sortby">SORT BY: </span></li>
<li data-filter=".RECENT" role="presentation"><a href="#mostrecent" class="prcBtnR">MOST RECENT </a></li>
<li data-filter=".POPULAR" role="presentation"><a href="#mostpopular" class="prcBtnR">MOST POPULAR </a></li>
<li  role="presentation"><a href="#" class="alphSort">ALPHABETICAL </a></li>
<li data-filter=".HPRICE" role="presentation"><a href="#" class="prcBtnH">HIGHEST PRICE </a></li>
<li data-filter=".LPRICE" role="presentation"><a href="#" class="prcBtnL">LOWEST  PRICE </a></li>
<li id="hideonmobile">
</ul> -->
</div>
<br>
<br>
<!-- ________________________Latest Cars Image Thumbnail________________-->

<section style="box-shadow: 0 0 15px 15px rgba(0,0,0,0.2); background-color:purple;" id="plans">
	      <div class="container">
	      <!-- <div class="name">
              <h1> PLACES</h1>
	      </div> -->
		  <!-- <h1  class="text-center">&bullet; LATEST   CARS &bullet;</h1> -->
			
		  <div class="row">
		  <?php
				$result = mysqli_query($conn,"SELECT * FROM cars_tbl");
				if (mysqli_num_rows($result) > 0) {
				?> 
				<?php
				$i=0;
				while($row = mysqli_fetch_array($result)) {
				?>
	          <div style="padding-right:30px;" class="col-md-4  profile-pic1 text-center">
	          <div class="image-box1">
                  <a href=""><img style=" border: 2px solid white;box-shadow: 0 0 15px 5px rgba(0,0,0,0.7);" src='<?= "img/".$row['car_image'] ?>' class="img-responsive" </a>
				  </div>
				  <ul>
                  <li style="border-bottom:5px solid white;">
				 <p style="color:white;font-size:18px;"> <b>NAME: </b>     <?= $row["car_name"] ; ?></p></li>  
				</li>
				<li style="border-bottom:5px solid white;"> <h7 style="color:white;"><b>Description:</b>       <?= $row["car_discription"] ; ?> </h7></li>
                  
	          </div>
			  
			  <?php
				$i++;
				}
				}
				?>
			  </div>
				
			  </div>
			  </section>

	<!-- <div class="grid">
	<?php
$result = mysqli_query($conn,"SELECT * FROM cars_tbl");
if (mysqli_num_rows($result) > 0) {
?> 
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
	<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
	<div class="txthover">
	<img src='<?= "img/".$row['car_image'] ?>' height="400" weight="500" > 
	<div class="txtcontent">
	<div class="stars">
	<div class="glyphicon glyphicon-star"></div>
	<div class="glyphicon glyphicon-star"></div>
	<div class="glyphicon glyphicon-star"></div>
	</div>
	<div class="simpletxt">
	<h3 class="name"><?= $row["car_name"] ; ?></h3>
	<p><?= $row["car_discription"] ; ?> </p>
	<h4 class="price"> 1000&euro;</h4>
	<button>READ MORE</button><br>
	<div class="wishtxt">
	<p class="paragraph1"> Add to Wishlist <span class="glyphicon glyphicon-heart"></span> </p>
	<p class="paragraph2">Compare <span class="icon"><img src="image/compicon.png" alt="compicon"></span></p>
	</div>
	</div>
	<div class="stars2">
	<div class="glyphicon glyphicon-star"></div>
	<div class="glyphicon glyphicon-star"></div>
	<div class="glyphicon glyphicon-star"></div>
	</div>
	</div>
	</div>	 
	</div>
	</div>
	<?php
$i++;
}
}
?>
	</div> -->
<!-- _______________________________News Letter ____________________-->

	<div class="newslettercontent">
<div class="leftside">
<img src="image/border.png" alt="border">
<h1>NEWSLETTER</h1>
<p>Subscribe to the COLLECTIONCARS mailing list to <br>
	receive updates on new arrivals, special offers <br>
	and other discount information.</p>
</div>
<div class="rightside">
<img class="newsimage" src="image/newsletter.jpg" alt="newsletter">
<!-- <input type="text" class="form-control" id="subemail" placeholder="REGISTER"> -->
<button> <a href="create_user.php">SUBSCRIBE </a></button>
</div>
	</div>
	<!-- ______________________________________________________Bottom Menu ______________________________-->
	<section style="background-color:purple;box-shadow: 0 0 15px 15px rgba(0,0,0,0.2)">
	<div class="bottommenu">
<div class="bottomlogo">
<span class="dotlogo">&bullet;</span><img src="image/logo1.png" alt="logo"><span class="dotlogo">&bullet;;</span>
</div>
<!-- <ul class="nav nav-tabs bottomlinks">
<li role="presentation" ><a href="#/" role="button">ABOUT US</a></li>
<li role="presentation"><a href="#/">CATEGORIES</a></li>
<li role="presentation"><a href="#/">PREORDERS</a></li>
<li role="presentation"><a href="#/">CONTACT US</a></li>
<li role="presentation"><a href="#">RECEIVE OUR NEWSLETTER</a></li>
</ul> -->
<p style="color:white;">"Lorem ipsum dolor sit amet, consectetur,  sed do eiusmod tempor incididunt <br>
eiusmod tempor incididunt </p>
 <img src="image/line.png" alt="line"> <br>
 
 <div class="bottomsocial">
 	<!-- <a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-google-plus"></i></a>
<a href="#"><i class="fa fa-pinterest"></i></a> -->
</div>
</section>

<setion>
<div class="footer">
	<div class="copyright">
	  &copy; Copy right 2016 | <a href="#">Nabeel </a>| <a href="#">Waleed</a>
	</div>
	<div class="atisda">
 Designed by <a href=#>Nabeel Tariq $$ Waleed Jutt </a> 
	</div>
</div>
	</div>
</div>
</section>

<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>