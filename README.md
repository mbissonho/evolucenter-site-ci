# Website Institucional com CodeIgniter

Projeto simples usado para demonstrar a utilização do framework PHP CodeIgniter 3.1.11, dentre outras tecnologias, para a criação de um website institucional.

[Demonstração](https://evolucenter-site.herokuapp.com)

## Para executar:

1. Clone este repositório.

    `$ git clone https://github.com/mbissonho/evolucenter-site-ci`

2. Faça download do [CodeIgniter 3.1.11](https://github.com/bcit-ci/CodeIgniter/archive/3.1.11.zip).

3. Certifique-se que o `mod_rewrite` do Apache está habilitado.

4. Copie o repositório para `/var/www/html` (ou para o path configurado para o Apache).

5. Extraia o zip do CodeIgniter e copie apenas a pasta `system` para o interior do repositório.

6. Acesse o site em http://localhost/evolucenter-site-ci/.

## Para editar os assets:

O projeto está utilizando Task Runner GruntJS para automatizar algumas tarefas em tempo de desenvolvimento. O GruntJS possue diversas utilidades como exclusão de arquivos e diretórios, concatenação e minificação de arquivos .css e .js, "compila" sass para css, entre outras coisas.
O arquivo Gruntfile.js define todas as tarefas(tasks) que serão utilizadas no projeto e como elas vão funcionar. Para utilizar siga:


1. Instale as dependências.

    `$ npm i`

2. Para rodar a task que concatena, minifica e processa todos os assets.

    `$ grunt all`

3. Para rodar a task apenas associado ao sass e css.

    `$ grunt css`

4. Se quiser que o Grunt execute a última task automaticamente 
a medida o sass (.scss) é modificado.

    `$ grunt watch`

### Para mais informações sobre as tecnologias:

- [GruntJS](https://gruntjs.com/)
- [SASS](https://sass-lang.com/)

## Ambiente:

- Kubuntu 18.04
- Apache/2.4.29
- PHP 7.2.24

 