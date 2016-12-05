var http = require("http");
var elasticsearch=require('elasticsearch');
var client=new elasticsearch.Client({
   host:'localhost:9200',
   log:'trace'
});
var hits;
client.search({index:'project1',type:'products',body:{
      query :{
         match:{
            description:'verpakking'
         }
      }
   }}).then(
      function(resp){
         hits=resp.hits.hits;
      },
      function(err){
         console.trace(err.message);
      }
);
http.createServer(function (request, response) {
   // Send the HTTP header 
   // HTTP Status: 200 : OK
   // Content Type: text/plain
   response.writeHead(200, {'Content-Type': 'text/plain'});
   // Send the response body as "Hello World"
   response.end(JSON.stringify(hits));
}).listen(8000);
console.log("Server running on 127.0.0.1:8000\n");

