from pythonscrapper import *
import sys
import mysql.connector
mydb = mysql.connector.connect(
host ="localhost",
user ="root",
passwd ="YES",
database = "apanaresult"
)
cursor = mydb.cursor()
case = str(sys.argv[1])
if case == 1:
    select = ['result','admitcard','latestjobs']
elif case == 2:
    select = ['admission','answerkey','syllabus','important','certificate']
else:
    select = ['result','admitcard','latestjobs','admission','answerkey','syllabus','important','certificate']
limit = sys.argv[2]
#select = ['result','admitcard','latestjobs','admission','answerkey','syllabus','important','certificate']
for selected in select:
    cursor.execute(f"select id,generated_link from {selected} ORDER BY id DESC LIMIT {limit}")
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
