FROM ubuntu
RUN  apt-get update && apt-get install -yq git gcc make re2c php7.0 php7.0-json php7.0-dev libpcre3-dev sudo

RUN git clone https://github.com/phalcon/zephir /opt/zephir

RUN cd /opt/zephir && ./install -c
