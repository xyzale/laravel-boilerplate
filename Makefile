start:
	docker-compose up

stop:
	docker-compose down

laravel-bash:
	docker exec -it laravelweb bash

install:
	docker exec -i laravelweb composer install

bash:
	docker exec -it laravelweb bash

composer-install:
	docker exec -i laravelweb composer install

migrate:
	docker exec -i laravelweb php artisan migrate
