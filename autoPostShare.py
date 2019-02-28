'''THIS IS FACEBOOK AUTOMATIC POST SHARE
IN THIS THERE ARE 4 STEPS WILL BE INVOLVED
1) FIRST AN EVENT WILL BE TRIGGERD WHEN AN LINK IS INSERTED TO THE post_name
2) AS SOON AS LINK IS INSERTED EXTRACT THE JSON FORMAT FOR THE THUMBNAIL
3) INSERT ALL THE ABOVE EXTRACTED THUMBNAIL TO THE database
4) NOW SHARE THE LINK TO THE FACEBOOK PAGE AND WRITE THE
   posted_fb_id to the database
Note: Before posting to FACEBOOK make sure that the link is not posted Before
      if it is posted earlier then delete that post and repost again.
 '''

import requests
import os
import json
import mysql.connector

mydb = mysql.connector.connect(
host = "localhost",
user = "root",
passwd = "YES",
database = "apanaresult"
)
cursor = mydb.cursor()

class Share:
    def __init__(self, type, id):
        self.type = type
        self.id = id
        #the below query is made to retrive thumbnails related information
        cursor.execute(f"SELECT posted_fb_id from thumbnails where type='{self.type}' AND type_id={self.id}")
        self.thumbnailData = cursor.fetchall()[0]
        #the below query is made to get thumbnail name detail
        cursor.execute(f"SELECT post_name FROM {self.type} where id={self.id}")
        self.postName = cursor.fetchall()[0][0]
        #this is the facebook page managing token
        #which must be stored as enviornment variable
        #for sequrity reason
        #
        self.token = os.environ['token']
    def post(self,message):
        self.message = message
        #first check if the same link is already shared or not
        if (not self.thumbnailData[0]) :
            print('This is not shared before')
        else:
            print('This link is already shared with id ' + self.thumbnailData[0])
            self.delete = requests.delete(f"https://graph.facebook.com/{self.thumbnailData[0]}", params={'access_token':self.token})
        #now posting the link with its title and some addition message
        self.payload ={}
        self.payload["message"]=f"{self.postName} {self.message}"
        self.payload['access_token'] = self.token
        self.payload['link'] = f"https://apanaresult.com/index5.php?type={type}&id={id}"
        self.send = requests.post("https://graph.facebook.com/995191740633729/feed", params=self.payload)
        self.posted_fb_id = json.loads(self.send.text)['id']
        if(self.posted_fb_id):
            sql = f"UPDATE thumbnails SET posted_fb_id='{self.posted_fb_id}' WHERE type='{self.type}' AND type_id={self.id}"
            cursor.execute(sql)
            mydb.commit()
