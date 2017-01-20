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
 			<div onClick="location.href='search.php?q=xbox'" class='categories'><div class="categorie_part_a"><img style="width:100%;" src='src/xbox.jpg'/></div><div class="categorie_part_b">Xbox</div></div>
 			<div onClick="location.href='search.php?q=ps'" class='categories'><div class="categorie_part_a"><img style="width:100%;" src='src/ps.jpg'/></div><div class="categorie_part_b">Playstation</div></div>
 			<div onClick="location.href='search.php?q=wii'" class='categories'><div class="categorie_part_a"><img style="width:100%;" src='src/wii.jpg'/></div><div class="categorie_part_b">Wii</div></div>
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

