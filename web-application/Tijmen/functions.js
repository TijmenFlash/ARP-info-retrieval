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
  $('#statusItem1').html("x users online");
  $('#statusItem2').html("x wish lists created");
  $('#statusItem3').html("fact");
}

function presearch(){
  var qs = getQueryStrings();
  $("#searchbox").val (qs["q"]);
  $("#formSearch").submit();
}

$("#formSearch").submit(function(e) {
    $.ajax({
        type: "POST",
        url: "http://localhost:8080",
        data: $("#searchbox").val(), // serializes the form's elements.
        dataType: 'text',
        success: function(data)
        {
          JSONdata = JSON.parse(data);
          updateItems();
        }
      });
      console.log($("#searchbox").val());
    e.preventDefault(); // avoid to execute the actual submit of the form.
});

$("#formHome").submit(function(e) {
    $.ajax({
        type: "POST",
        url: "http://localhost:8080",
        data: $("#searchbox").val(), // serializes the form's elements.
        dataType: 'text',
        success: function(data)
        {
          JSONdata = JSON.parse(data);
          updateItems();
        }
      });
      console.log($("#searchbox").val());
    // e.preventDefault(); // avoid to execute the actual submit of the form.
});

function updateItems(){ 
  $("#results-div").html("")
  for(i=0;i<JSONdata.length;i++){
    $("#results-div").append("<div class='product'><br><img src='"+JSONdata[i]._source.image+"'/></div>");
  }
  $("#results-div").append("<br><br><br><br><br><br>")
}


//added
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

