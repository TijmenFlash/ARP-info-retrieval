#import elasticsearch
from elasticsearch import Elasticsearch
from elasticsearch import helpers
#import json stuff
import json

#initialize vars
indexName = "project1"
fileName = "toysnoze-data.json"

#initialize ES
es = Elasticsearch()

#delete index if already exists
if es.indices.exists(indexName):
    print("deleting '%s' index..." % (indexName))
    res = es.indices.delete(index = indexName)
    print(" response: '%s'" % (res))

#create index
es.indices.create(index=indexName, ignore=400)

data = []
with open(fileName) as f:
	for line in f:
		d = json.loads(line)
		data.append(d)

i=0
actions = []
for i in range(len(data)):
	action = {
		"_index": indexName,
		"_type": "products",
		"_id": i,
		"title": data[i].get('title', 'null'),
		"rank": data[i].get('rank', 0),
		"price": data[i].get('price', 'null'),
		"rid": data[i].get('rid', 'null'),
		"description": data[i].get('description', 'null'),
		"query": data[i].get('query', 'null'),
		"image": data[i].get('image', 'null'),
		"url": data[i].get('url', 'null')
	}
	actions.append(action)

if len(actions) > 0:
	helpers.bulk(es, actions)
	print("bulk done")

f.close()