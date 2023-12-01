build:
	docker-compose build
up:
	docker-compose up -d
run:
	docker-compose exec app bash /tmp/up.sh
app-bash:
	docker-compose exec app bash
down:
	docker-compose down
stop:
	docker-compose stop
