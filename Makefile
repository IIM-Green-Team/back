install:
	docker-compose up -d 
	docker-compose ps 
	docker-compose exec php composer install

composer-update:
	docker-compose php composer update

composer-install:
	docker-compose php composer install
