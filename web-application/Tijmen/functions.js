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
  for(i=0;i<JSONdata.length;i++){
    var elem = document.createElement("img");
    $("#results").append(elem);
    elem.src = JSONdata[i]._source.image
  }
}

