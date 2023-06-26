dev-deploy:
	docker compose -f docker-compose.dev.yaml up --build

test-deploy:
	#git checkout php
	docker compose -f docker-compose.test.yaml up -d --build

ssl-certificate:
	docker exec -it erp-app certbot --apache -d erp.droosbarmaja.com -m zaghrat.ahmed@gmail.com --agree-tos -v -n