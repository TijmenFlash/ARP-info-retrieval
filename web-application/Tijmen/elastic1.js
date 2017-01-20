//cd ../../xampp\htdocs\elasticsearch_ARPInfoRetrieval
var elasticsearch = require("elasticsearch"),
    http = require("http");

var client = new elasticsearch.Client({
  host: 'localhost:9200',
  log: 'trace'
});

var serverPort = 8081;

http.createServer(function(request, response) {
    var query;
    client.search({
        index: 'project1',
        type: 'products',
        body: {
            size: 1000,
            query: {
                match_all: {}
            }
        }
    }).then(function (resp) {
        hits = resp.hits.hits;
        query=JSON.stringify(hits);
        console.log("Heyyyyyyyyyy");
        response.writeHead(200, {"Content-Type": "text/html"});
        response.end(query);
    }, function (err) {
        console.trace(err.message);
    });
      // At this point, we have the headers, method, url and body, and can now
      // do whatever we need to in order to respond to this request.
}).listen(serverPort);

console.log('Server running at localhost:'+serverPort);
