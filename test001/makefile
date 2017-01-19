
dev-start:
	docker run -d \
		-p 8080:80 \
		--name docker-php \
		-v "$$PWD":"/var/www/html" \
		docker.notil.us/dev/docker-php:7.0
dev-stop:
	docker rm -f docker-php || echo 'docker-php'
dev-restart: dev-stop dev-start

composer:
	docker run --rm \
		-v "$$PWD":"/app" \
		composer/composer:1.1 update
