FROM registry.kevingaab.de:5000/base:web AS web
RUN rm -rf /var/www/html
#Copy Files
COPY ./web/ /var/www/html/
#Fix permissions
RUN chown www-data:www-data -R /var/www/html

EXPOSE 80
ENTRYPOINT ["apachectl","-D","FOREGROUND" ]
