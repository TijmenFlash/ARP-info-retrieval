<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
  		<title>Wishly - Categories</title>
  		<link rel="stylesheet" type="text/css" href="style.css">
 	</head>

 	<body onload="setStatusItems()">
 		<!--menu-->
 		<div id='menu-div'> 			
 			<button class="menu-item unselectable">Profile</button><button class="menu-item unselectable">My Wishlist</button>
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
 			<button onClick="location.href='search.php?q=sport'" class='categories'><img class="category-img" src="src/sports.jpg"/>Sports</button>
 			<button onClick="location.href='search.php?q=video games'" class='categories'><img class="category-img" src="src/videogames.jpg"/>Video Games</button>
 			<button onClick="location.href='search.php?q=kleding'" class='categories'><img class="category-img" src="src/clothes.jpg"/>Clothes</button>
 			<button onClick="location.href='search.php?q=book'" class='categories'><img class="category-img" src="src/books2.jpg"/>Books</button><br>
 			<button onClick="location.href='search.php?q=speelgoed'" class='categories'><img class="category-img" src="src/x.jpg"/>Toys</button>
 			<button onClick="location.href='search.php?q=Electronica'" class='categories'><img class="category-img" src="src/x.jpg"/>Electronics</button>
 			<button onClick="location.href='search.php?q=pop'" class='categories'><img class="category-img" src="src/x.jpg"/>Stuffed Animals</button>
 			<button onClick="location.href='search.php?q=favoriet'" class='categories'><img class="category-img" src="src/x.jpg"/>Favourite Characters</button> 	
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

