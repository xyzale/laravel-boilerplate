start:
	docker-compose up

stop:
	docker-compose down

laravel-bash:
	docker exec -it laravelweb bash

install:
	docker exec -i laravelweb composer install
