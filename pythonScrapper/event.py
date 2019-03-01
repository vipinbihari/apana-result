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
mydb.commit()
class trigger:
    def __init__(self,path_to_file):
        self.path_to_file = path_to_file
        with open(f"{path_to_file}","r") as file:
            self.jsonData = json.loads(file.read())
    def parse(self,type,last_id):
        self.type = type
        self.last_id = last_id
        if (self.last_id > self.jsonData[self.type]):
            #now here we would run the InserImage AND
            #post image command through python
            self.list_id_data = []
            diffrence = self.last_id - self.jsonData[self.type]
            for counter in range(diffrence):
                self.list_id_data.append(self.jsonData[self.type] + counter +1 )
            #here we are inserting the thumnail json data to the results
            #type given by list of id in thumnails table
            ThumbnailsInsert(self.type,self.list_id_data)
            mydb.commit()
            #when the links thumbnail json is INSERTED
            #now we will share this to the FACEBOOK below
            for type_id in self.list_id_data:
                Share(self.type,type_id).post('')
                mydb.commit()
                print(f"Post type {self.type} and id {type_id} shared successfully")
            mydb.commit()

fetch = trigger('../event.json')
fetch.parse('result',last_result)
fetch.parse('latestjobs',last_latestjobs)
fetch.parse('admitcard',last_admitcard)
fetch.parse('answerkey',last_answerkey)
fetch.parse('syllabus',last_syllabus)
fetch.parse('important',last_important)
fetch.parse('admission',last_important)
fetch.parse('certificate',last_certificate)

event_file_dict = {}
event_file_dict['result'] = last_result
event_file_dict['latestjobs'] = last_latestjobs
event_file_dict['admitcard'] = last_admitcard
event_file_dict['admission'] = last_admission
event_file_dict['answerkey'] = last_answerkey
event_file_dict['syllabus'] = last_syllabus
event_file_dict['important'] = last_important
event_file_dict['certificate'] = last_certificate

with open(f"{self.path_to_file}","w") as file:
    file.write(str(event_file_dict))
    print(f"{self.path_to_file} has been updated successfully")
