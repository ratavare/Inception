COMPOSE_FILE := srcs/docker-compose.yml

up:
	mkdir -p data/db_vol data/wp_vol data/portainer_data
	docker-compose -f $(COMPOSE_FILE) up --build

stop:
	docker-compose -f $(COMPOSE_FILE) stop

down:
	docker-compose -f $(COMPOSE_FILE) down

clean:
	docker-compose -f $(COMPOSE_FILE) down --volumes --remove-orphans --rmi all
	sudo rm -rf data/

restart: stop up
