<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
  		<title>Wishly - Categories</title>
  		<link rel="stylesheet" type="text/css" href="style.css">

  		<!-- ADDED -->
  		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.js"></script>
   		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.js"></script>      <!-- importing bootbox library  -->
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

 	</head>

 	<body onload="setStatusItems()">
 		<!--menu-->
 		<div id='menu-div'> 			
 			<button class="menu-item unselectable">Profile</button><button class="menu-item unselectable" onClick="location.href='wishlist.php'">My Wishlist</button>
 			<form id="formHome" action="search.php" method="get" autocomplete="off">
				<input id="searchbox" class="menu-item menu-item-left unselectable" type="text" name="q" pattern=".{1,}" required title="1 characters minimum">
				<input id="searchboxSend" class="menu-item menu-item-left unselectable" type="submit" value="Search">
 			</form>
 		</div>
 		<!--logo-->
 		<div id='logo-div'><a href="index.php"><img class="unselectable" id="logo-main" src="src/logo.png"/></a></div>
 		<!--categories-->
 		<div class="unselectable" id="categories-div">
 			<h1>Choose a category</h1>
 			<div onClick="location.href='cat1.php'" class='categories'><div class="categorie_part_a"><img style="width:100%;" src='src/sports.jpg'/></div><div class="categorie_part_b">Sports</div></div>
 			<div onClick="location.href='cat2.php'" class='categories'><div class="categorie_part_a"><img style="width:100%;" src='src/videogames.jpg'/></div><div class="categorie_part_b">Video Games</div></div>
 			<div onClick="location.href='cat3.php'" class='categories'><div class="categorie_part_a"><img style="width:100%;" src='src/stories.jpg'/></div><div class="categorie_part_b">Reading & Crafts</div></div>
 			<br>
 			<div onClick="location.href='cat4.php'" class='categories'><div class="categorie_part_a"><img style="width:100%;" src='src/electronics.jpg'/></div><div class="categorie_part_b">Electronics</div></div>
 			<div onClick="location.href='cat5.php'" class='categories'><div class="categorie_part_a"><img style="width:100%;" src='src/toys.jpg'/></div><div class="categorie_part_b">Toys</div></div>
 			<div onClick="location.href='cat6.php'" class='categories'><div class="categorie_part_a"><img style="width:100%;" src='src/fashion.jpg'/></div><div class="categorie_part_b">Fashion</div></div>
 		</div>
 		<!--status footer-->
 		<div class="unselectable" id="status-div">
 			<div id="statusItem1" class="status-item"></div>
 			<div id="statusItem2" class="status-item"></div>
 			<div id="statusItem3" class="status-item"></div>
 		</div>
 		<!--footer-->
 		<div class="unselectable" id="footer-div">Copyright 2016 - Wishly.nl</div>
 	</body>

 	<script src="functions.js"></script>
</html>

