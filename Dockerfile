FROM vipinbihari/apana-result:latest
RUN apt-get update && apt-get install -y
RUN cd /var/www/html/ && git clone https://github.com/vipinbihari/apana-result.git
RUN mv /var/www/html/apana-result/* /var/www/html/ && rm -r /var/www/html/apana-result/
CMD [ "sh", "-c", "service apache2 start && service mysql start && service cron start && \
php -f /var/www/html/phpScrapper/mainInsert.php && python3 /var/www/html/pythonScrapper/scrap.py 3 40 && /bin/bash " ]
