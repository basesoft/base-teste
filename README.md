# teste_rest
Esta é uma Aplicação PHP 7.3.11 com Laravel 2.2.0 (Composer 1.9.1)


 #Para levantar esta aplicação
Baixe a pasta "teste_rest" para o seu diretório de soluções PHP.

No seu MySQL Administrator, crie uma base da dados e um usuário conforme os  parametros indicados na pagina ".env".

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=administrator
DB_USERNAME=base
DB_PASSWORD=segredo


Em seguida, execute: php artisan migrate para serem criadas as tabelas do DB.

Com as tabelas criadas, execute: php artisan db:seed para que a tabela "properties" seja populada randomicamente.

Execute o comando: php artisan serve para levantar a aplicação.

No navegador, vá em http://localhost:8000/api/properties para visualizar os dados da base, paginados de 10 em 10 itens.

Acrescentando-se à URL o sufixo "?district=<seu_texto_filtro>" filtramos a pesquisa apenas com os Bairros iguais ao <seu_texto_filtro>.

Acrescentando-se à URL o sufixo "?municipio=<seu_texto_filtro>" filtramos a pesquisa apenas com os Municípios iguais ao <seu_texto_filtro>.

Acrescentando-se à URL o sufixo "?page=3" traremos apenas os itens da página 3, e assim sucessivamente.

Acrescentando-se à URL o sufixo "?sort=asc" traremos os itens ordenados por Bairro e Município, de forma crescente e se "?sort=desc", os itens virão ordenados por Bairro e Município, de forma decrescente.

Todos os filtros funcionaram de forma conjunta, acrescentando-se "&" entre eles.


## Realizando o CRUD
Com a ajuda do POSTMAN, conseguimos vizualizar que a URL http://localhost:8000/api/properties/, em POST, e com os seguintes parametros, insere dados na Base e nos trazem a mensagem de "Imóvel criado com sucesso ! "

 


Com a URL http://localhost:8000/api/properties/23, em GET, visualizamos os dados do ID=23.
 

Com a URL http://localhost:8000/api/properties/35, em PUT, editamos os parametros selecionados e recebemos a mensagem resposta "Imóvel atualizado com sucesso !"
 

Com a URL http://localhost:8000/api/properties/9, em DELETE, conseguimo excluir, do banco, a linha com ID = 9, e recebemos a mensagem resposta "Imóvel no Endereço: 58259 Goldner Circles Apt. 742\nBartolettiview, PA 37373-8350 foi removido com sucesso !"
 



Obrigado!

Marcio Cunha
(21)9 8662-2088
