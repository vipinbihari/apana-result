import requests
from bs4 import BeautifulSoup
import json
import re
#This is the main class which will do every thing
class Scrap:
    def __init__(self,url):
        self.request = requests.get(url)
        self.main_link = url
    def content(self):
        try:
            self.filter1 = self.request.text.split('IMPORTANT LINK',1)[1]
        except IndexError:
            self.filter1 =re.split("important.*links" , self.request.text , flags=re.IGNORECASE)[1]
        self.filter2 = self.filter1.split('<tr>',1)[1]
        return '<tr>' + self.filter2.split('</tbody>',1)[0]
    #the newCheck function is for checking if the link is new in a given single_tr rows
    #single_tr_json object is also passed to set its new attribute's value to true of false
    def newCheck(self,single_tr,single_tr_json):
        if(len(single_tr.find_all('td')[0].find_all('img')) > 0):
            single_tr_json['new'] = True
        else:
            single_tr_json['new'] = False
    def Parse(self):
        #here we are creating main soup object
        self.soup = BeautifulSoup(self.content())
        #this bottom condition is for tr whic has maximux of 8 rows in documents
        self.jsonData = {"main_link":self.main_link,"links":[]}
        self.nameFlag = ''
        if(len(self.soup.find_all('a')) <= 8 ):
            #this is the contain single <tr>json jsonData
            # {"main_link":"https://mainpage.com/datapage.php",
            # "links":[{"name":"ssc result 2019"
            #  "link_name":"server 1",
            # "link":"http://thisisthedirectlinktopage.com",
            # "new":True},
            # {},
            # {}...]
            # }
            #here we are getting single <tr> tag and which has to be
            for single_tr in self.soup.find_all('tr'):
                #for each <tr> json data which will be appended to the jsonData main
                single_tr_json = {}
                #this condition is for 3 <td> in a row <tr>
                if(len(single_tr.find_all('td')) >= 3):
                    #here currently we are not supporting 3 column scraping in future may be so break the loop
                    print('Currently 3 column row scrapping is not supported, in future may be')
                    continue
                #this condition is for 2 <td> in a row <tr>
                elif(len(single_tr.find_all('td')) == 2):
                    #this is the case where there a no link in the second column<td>
                    if(len(single_tr.find_all('td')[1].find_all('a')) == 0):
                        print('this is the case of no link in second column')
                        #this function(newCheck()) would check if the link is new and update new attribute value in
                        #single_tr_json object
                        self.newCheck(single_tr,single_tr_json)
                        single_tr_json['name'] = single_tr.find_all('td')[0].text.strip() + self.nameFlag
                        single_tr_json['link_name'] = single_tr.find_all('td')[1].text.strip()
                        self.jsonData['links'].append(single_tr_json)
                    #this is the case where there a single link in the second column <td>
                    if(len(single_tr.find_all('td')[1].find_all('a')) == 1):
                        print('this is the case of single link in second column')
                        #this function(newCheck()) would check if the link is new and update new attribute value in
                        #single_tr_json object
                        self.newCheck(single_tr,single_tr_json)
                        single_tr_json['name'] = single_tr.find_all('td')[0].text.strip() + self.nameFlag
                        #generally we will not find the link_name here because most
                        #of the time it is click Here if it is someting else then we
                        #must take care (IN FUTURE WE MAY MODIFY IT)
                        #single_tr_json['link_name'] = single_tr.find_all('td')[1].text.strip()
                        single_tr_json['link'] = single_tr.find_all('td')[1].a.get('href')
                        self.jsonData['links'].append(single_tr_json)
                    #this is the case where there a more than 1 link in the second column <td>
                    if(len(single_tr.find_all('td')[1].find_all('a')) > 1):
                        print('this is the case of more than 1 link in second column')
                        for link in single_tr.find_all('td')[1].find_all('a'):
                            #DO NOT UNDERSTAND WHY IF single_tr_json IS NOT REDEFIED HERE
                            # IT BEHAVES ABNORMALY
                            single_tr_json ={}
                            #this function(newCheck()) would check if the link is new and update new attribute value in
                            #single_tr_json object
                            self.newCheck(single_tr,single_tr_json)
                            single_tr_json['name'] = single_tr.find_all('td')[0].text.strip() + self.nameFlag
                            single_tr_json['link'] = link.get('href')
                            single_tr_json['link_name'] = link.text.strip()
                            self.jsonData['links'].append(single_tr_json)
                #this condition is for 1 <td> in a row <tr>
                elif(len(single_tr.find_all('td')) == 1):
                    print('This is the case of only one td in a single tr')
                    self.nameFlag = '( ' + single_tr.find_all('td')[0].text.strip() + ')'
                #none of the <td> found while iterating over <tr> single
                else:
                    print('Not able to find any <td> in this <tr>')
                    continue
        #condition where no of links in a the document are more than 8
        if(len(self.soup.find_all('a')) > 8 ):
            counter = len(self.soup.find_all('tr'))
            iteration = 0
            #here we are getting single <tr> tag and which has to be
            for single_tr in self.soup.find_all('tr'):
                iteration +=1
                if(len(self.jsonData['links']) <= 4 ):
                    pass
                else:
                    #this condition is for 1 <td> in a row <tr>
                    if(len(single_tr.find_all('td')) == 1):
                        print('This is the case of only one td in a single tr in case of more than 8 links')
                        self.nameFlag = '( ' + single_tr.find_all('td')[0].text.strip() + ')'
                    if (counter - iteration) < 3 :
                        pass
                    else:
                        continue
                #for each <tr> json data which will be appended to the jsonData main
                single_tr_json = {}
                #this condition is for 3 <td> in a row <tr>
                if(len(single_tr.find_all('td')) >= 3):
                    #here currently we are not supporting 3 column scraping in future may be so break the loop
                    print('Currently 3 column row scrapping is not supported, in future may be')
                    continue
                #this condition is for 2 <td> in a row <tr>
                elif(len(single_tr.find_all('td')) == 2):
                    #this is the case where there a no link in the second column<td>
                    if(len(single_tr.find_all('td')[1].find_all('a')) == 0):
                        print('this is the case of no link in second column')
                        #this function(newCheck()) would check if the link is new and update new attribute value in
                        #single_tr_json object
                        self.newCheck(single_tr,single_tr_json)
                        single_tr_json['name'] = single_tr.find_all('td')[0].text.strip() + self.nameFlag
                        single_tr_json['link_name'] = single_tr.find_all('td')[1].text.strip()
                        self.jsonData['links'].append(single_tr_json)
                    #this is the case where there a single link in the second column <td>
                    if(len(single_tr.find_all('td')[1].find_all('a')) == 1):
                        print('this is the case of single link in second column')
                        #this function(newCheck()) would check if the link is new and update new attribute value in
                        #single_tr_json object
                        self.newCheck(single_tr,single_tr_json)
                        single_tr_json['name'] = single_tr.find_all('td')[0].text.strip() + self.nameFlag
                        #generally we will not find the link_name here because most
                        #of the time it is click Here if it is someting else then we
                        #must take care (IN FUTURE WE MAY MODIFY IT)
                        #single_tr_json['link_name'] = single_tr.find_all('td')[1].text.strip()
                        single_tr_json['link'] = single_tr.find_all('td')[1].a.get('href')
                        self.jsonData['links'].append(single_tr_json)
                    #this is the case where there a more than 1 link in the second column <td>
                    if(len(single_tr.find_all('td')[1].find_all('a')) > 1):
                        print('this is the case of more than 1 link in second column')
                        for link in single_tr.find_all('td')[1].find_all('a'):
                            #DO NOT UNDERSTAND WHY IF single_tr_json IS NOT REDEFIED HERE
                            # IT BEHAVES ABNORMALY
                            single_tr_json ={}
                            #this function(newCheck()) would check if the link is new and update new attribute value in
                            #single_tr_json object
                            self.newCheck(single_tr,single_tr_json)
                            single_tr_json['name'] = single_tr.find_all('td')[0].text.strip() + self.nameFlag
                            single_tr_json['link'] = link.get('href')
                            single_tr_json['link_name'] = link.text.strip()
                            self.jsonData['links'].append(single_tr_json)
                #this condition is for 1 <td> in a row <tr>
                elif(len(single_tr.find_all('td')) == 1):
                    print('This is the case of only one td in a single tr')
                    self.nameFlag = '( ' + single_tr.find_all('td')[0].text.strip() + ')'
                #none of the <td> found while iterating over <tr> single
                else:
                    print('Not able to find any <td> in this <tr>')
                    continue
        return json.dumps(self.jsonData)
