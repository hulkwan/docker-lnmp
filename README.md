# docker-lnmp
docker lnmp
build docker with separate Dockerfile
# build php image
docker build --tag [php] -f [php/Dockerfile] .
# build nginx image
docker build --tag [nginx] -f [nginx/Dockerfile] .
