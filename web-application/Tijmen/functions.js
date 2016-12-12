//functions
console.log("functions.js loaded")

var JSONdata = 0;

$("#testbut").click(function() {
  $.post("http://localhost:8080", function( data ) {
    //$("#results").html( data );
    JSONdata = JSON.parse(data);
    updateItems();
  });
  console.log("send 'em");
});

function updateItems(){ 
  $("#results-div").html("")
  for(i=0;i<JSONdata.length;i++){
    $("#results-div").append("<div class='product'><img src='"+JSONdata[i]._source.image+"'/></div>");
  }
  $("#results-div").append("<br><br><br><br><br><br>")
}

