#!/usr/bin/env python
from elasticsearch import Elasticsearch
from elasticsearch import helpers
import sys
import simplejson as json
from pprint import pprint

reload(sys)  
sys.setdefaultencoding('utf8')

#elasticsearch() takes localhost and port:9200 by default 
es = Elasticsearch()
f=open("toysnoze-data.json","r")
alldata=[]
lines=f.readlines()
for i in range(0,len(lines)):
    data=json.loads(lines[i])
    #pprint(data)
    alldata.append(data)

actions=[]
request_body = {
    "settings" : {
        "number_of_shards": 2,
        "number_of_replicas": 1
   },
   "mappings": {
        "products": {
            "properties": {
                "title": {
                    "type": "string",
                    "null_value": "NULL"
                },
                "rank": {
                    "type": "string",
                    "null_value": "NULL"
                },
                "price": {
                    "type" : "string",
                    "null_value": "NULL"
                },
                "rid": {
                    "type": "string",
                    "null_value": "NULL"
                },
                "description": {
                    "type" :"string",
                    "null_value": "NULL"
                },
                "query" :{
                    "type" :"string",
                    "null_value": "NULL"
                },
                "image" :{
                    "type": "string",
                    "null_value": "NULL"
                },
                "url":{
                    "type": "string",
                    "null_value": "NULL"
                }
            }
        }
    }
}
print "creating index..."
res = es.indices.create(index = "project1", body = request_body)
print " response: ",res
for i in range(0,len(alldata)):
    source={}
    if alldata[i].has_key("title"):
        source["title"]=alldata[i]["title"]
    if alldata[i].has_key("rank"):
        source["rank"]=alldata[i]["rank"]
    if alldata[i].has_key("price"):
        source["price"]=alldata[i]["price"]
    if alldata[i].has_key("rid"):
        source["rid"]=alldata[i]["rid"]
    if alldata[i].has_key("description"):
        source["description"]=alldata[i]["description"]
    if alldata[i].has_key("query"):
        source["query"]=alldata[i]["query"]
    if alldata[i].has_key("image"):
        source["image"]=alldata[i]["image"]
    if alldata[i].has_key("url"):
        source["url"]=alldata[i]["url"]
    action = {
        '_index' : 'project1',
        '_type' : 'products',
        '_id' :  i,
        '_source' : source
    }
    actions.append(action)
f.close()
if len(actions)>0:
    helpers.bulk(es, actions)
