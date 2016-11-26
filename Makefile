.PHONY: build
build: docker-image

delete:
	docker rmi -f vintage:latest

docker-image:
	docker build -t vintage:latest .