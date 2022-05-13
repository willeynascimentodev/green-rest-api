## Passos de Instalação

Rodar no terminal: Composer Update
Gerar .env com credenciais  do banco de dados
Rodar no terminal: php artisan migrate
Rodar no terminal: php artisan db:seed
Rodar no terminal: php artisan key:generate
Rodar no terminal: php artisan jwt:secret


## Rotas da API

http://127.0.0.1:8000/api/users/ (utilizar o access_token retornado e adicionar como Bearer Token nas outras rotas).


OBS: Por segurança, as seguintes rotas só funcionarão após autenticação.

(GET) http://127.0.0.1:8000/api/residuos/ 

(GET) http://127.0.0.1:8000/api/residuos/id

(PUT) http://127.0.0.1:8000/api/residuos/id

(DELETE) http://127.0.0.1:8000/api/residuos/id

(POST) http://127.0.0.1:8000/api/residuos/

Para a última rota, adicionar caminho completo do arquivo com o atributo arquivo. Exemplo: 

{ "arquivo":  "C:/Users/Willey/Downloads/planilha_residuos.xlsx" }



## Para os testes automatizados

1 - Baixar as collections para o postman no seguinte link:

**[Clique aqui](https://drive.google.com/file/d/1vfK8s-zry3pMyeIBHh2emHbNAuv55aN4/view?usp=sharing)**

2 - Adicionar nas variáveis globais do postman o caminho absolute do arquivo com o nome: import_file_name (foi a solução para alimentar via API sem usar interface).

3 - Desmarcar a opção Keep variable values (Para resetar o token de autenticação na próxima iteração de testes)


