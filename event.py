'''
this script is for trigger an event after some specified
amout of time and see if the new links are available
if they are they will be posted on facebook.

a local file event.json must be created to get the record details
'''
from thumbnailsInsert import *
from autoPostShare import *
cursor.execute(f"(SELECT id from result order by id desc limit 1) \
UNION ALL (SELECT id FROM latestjobs order by id desc limit 1) \
UNION ALL (SELECT id FROM admitcard order by id desc limit 1) \
UNION ALL (SELECT id FROM answerkey order by id desc limit 1) \
UNION ALL (SELECT id FROM syllabus order by id desc limit 1) \
UNION ALL (SELECT id FROM admission order by id desc limit 1) \
UNION ALL (SELECT id FROM certificate order by id desc limit 1) \
UNION ALL (SELECT id FROM important order by id desc limit 1) ")
data = cursor.fetchall()
last_result = data[0][0]
last_latestjobs = data[1][0]
last_admitcard = data[2][0]
last_answerkey = data[3][0]
last_syllabus = data[4][0]
last_admission = data[5][0]
last_certificate = data[6][0]
last_important = data[7][0]
class trigger:
    def __init__(self,path_to_file):
        with open(f"{path_to_file}","r") as file:
            self.jsonData = json.loads(file.read())
    def parse(self):
        if (last_result > self.jsonData['result']):
            #now here we would run the InserImage AND
            #post image command through python
            self.resultData = []
            diffrence = last_result - self.jsonData['result']
            for counter in range(diffrence):
                self.resultData.append(self.jsonData['result'] + counter +1 )
            #here we are inserting the thumnail json data to the results
            #type given by list of id in thumnails table
            ThumbnailsInsert('result',self.resultData)
            #when the links thumbnail json is INSERTED
            #now we will share this to the FACEBOOK below
            for type_id in self.resultData:
                Share('result',type_id).post('')
                print(f"Post type result and id {type_id} shared successfully")
