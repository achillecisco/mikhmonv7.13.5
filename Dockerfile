FROM php:7.4-cli-alpine
RUN apk update
RUN apk add git
RUN git clone https://github.com/achillecisco/mikhmonv7 src
WORKDIR src
ENTRYPOINT ["php"]
CMD ["-S", "0.0.0.0:80", "-t", "/src/src/"]