<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
  		<title>Wishly - Search</title>
  		<link rel="stylesheet" type="text/css" href="style.css">
 	</head>

 	<body onload="presearch()">
 		<!--menu-->
 		<div id='menu-div'>
 			<button class="menu-item unselectable">Profile</button><button class="menu-item unselectable">My Wishlist</button>
 			<button onClick="location.href='index.php'" class="menu-item menu-item-left unselectable">&#8630; Back</button>
 			<form id="formSearch" action="search.php" method="get" autocomplete="off">
				<input id="searchbox" class="menu-item menu-item-left unselectable" type="text" name="q" pattern=".{1,}" required title="1 characters minimum">
				<input id="searchboxSend" class="menu-item menu-item-left unselectable" type="submit" value="Search">
 			</form>
 		</div>
 		
 		<!--search part-->
 		<div class="unselectable" id="products-div">
 			<div id="results-div">
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