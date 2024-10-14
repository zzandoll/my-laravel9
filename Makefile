up:
	docker-compose up -d
down:
	docker-compose down
ps:
	docker-compose ps
build:
	docker-compose up -d --build
install:
	composer create-project --prefer-dist laravel/laravel:^8.4 app
app-laravel:
	docker-compose exec app bash
mysql-laravel:
	docker-compose exec mysql bash
web-laravel:
	docker-compose exec web bash
migrate:
	docker-compose exec app php app/artisan migrate
