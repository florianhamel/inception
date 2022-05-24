all:
	docker-compose -f ./srcs/docker-compose.yml up --force-recreate --build -d

down:
	docker-compose -f ./srcs/docker-compose.yml down
	docker-compose -f ./srcs/docker-compose.yml rm -f

re: down all
