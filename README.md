# Laravel-Microservice-Email
Micro-Email - Laravel Microservices Integrado RabbitMQ - Dockerizado - nginx:alpine - redis:latest

Ler e executar com atenção os Requisitos

## Requisitos
Este micro e-mail depende do micro_01, portanto, primeiramente subir o [micro-01](https://github.com/dompossebon/Laravel-Microservice-RabbitMQ-01)
E também depende do micro_02, portanto, também subir o [micro-02](https://github.com/dompossebon/Laravel-Microservice-RabbitMQ-02)

### Instalação
Clonar Projeto
```sh
git clone https://github.com/dompossebon/-Laravel-Microservice-Email.git micro-mail
```

Acessar o projeto
```sh
cd micro-mail
```

Criar o Arquivo .env
```sh
cp .env.example .env
```

Atualizar as variáveis de ambiente do arquivo .env
```dosini
APP_URL=http://localhost:8005

CACHE_DRIVER=redis
QUEUE_CONNECTION=rabbitmq
SESSION_DRIVER=redis

REDIS_HOST=redis_micro_mail
REDIS_PASSWORD=null
REDIS_PORT=6379
```

Subir os containers do projeto
```sh
docker-compose up -d
```

Acessar o container
```sh
docker-compose exec micro_mail bash
```

Instalar as dependências do projeto
```sh
composer install
```

Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

Acessar o projeto
[http://localhost:8005](http://localhost:8005)
