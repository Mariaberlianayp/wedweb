# wedweb

### Deploy using docker

to start using docker, you must download docker container manager first.
#### On Ubuntu
```bash
sudo apt-get update
sudo apt-get install docker.io
sudo apt-get install docker-compose
```

create .env file, you can modifiy env.sh
```bash
chmod +x env.sh
./env.sh
```
and now you will see .env file that contain the value of environment variable on this project. you can make your own env variable by modify env.sh with format like the value on .env.example

## Database Table

create table on database named ucapan that contain 3 column

| id (int) | name (varchar) | message (text) |
|----------|----------------|----------------|
| 1        | name1          | message1       |
| 2        | name2          | message2       |

## Docker Compose

```bash
docker-compose build
docker-compose up -d
```
you can also access phpmyadmin in port 8001, and import the database that located on 

```bash 
/data/ucapan.sql
```

### The web now running on your port number 80!
```bash
http://$your-ip
```

@copyright wedweb 2021