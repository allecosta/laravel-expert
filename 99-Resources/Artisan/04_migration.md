# Migration 

- make:controller -> Cria um novo arquivo de migração para o banco de dados. 

*php artisan make:migration create_users_table*

- Após a criação da migration e definição do script (campos da tabela), rodar o seguinte comando abaixo:

*php artisan migrate*
