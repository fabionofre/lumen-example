## Instalando o framework

Rode o comando: composer install

## Configurar o banco

Na raíz do projeto existe um arquivo .env, neste arquivo você configura o seu banco. Crie um database e coloque o nome dele em DB_DATABASE.

## Gerar Tabelas

Neste exemplo fiz a migration para gerar a tabela receita. Comando: php artisan migrate

## Subindo o servidor

Caso tenha php 7: php -S localhost:8000 -t public

Caso não tenha: php artisan serve

## Explicando comandos/diretórios essenciais

O diretório database/migrations guarda nossas migrations que servem para versionar nosso banco.

Comando para criar uma migration: php artisan make:migration nome_migration

Comandos para criar colunas neste link: https://laravel.com/docs/5.5/migrations

O diretório app/Http/Controllers guarda os controladores, no caso fiz um exemplo de um controlador para API Restful chamado ReceitaController, para criar outro CTRL + C E CTRL + V. Diferente do laravel o Lúmen(que é micro-framework) não possui comandos que agilizem isso.

As models podem ser encontradas soltas no diretório app, pode ter como exemplo o arquivo Receita.php, coloque o nome de todas as colunas no array $fillable com exceção das que serão escondidas no request, uma senha por exemplo deve ser guardada no array $hidden.

Por último temos a configuração de nossas rotas, no arquivo route/web.php, o arquivo está comentado, vai lá ler xD