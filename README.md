# Primeiro exemplo

DockerFile - arquivo que contém os comandos de deploy
index.html - arquivo com o código-fonte
quadro.jpg - imagem do quadro feito em sala de aula contendo o exemplo 

# Comandos:

```
docker build -t nginx .
docker run -dp 80:80
docker exec -it container_id /bin/bash

docker login -u usuario
docker tag nginx usuario/nginx
docker push nginx usuario/nginx
```
