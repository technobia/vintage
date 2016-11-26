.PHONY: build delete
build: docker-image

delete:
	docker rmi vintage:latest

docker-image:
	docker build -t vintage:latest .