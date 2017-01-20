<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
  		<title>Wishly - Sub Categories</title>
  		<link rel="stylesheet" type="text/css" href="style.css">
 	</head>

 	<body onload="setStatusItems()">
 		<!--menu-->
 		<div id='menu-div'> 			
 			<button class="menu-item unselectable">Profile</button><button class="menu-item unselectable" onClick="location.href='wishlist.php'">My Wishlist</button>
 			<button onClick="location.href='index.php'" class="menu-item menu-item-left unselectable">&#8630; Back</button>
 			<form id="formHome" action="search.php" method="get" autocomplete="off">
				<input id="searchbox" class="menu-item menu-item-left unselectable" type="text" name="q" pattern=".{1,}" required title="1 characters minimum">
				<input id="searchboxSend" class="menu-item menu-item-left unselectable" type="submit" value="Search">
 			</form>
 		</div>
 		<!--logo-->
 		<div id='logo-div'><a href="index.php"><img class="unselectable" id="logo-main" src="src/logo.png"/></a></div>
 		<!--categories-->
 		<div class="unselectable" id="categories-div">
 			<h1>Choose a subcategory</h1>
 			<div onClick="location.href='search.php?q=lego'" class='categories'><div class="categorie_part_a"><img style="width:100%;" src='src/lego.jpg'/></div><div class="categorie_part_b">Lego</div></div>
 			<div onClick="location.href='search.php?q=boardgames'" class='categories'><div class="categorie_part_a"><img style="width:100%;" src='src/boardgames.jpg'/></div><div class="categorie_part_b">Board Games</div></div>
 			<div onClick="location.href='search.php?q=puzzle'" class='categories'><div class="categorie_part_a"><img style="width:100%;" src='src/puzzle.jpg'/></div><div class="categorie_part_b">Puzzles</div></div>
 			<div onClick="location.href='search.php?q=action figures dolls'" class='categories'><div class="categorie_part_a"><img style="width:100%;" src='src/dolls.jpg'/></div><div class="categorie_part_b">Action figures & Dolls (stuffed animals & dolls?)</div></div>
 			<div onClick="location.href='search.php?q=vehicles'" class='categories'><div class="categorie_part_a"><img style="width:100%;" src='src/vehicles.jpg'/></div><div class="categorie_part_b">Vehicles</div></div>
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

 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 	<script src="functions.js"></script>
</html>

