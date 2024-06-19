# Mini plataforma de Ecommerce no Open Laravel Week
Este projeto será uma api de plataforma de comércio eletrônico construída com Laravel 11, um framework PHP, utilizando MySQL para gerenciamento de banco de dados, Redis para cache e Minio para armazenamento de objetos.

É uma projeto dedicada exclusivamente para vendas onlines de qualquer tipo de produto, oferecendo alguns recursos essenciais para uma experiência de venda simples.

## Pré-requisitos
Antes de começar a usar este projeto, é necessário ter o seguinte configurado em seu ambiente de desenvolvimento:

- PHP (versão 8.2 ou superior)
- Composer 2
- Laravel (versão 11.x)
- Banco de dados MySQL
- Docker
- Docker-Compose

## Instalação

Siga as etapas abaixo para configurar o projeto em seu ambiente local:

1. Clone este repositório para sua máquina local:

```
git clone https://github.com/RayconLima/ecommerce-olw.git
```

2. Navegue até o diretório do projeto:

```
cd ecommerce-olw
```

3. Crie um arquivo `.env` na raiz do projeto e configure-o com as informações do seu ambiente, incluindo as credenciais do banco de dados. 

4. Inicie o servidor de desenvolvimento com os containers do docker. usando o comando pela primeira vez
```
./vendor/bin/sail up -d
```

5. Acesse o container da aplicação laravel
```
./vendor/bin/sail bash
```

### Dentro do container
6. Instale as dependências do Composer com o comando:

```
./vendor/bin/sail composer install
```

5. Gere a chave de aplicativo Laravel:

```
./vendor/bin/sail artisan key:generate
```
6. Execute as migrações do banco de dados para criar as tabelas necessárias:

```
./vendor/bin/sail artisan migrate
```

7. Se necessário, execute os *seeders* para preencher o banco de dados com dados de exemplo:

```
./vendor/bin/sail artisan db:seed
```


O projeto estará acessível em `http://localhost:83/api`.
