# docker-lnmp
docker lnmp
build docker with separate Dockerfile
### build image
1. docker build --tag [php] -f [php/Dockerfile] .
2. docker build --tag [nginx] -f [nginx/Dockerfile] .
### build container
1. build php container

docker run --name [php] -it -d -p [9000:9000] [-v E:\wamp\web\project:/usr/local/nginx/html -v E:\wamp\web\docker\phpext:/tmp/phpext -v E:\wamp\web\docker\conf\php:/usr/local/php/config] [php]
2. build nginx container

docker run --name [nginx] -it -d -p [80:80] [-v E:\wamp\web\project:/usr/local/nginx/html -v E:\wamp\web\docker\conf\nginx:/usr/local/nginx/conf/vhost] --link [php] [nginx]
3. exec container

docker exec -it [nginx] /bin/bash
