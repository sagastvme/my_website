CONTAINER_NAME=my-website
LOCAL_PORT=82
CONTAINER_PORT=80

run:
	docker run -d -p $(LOCAL_PORT):$(CONTAINER_PORT) --name $(CONTAINER_NAME) $(CONTAINER_NAME)

build:
	docker build -t $(CONTAINER_NAME) .
