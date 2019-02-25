'''this script is for scrapping the number of google's first images searched
    results '''
import requests
class Image:
    def __init__(self,text):
        self.text=text
        self.headers = {'user-agent': 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.81 Safari/537.36',
         'referer': 'https://www.google.co.in', 'accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b2',
          'accept-encoding': 'gzip', 'accept-language': 'en-US,en;q=0.9,fr;q=0.8,hi;q=0.7,ru;q=0.6', 'cache-control': 'no-cache'}
        self.content=requests.get(f"https://www.google.co.in/search?tbm=isch&q={self.text}", headers=self.headers)
    def parse(self):
        self.jsonImageLinks = {}
        #the number of links that are to be exracted
        #the number should be less by 1 to the number of links to be extracted
        self.linksCount=4
        #here we are filtering the searched image page to get the corret links
        filter1 = self.content.text.split('"ou":"',1)[1]
        #filter2 is a list containing the number of link specified as constant
        filter2 = filter1.split('"ou":"',self.linksCount)
        counter = 0
        for links in filter2:
            if(len(self.jsonImageLinks) == 0):
                self.jsonImageLinks['default'] = links.split('"',1)[0]
            else:
                self.jsonImageLinks[f"image{counter}"] = links.split('"',1)[0]
            counter+=1
            print(links.split('"',1)[0])
        return self.jsonImageLinks
