start:
	docker-compose up
stop:
	docker-compose down
bash:
	docker exec -it laravelweb bash
composer-install:
	docker exec -i laravelweb composer install
migrate:
	docker exec -i laravelweb php artisan migrate
