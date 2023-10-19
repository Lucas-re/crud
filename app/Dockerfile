FROM ubuntu:latest AS build

RUN apt-get update
RUN apt-get install php -y
COPY . .

RUN apt-get install postgres
