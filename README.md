#API de lutadores


Nessa api eu criei 10000 lutadores para a 12412451ª temporada de Round 6!

## Installação

Utilize o gerenciador de pacotes [composer](https://getcomposer.org/) para instalar as dependencias do projeto.

```bash
composer install
```

Em seguida crie uma chave de criptografia

```bash
php artisan key:generate
```

Crie o link simbolico entre a pasta public e storage

```bash
php artisan storage:link
```

Crie e popule o banco de dados

```bash
php artisan migrate --seed
```

## Usagem

Instancie a aplicação para poder fazer requisições
```bash
php artisan serve
```

Exemplo de requisição
```bash
http://127.0.0.1:8000/api/get-fighters/{numero_de_lutadores}
```

## Contribuindo

🐒

## Licença

[NENHUMA](https://www.youtube.com/watch?v=dQw4w9WgXcQ)

