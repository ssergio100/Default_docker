Estrutura basica para rodar uma aplica��o no docker

Containers:
PHP 
MYSQL 
WEBSERVER NGINX
PHP MYADMIN

Como usar: 
1-Renomeie a pasta com o nome do projeto;
2-Adicione os arquivos. Se desejar colocar os arquivos dentro de um outro diret�rio, tipo 'public' por ex
altere o arquivo nginx/conf.d , na linha 6 temos que ficaria  root /var/www/public/;
3- Acesso o diretorio e digite:
   docker-compose build
   docker-compose up -d

Senhas do Mysql est�o configuradas no docker-compose.yml



