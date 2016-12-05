//functions
console.log("functions.js loaded")

$("#testbut").click(function() {
  $.post("http://localhost:8080", function( data ) {
    $("#results").html( data );
  });
  console.log("send 'em");
});

