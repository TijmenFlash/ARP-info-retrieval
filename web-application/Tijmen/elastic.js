//cd ../../xampp\htdocs\elasticsearch_ARPInfoRetrieval
var elasticsearch = require("elasticsearch"),
    http = require("http");

var client = new elasticsearch.Client({
  host: 'localhost:9200',
  log: 'trace'
});

var serverPort = 8080;

function searching(inp, fun1) {
  client.search({
    index: 'project1',
    type: 'products',
    body: {
      size: 100,
      query: {
        match: {
          description: inp
        }
      }
    }
  }).then(function (resp) {
      hits = resp.hits.hits;
      fun1(hits);
  }, function (err) {
      console.trace(err.message);
  });
}
http.createServer(function(request, response) {
  var query;
  if(request.method === "POST"){
    request.on('error', function(err) {
      console.error(err);
    }).on('data', function(chunk) {
      console.log(chunk.toString());
      searching(chunk.toString(), function(res){
        query=JSON.stringify(res);
        console.log("Heyyyyyyyyyy");
        response.writeHead(200, {"Content-Type": "text/html"});
        response.end(query);
      });
      // At this point, we have the headers, method, url and body, and can now
      // do whatever we need to in order to respond to this request.
    });
  }
}).listen(serverPort);

console.log('Server running at localhost:'+serverPort);
