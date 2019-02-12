from pythonscrapper import *
import mysql.connector
mydb = mysql.connector.connect(
host ="localhost",
user ="root",
passwd ="YES",
database = "apanaresult"
)
cursor = mydb.cursor()
cursor.execute("select id,generated_link from result ORDER BY id DESC")
links = cursor.fetchall()
dataList =[]
for link in links:
    json = Scrap(link[1]).Parse()
    sql = "UPDATE result SET sort_info = %s  where id = %s"
    dataList.append((json,link[0]))

cursor.executemany(sql,dataList)
mydb.commit()
