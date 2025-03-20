Usando MailPint no projeto para verificação do email:

docker ps -a
docker stop mailpit
docker rm mailpit
docker run -d -p 8025:8025 -p 1025:1025 --name mailpit axllent/mailpit
URL: http://localhost:8025
