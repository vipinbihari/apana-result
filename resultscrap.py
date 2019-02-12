from pythonscrapper import *
import mysql.connector
mydb = mysql.connector.connect(
host ="localhost",
user ="root",
passwd ="YES",
database = "apanaresult"
)
cursor = mydb.cursor()
select = ['result','admitcard','latestjobs','admission','answerkey','syllabus','important','certificate']
for selected in select:
    cursor.execute(f"select id,generated_link from {selected} ORDER BY id DESC")
    links = cursor.fetchall()
    dataList =[]
    for link in links:
        try:
            json = Scrap(link[1]).Parse()
            dataList.append((json,link[0]))
        except:
            continue
    sql = f"UPDATE {selected} SET sort_info = %s  where id = %s"
    print('\033[93m'+sql+'\033[00m')
    cursor.executemany(sql,dataList)
    mydb.commit()
