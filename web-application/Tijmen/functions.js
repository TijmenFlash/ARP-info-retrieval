//functions
console.log("functions.js loaded")

var JSONdata = 0;

// $("#testbut").click(function() {
//   $.ajax()
//   $.post("http://localhost:8080", function( data ) {
//     //$("#results").html( data );
//     JSONdata = JSON.parse(data);
//     updateItems();
//   });
// });

function setStatusItems(){
  $('#statusItem1').html("10 users online");
  $('#statusItem2').html("1021 wish lists created");
  $('#statusItem3').html("x items to browse through");
}

function presearch(){
  var qs = getQueryStrings();
  $("#searchbox").val (qs["q"]);
  $("#formSearch").submit();
  refreshResults();
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
            $("#results-div").append("<div class='product'><div class='product-image'><img class='product-image-src' style='width:100%;' src='"+JSONdata[i]._source.image+"'/></div><div class='product-title'>"+JSONdata[i]._source.title+"</div><div onclick='addWish("+i+")' id='addWish"+i+"' class='add-to-wishlist'>+</div></div>");
          }
          if(JSONdata.length==0){
            $("#results-div").append("<br><br>No results.")
          }
          $("#results-div").append("<br><br><br><br>")
        }
      });
      console.log($("#searchbox").val());
};

// function refreshWishlistResults(){
  
// }

function addWish(i){
  tempLink = JSONdata[i]._source.image;
  tempTitle = JSONdata[i]._source.title;
  $.post('set_items.php',{
    postLink: tempLink,
    postTitle: tempTitle
  })
  .done(function(data){
    if (data === "success"){
      update_status();
      alert("Item added");
    } else {
      alert('failure'+data);
    }
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

function update_status(){
    $.get('get_items.php',{ "_": $.now() }, function(data){
    data = JSON.parse(data);
    wishlistItemsTemp = document.getElementsByClassName("product-image-src");
    for (i=0;i<wishlistItemsTemp.length;i++){
      for (j=0;j<data.length;j++){
        if((wishlistItemsTemp[i].src)==(data[j].item_link)){
          document.getElementById("addWish"+i).innerHTML = "v";
          document.getElementById("addWish"+i).onClick = "null";
        }
      }
    }
  });
}