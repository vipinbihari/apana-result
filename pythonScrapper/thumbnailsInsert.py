from imageScrap import *
import mysql.connector
import json
mydb = mysql.connector.connect(
host ="localhost",
user="root",
passwd = "YES",
database="apanaresult"
)
cursor = mydb.cursor()
class ThumnailInsert:
    def __init__(self,type,ids):
        #here the type should be the table name from which the thumbnail is to
        #be generated
        self.type = type
        #here ids are the id (id number of) corresponding column
        #in the table
        self.ids = ids
        #this is extratext word which is
        #added at the end of the search image string
        self.extraText = "youtube"
        self.jsonData = []
        cursor.execute(f"select id,post_name from {self.type} where id in {self.ids}")
        posts = cursor.fetchall()
        for post in posts:
            id = post[0]
            jsonImage = Image(post[1] + self.extraText).parse()
            self.jsonData.append((self.type,id,json.dumps(jsonImage)))
        sql = f"INSERT INTO thumbnails (type, type_id, thumbnail_json) VALUES (%s, %s, %s)"
        cursor.executemany(sql, self.jsonData)
        mydb.commit()
