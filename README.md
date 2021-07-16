# Consulta CNPJ Api - Laravel

Pré requisitos
---
 * Composer instalado.
 * PHP 5.6 ou superior.



## Instalando projeto
Para instalar os pacotes do projeto, execute:
~~~composer
	composer install
~~~


Depois basta executar o comando:

~~~text
	php artisan serve 
~~~

## Rodando no aplicação no Docker
Criando container Docker
~~~~
docker build -t consulta-cnpj/docker-laravel .
~~~~
Executando API via Docker
~~~~
docker run -it -p 8000:8000 consulta-cnpj/docker-laravel
~~~~
