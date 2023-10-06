# BarHub
## Requirements
Run via docker:
- docker

Run via php cli:
- php 8.1 -> [how to install](https://www.geeksforgeeks.org/how-to-install-php-in-windows-10/)
- composer -> [download](https://getcomposer.org/download/)

## Run/develop with docker
1. Create a `.env` file by copying the `.env.example` file
```bash
cp .env.example .env
```
2. Edit the created `.env` file and set the database user and password:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=         <-- SET THIS (example: barhub)
DB_PASSWORD=         <-- SET THIS (example: 1234)
```
3. Start the containers
```bash
docker compose up
```
4. Open the browser and navigate to the page at `http://localhost:8000`
5. You may be prompted to generate a key and apply migrations.
6. (optional) Seed database with example data:
```bash
docker compose exec app php artisan db:seed
```
