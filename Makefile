dev-deploy:
	docker compose -f docker-compose.dev.yaml up --build

test-deploy:
	docker compose -f docker-compose.test.yaml up --build