//cd ../../xampp\htdocs\elasticsearch_ARPInfoRetrieval

var elasticsearch = require('elasticsearch'),
    http = require("http");

var client = new elasticsearch.Client({
  host: 'localhost:9200',
  log: 'trace'
});

var hits;
var serverPort = 8080;

client.search({
  index: 'project1',
  type: 'products',
  body: {
    query: {
      match: {
        description: 'verpakking'
      }
    }
  }
}).then(function (resp) {
    hits = resp.hits.hits;
}, function (err) {
    console.trace(err.message);
});

http.createServer(function(request, response) {
  if(request.method === "POST"){
    response.writeHead(200, {"Content-Type": "text/html"});
    response.write(JSON.stringify(hits));
    response.end();
  }
}).listen(serverPort);

console.log('Server running at localhost:'+serverPort);
