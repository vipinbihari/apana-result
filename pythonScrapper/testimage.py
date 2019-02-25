import mysql.connector
mydb = mysql.connector.connect(
host ="localhost",
user="root",
passwd = "YES",
database="apanaresult"
)
cursor = mydb.cursor()
cursor.execute("select img_thumb from result order by id desc limit 5")
posts = cursor.fetchall()
html=""
for post in posts:
    html+ = f"<h2>{post}</h2>"
    imageLinks = Image(f"{post} youtube").parse()
    for imageLink in imageLinks:
        html+ = f"<img src={imageLinks[imageLink]} style='width:20%' />"
    html+ = "<hr/>"
print(html)
