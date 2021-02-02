<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Aplicação de cadastro de produtos em Laravel

Essa aplicação é basicamente um exemplo simples de **CRUD** com **Login** feito com o **Laravel Framework** para apresentar a ferramenta aos alunos do curso de férias: "**PHP e Laravel**", ministrado no semestre 2021.1 na **UNIME de Lauro de Freitas**.

### Recursos utilizados

- Migrations
- Factories
- Seeders
- Named Routes
- Resource Routes
- Validação com Requests personalizados
- Deploy no Heroku

## Como instalar a aplicação

#### Passo 1:

Uma vez que você tenha o GIT instalado em seu computador, realize um clone do repositório.

    git clone https://github.com/PHPauloReis/unidev-exemplo-crud-login.git

#### Passo 2:

Realize a instalação das dependências à partir do Composer

    composer update

#### Passo 3:

Crie seu arquivo .env usando como base o arquivo .env.exemple que consta no repositório. Basicamente você só precisará definir as informações do seu banco de dados

    DB_CONNECTION=mysql  
    DB_HOST=127.0.0.1  
    DB_PORT=3306  
    DB_DATABASE=nome_do_seu_banco_de_dados
    DB_USERNAME=nome_do_seu_usuario_do_banco_de_dados
    DB_PASSWORD=senha_do_seu_usuario_do_banco_de_dados

#### Passo 4:

Gere uma chave APP_KEY para a sua aplicação usando o utilitário Artisan

    php artisan key:generate

#### Passo 5:

Realize a migração do seu banco de dados

    php artisan migrate


> Opcionalmente você pode querer alimentar sua aplicação com dados fakes. Para isso utilize o comando db:seed
> `php artisan db:seed`

## Licença de uso

Tanto o Laravel quanto essa aplicação são softwares open-source licenciados sob a [Licença MIT](https://opensource.org/licenses/MIT).
# Unidev
