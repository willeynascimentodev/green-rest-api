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



## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
