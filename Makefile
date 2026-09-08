SHELL := /bin/bash

COMPOSE_PROJECT_NAME=$(subst .,,$(notdir $(patsubst %/,%,$(CURDIR))))
PORT=10022

.PHONY: build push

build: 
	docker build -t davideponzini/www_apache_utils:latest .

run: build
	docker run -it --rm -p $(PORT):80 davideponzini/www_apache_utils:latest

push:
	docker push davideponzini/www_apache_utils:latest

