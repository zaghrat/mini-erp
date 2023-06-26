dev-deploy:
	docker compose -f docker-compose.dev.yaml up --build


build:
	git checkout php
	rm -rf app/vendor
	docker compose -f docker-compose.test.yaml up -d --build

ssl-certificate:
	docker exec -it erp-app certbot --apache -d erp.droosbarmaja.com -m zaghrat.ahmed@gmail.com --agree-tos -v -n

test-deploy:
	make build
	docker exec -it erp-app composer install
	make ssl-certificate