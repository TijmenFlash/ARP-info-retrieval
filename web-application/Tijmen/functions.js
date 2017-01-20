//functions
console.log("functions.js loaded")

var JSONdata = 0;

function setStatusItems(){
  $('#statusItem1').html("10 users online");
  $('#statusItem2').html("1021 wish lists created");
  $('#statusItem3').html("1219 items to browse through");
}

function presearch(){
  var qs = getQueryStrings();
  $("#searchbox").val (qs["q"]);
  $("#formSearch").submit();
  refreshResults();
}

function presearch1(){
  var qs = getQueryStrings();
  $("#searchbox").val (qs["q"]);
  $("#formSearch").submit();
  refreshResults1();
}

function wheretoplace(){
    var width = event.pageX;
    if (width<800) return 'right';
    return 'left';
}

function popoverfunction(){
  for(i=0;i<JSONdata.length;i++){
    $("#popProduct"+i).popover({ 
      html: true,
      trigger: "hover",
      placement: wheretoplace,
      title: "<div style='width:80%;'><b>"+JSONdata[i]._source.title+"</b></div> <div style='color:blue;top:8px;right:8px;position:absolute;'>€"+ JSONdata[i]._source.price+"</div>",
      content: JSONdata[i]._source.description,
      container: "body"
    });
  }
}

function refreshResults(){
    $.ajax({
        type: "POST",
        url: "http://localhost:8080",
        data: $("#searchbox").val(), // serializes the form's elements.
        dataType: 'text',
        success: function(data){
          JSONdata = JSON.parse(data);
          
          $("#results-div").html("")
          for(i=0;i<JSONdata.length;i++){
            $("#results-div").append("<div class='product' id='popProduct"+i+"'><div class='product-image'><img class='product-image-src' style='width:100%;' src='"+JSONdata[i]._source.image+"'/></div><div class='product-title'>"+JSONdata[i]._source.title+"</div><div onclick='addWish("+i+")' id='addWish"+i+"' class='add-to-wishlist'>+</div></div>");
          }

          //added
          popoverfunction();
          
          if(JSONdata.length==0){
            $("#results-div").append("<br><br><h1>No results.</h1>");
          }
          $("#results-div").append("<br><br><br><br>");
        }
      });
      console.log($("#searchbox").val());
};

function refreshResults1(){
    $.ajax({
        type: "POST",
        url: "http://localhost:8080",
        data: $("#searchbox").val(), // serializes the form's elements.
        dataType: 'text',
        success: function(data){
          JSONdata = JSON.parse(data);
          
          $("#results-div").html("")
          for(i=0;i<JSONdata.length;i++){
            $("#results-div").append("<div class='product' id='popProduct"+i+"'><div class='product-image'><img class='product-image-src' style='width:100%;' src='"+JSONdata[i]._source.image+"'/></div><div class='product-title'>"+JSONdata[i]._source.title+"</div><div onclick='addWish1("+i+")' id='addWish"+i+"' class='add-to-wishlist'>+</div></div>");
          }

          //added
          popoverfunction();

          if(JSONdata.length==0){
            $("#results-div").append("<br><br><h1>No results.</h1>");
          }
          $("#results-div").append("<br><br><br><br>");
        }
      });
      console.log($("#searchbox").val());
};

function showAllResults(){
    $.ajax({
        type: "POST",
        url: "http://localhost:8081",
        data: "",
        dataType: 'text',
        success: function(data){
          JSONdata = JSON.parse(data);
          shuffle(JSONdata);
          $("#results-div").html("")
          for(i=0;i<JSONdata.length;i++){
            $("#results-div").append("<div class='product' id='popProduct"+i+"'><div class='product-image'><img class='product-image-src' style='width:100%;' src='"+JSONdata[i]._source.image+"'/></div><div class='product-title'>"+JSONdata[i]._source.title+"</div><div onclick='addWish1("+i+")' id='addWish"+i+"' class='add-to-wishlist'>+</div></div>");
          }

          //added
          popoverfunction();

          if(JSONdata.length==0){
            $("#results-div").append("<br><br><h1>No results.</h1>");
          }
          $("#results-div").append("<br><br><br><br>");
        }
      });
      console.log($("#searchbox").val());
};

function refreshWishlistResults(){
  $.get('get_items.php',{ "_": $.now() }, function(data){
    JSONdata = JSON.parse(data);
    $("#results-div").html("")
      for(i=0;i<JSONdata.length;i++){
        if(JSONdata[i].item_list==0){
          $("#results-div").append("<div class='product'><div class='product-image'><img class='product-image-src' style='width:100%;' src='"+JSONdata[i].item_link+"'/></div><div class='product-title'>"+JSONdata[i].item_title+"</div><div onclick='removeWish("+i+")' id='removeWish"+i+"' class='remove-from-wishlist'>x</div></div>");
        }
      }

      //added
      popoverfunction();


      if(data.length==0){
        $("#results-div").append("<br><br><h1>No results.</h1>");
      }
      $("#results-div").append("<br><br><br><br>");

  });
}

function refreshWishlistResults1(){
  $.get('get_items.php',{ "_": $.now() }, function(data){
    JSONdata = JSON.parse(data);
    $("#results-div").html("")
      for(i=0;i<JSONdata.length;i++){
        if(JSONdata[i].item_list==1){
          $("#results-div").append("<div class='product'><div class='product-image'><img class='product-image-src' style='width:100%;' src='"+JSONdata[i].item_link+"'/></div><div class='product-title'>"+JSONdata[i].item_title+"</div><div onclick='removeWish("+i+")' id='removeWish"+i+"' class='remove-from-wishlist'>x</div></div>");
        }      
      }

      //added
      popoverfunction();

      if(data.length==0){
        $("#results-div").append("<br><br><h1>No results.</h1>");
      }
      $("#results-div").append("<br><br><br><br>");

  });
}

function addWish(i){
  var tempLink = JSONdata[i]._source.image;
  var tempTitle = JSONdata[i]._source.title;
  var tempList = 0;

  $.post('set_items.php',{
    postLink: tempLink,
    postTitle: tempTitle,
    postList: tempList
  })
  .done(function(data){
    if (data === "success"){
      alert("Item added");
    } else {
      alert('failure'+data);
    }
  })
}

function addWish1(i){
  var tempLink = JSONdata[i]._source.image;
  var tempTitle = JSONdata[i]._source.title;
  var tempList = 1;
  
  $.post('set_items.php',{
    postLink: tempLink,
    postTitle: tempTitle,
    postList: tempList
  })
  .done(function(data){
    if (data === "success"){
      alert("Item added");
    } else {
      alert('failure'+data);
    }
  })
}

function removeWish(i){
  tempId = JSONdata[i].item_id;
  $.post('del_items.php',{
    postId: tempId,
  })
  .done(function(data){
    if (data === "success"){
      
      alert("Item deleted");
    } else {
      alert('failure'+data);
    }
    location.reload();
  })
}

function getQueryStrings() { 
  var assoc  = {};
  var decode = function (s) { return decodeURIComponent(s.replace(/\+/g, " ")); };
  var queryString = location.search.substring(1); 
  var keyValues = queryString.split('&'); 

  for(var i in keyValues) { 
    var key = keyValues[i].split('=');
    if (key.length > 1) {
      assoc[decode(key[0])] = decode(key[1]);
    }
  } 
  return assoc; 
} 

function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}