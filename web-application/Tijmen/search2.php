<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
  		<title>Wishly - Search</title>
  		<link rel="stylesheet" type="text/css" href="style.css">

  		<!-- ADDED -->
  		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.js"></script>
   		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.js"></script>      <!-- importing bootbox library  -->
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

 	</head>

 	<body onload="presearch1()">
 		<!--menu-->
 		<div id='menu-div'>
 			<button class="menu-item unselectable">Profile</button><button class="menu-item unselectable" onClick="location.href='wishlist2.php'">My Wishlist</button>
 			<button onClick="location.href='index2.php'" class="menu-item menu-item-left unselectable">&#8630; Back</button>
 			<form id="formHome" action="search2.php" method="get" autocomplete="off">
				<input id="searchbox" class="menu-item menu-item-left unselectable" type="text" name="q" pattern=".{1,}" required title="1 characters minimum">
				<input id="searchboxSend" class="menu-item menu-item-left unselectable" type="submit" value="Search">
 			</form>
 		</div>
 		
 		<!--search part-->
 		<div class="unselectable" id="products-div">
 			<div id="products-container">
	 			<div id="results-div">
		 		</div>
		 	</div>
 		</div>

 		<!--logo-->
 		<div id='logo-div-search'><a href="index2.php"><img class="unselectable" id="logo-search" src="src/logo.png"/></a></div>

 		<!--footer-->
 		<div id="footer-div">Copyright 2016 - Wishly.nl</div>
 	</body>

 	<script src="functions.js"></script>
</html>