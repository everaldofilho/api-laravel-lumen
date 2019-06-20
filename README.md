# API com Laravel (Lumen)
Criado este projeto somente para testar e conhecer melhor como funciona desenvolvimento de APIs em laravel

## Requisitos
- PHP 7.^
- Composer

## Estrutura de pastas

- cli -> Comandos sh atalhos
- api -> Framework Laravel

## Instalação

    Execute todos os comandos abaixo dentro da pasta api

Instalação dos pacotes:

````composer install````

Subir as migrações junto com os dados fake:

````php artisan migrate:refresh --seed````

Subindo um servidor com php

````php -S localhost:8000 -t public/````

## Testando API

    http://localhost:8000/api/login
        - email: email@email.com
        - senha: 123

Deve retorna o token.