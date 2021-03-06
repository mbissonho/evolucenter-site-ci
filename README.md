# Website Institucional com CodeIgniter

Projeto simples usado para demonstrar a utilização do framework PHP CodeIgniter 3.1.11, dentre outras tecnologias, para a criação de um website institucional.

[Demonstração](https://evolucenter-site.herokuapp.com)


## Para executar com Apache e PHP nativos:

1. Clone este repositório.

    `$ git clone https://github.com/mbissonho/evolucenter-site-ci`

2. Faça download do [CodeIgniter 3.1.11](https://github.com/bcit-ci/CodeIgniter/archive/3.1.11.zip).
  
3. Certifique-se que o `mod_rewrite` do Apache está habilitado.

4. Copie o repositório para `/var/www/html` (ou para o path configurado para o Apache).

5. Extraia o zip do CodeIgniter e copie apenas a pasta `system` para o interior do repositório.

6. No arquivo .htaccess modifique a linha `SetEnv BASE_URL http://localhost` para `SetEnv BASE_URL http://localhost/evolucenter-site-ci/`.

7. Acesse o site em http://localhost/evolucenter-site-ci/.


## Para executar com Docker:

1. Clone este repositório.

    `$ git clone https://github.com/mbissonho/evolucenter-site-ci`

2. Execute os comandos:

    `$ docker-compose build --build-arg USER_ID=$(id -u) --build-arg GROUP_ID=$(id -g)`

    `$ docker-compose up`

3. Acesse o site em http://localhost/.

## Para editar os assets:

O projeto está utilizando o Task Runner GruntJS para automatizar algumas tarefas em tempo de desenvolvimento. O GruntJS possue diversas utilidades como exclusão de arquivos e diretórios, concatenação e minificação de arquivos .css e .js, "compila" sass para css, entre outras coisas.

O arquivo Gruntfile.js define todas as tarefas(tasks) que serão utilizadas no projeto e como elas vão funcionar. Para utilizar siga:

1. Instale as dependências.

    `$ npm i`

2. Para rodar a task que concatena, minifica e processa todos os assets.

    `$ grunt all`

3. Para rodar a task apenas associada ao sass e css.

    `$ grunt css`

4. Se quiser que o Grunt execute a task referente ao sass e css, retratada anteriormente, automaticamente
a medida que os arquivos sass (.scss) são modificados.

    `$ grunt watch`

### Para mais informações sobre as tecnologias:

-  [GruntJS](https://gruntjs.com/)

-  [SASS](https://sass-lang.com/)

## Ambiente:

- Kubuntu 18.04
- Apache/2.4.29
- PHP 7.2.24
- NodeJS 12.13.1
- NPM 6.12.1
- Docker 19.03.5