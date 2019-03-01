#THIS SCRIPT IS FOR SCRAPPING DATA FROM MAIN IMAGES BLOCK
#THE THINGS WHICH ARE ON TREND ON WEBSITE

from bs4 import BeautifulSoup
import requests
import mysql.connector

class Scrap:
    def __init__(self,url='https://sarkariresults.info'):
        self.content = requests.get(url)
    def parse(self):
        self.soup = BeautifulSoup(self.content.text.replace('<br>',' '))
        self.jsonData = []
        for i in range(1,9):
            self.jsonData.append((self.soup.find(id=f"td{i}").text, self.soup.find(id=f"td{i}").a.get('href'), i))
        return self.jsonData

mydb = mysql.connector.connect(
host ="localhost",
user ="root",
passwd ="YES",
database = "apanaresult"
)
cursor = mydb.cursor()
cursor.execute("select id from trending")
if (len(cursor.fetchall()) > 7):
    sql = f"UPDATE trending SET post_name = %s , generated_link = %s WHERE id = %s"
    #sql = f"INSERT INTO trending (post_name, generated_link) VALUES (%s,%s)"
    print('\033[93m'+sql+'\033[00m')
    cursor.executemany(sql,Scrap().parse())
    mydb.commit()
else:
    print("There must be atleast 8 sample row in trending table")
