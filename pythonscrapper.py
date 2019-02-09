import requests
from bs4 import BeautifulSoup
import re
#This is the main class which will do every thing
class Scrap:
    def __init__(self,url):
        self.request = requests.get(url)
    def content(self):
            self.filter1 = self.request.text.split('IMPORTANT LINK',1)[1]
            self.filter2 = self.filter1.split('<tr>',1)[1]
            self.filter3 = self.filter2.split('</tbody>',1)[0]
            print(self.filter3)
