all:
	echo "password" | sudo -S docker-compose -f ./srcs/docker-compose.yml up --force-recreate --build -d

down:
	echo "password" | sudo -S docker-compose -f ./srcs/docker-compose.yml down
	echo "password" | sudo -S docker-compose -f ./srcs/docker-compose.yml rm -f

re: down all
