FROM mariadb:latest

RUN apt update -y && apt install php-pdo-mysql -y