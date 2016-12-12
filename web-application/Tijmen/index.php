<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
  		<title>Wishly - Categories</title>
  		<link rel="stylesheet" type="text/css" href="style.css">
 	</head>

 	<body>
 		<!--menu-->
 		<div id='menu-div'>
 			<button class="menu-item unselectable">Profile</button><button class="menu-item unselectable">My Wishlist</button>
 		</div>
 		<!--logo-->
 		<div id='logo-div'><a href="index.php"><img class="unselectable" id="logo-main" src="src/logo.png"/></a></div>
 		<!--categories-->
 		<div class="unselectable" id="categories-div">
 			<h1>Choose a category</h1>
 			<button onClick="location.href='search.php'" class='categories'><img class="category-img" src="src/sports.jpg"/>Sports</button>
 			<button onClick="location.href='search.php'" class='categories'><img class="category-img" src="src/videogames.jpg"/>Video Games</button>
 			<button onClick="location.href='search.php'" class='categories'><img class="category-img" src="src/clothes.jpg"/>Clothes</button>
 			<button onClick="location.href='search.php'" class='categories'><img class="category-img" src="src/books2.jpg"/>Books</button><br>
 			<button onClick="location.href='search.php'" class='categories'><img class="category-img" src="src/x.jpg"/>Toys</button>
 			<button onClick="location.href='search.php'" class='categories'><img class="category-img" src="src/x.jpg"/>Electronics</button>
 			<button onClick="location.href='search.php'" class='categories'><img class="category-img" src="src/x.jpg"/>Stuffed Animals</button>
 			<button onClick="location.href='search.php'" class='categories'><img class="category-img" src="src/x.jpg"/>Favourite Characters</button> 	
 		</div>
 		<!--status footer-->
 		<div class="unselectable" id="status-div">
 			<div id="status-item">1002 users online</div>
 			<div id="status-item">400523 wish lists created</div>
 			<div id="status-item">fact3</div>
 		</div>
 		<!--footer-->
 		<div class="unselectable" id="footer-div">Copyright 2016 - Wishly.nl</div>
 	</body>

 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 	<script src="functions.js"></script>
</html>

