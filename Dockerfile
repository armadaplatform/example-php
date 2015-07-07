FROM microservice_php
MAINTAINER Cerebro <cerebro@ganymede.eu>

ADD ./ /opt/example-php
RUN ln -s /opt/example-php /opt/www

EXPOSE 80
