<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
  		<title>Wishly - Search</title>
  		<link rel="stylesheet" type="text/css" href="style.css">
 	</head>

 	<body onload="refreshWishlistResults1()">
 		<!--menu-->
 		<div id='menu-div'>
 			<button class="menu-item unselectable">Profile</button><button class="menu-item unselectable active" onClick="location.href='wishlist2.php'">My Wishlist</button>
 			<button onClick="history.go(-1);" class="menu-item menu-item-left unselectable">&#8630; Back</button>
 		</div>
 		
 		<!--search part-->
 		<div class="unselectable" id="products-div">
 			<div id="products-container">
	 			<div id="results-div">
		 		</div>
		 	</div>
 		</div>

 		<!--logo-->
 		<div id='logo-div-search'><a href="index.php"><img class="unselectable" id="logo-search" src="src/logo.png"/></a></div>

 		<!--footer-->
 		<div id="footer-div">Copyright 2016 - Wishly.nl</div>
 	</body>

 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 	<script src="functions.js"></script>
</html>