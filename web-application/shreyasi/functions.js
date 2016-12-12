//functions
console.log("functions.js loaded");
$("#formid").submit(function(e) {
    $.ajax({
        type: "POST",
        url: "http://localhost:8080",
        data: $("#formid").serialize(), // serializes the form's elements.
        dataType: 'jsonp',
        success: function(data)
        {
            alert(data); // show response from the php script.
        }
    });
    e.preventDefault(); // avoid to execute the actual submit of the form.
});

/*$("#formid").submit(function(event) {
  /* stop form from submitting normally
  event.preventDefault();
  /* Send the data using post with element id name and name2
  $.post( "http://localhost:8080", { name: $('#q').val() }, function(data){
      console.log($('#q').val());
      console.log("i am in");
      $("#results").html( data );
  } );
});*/



