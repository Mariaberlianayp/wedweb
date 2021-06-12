# wedweb

### Deploy using docker

change $sname = "localhost" on php/db-conn.php to $sname = "mysql-server";

create table on database named ucapan and 3 column

| id (int) | name (varchar) | message (text) |
|----------|----------------|----------------|
| 1        | name1          | message1       |
| 2        | name2          | message2       |

## Docker Compose

```bash
docker-compose build
docker-compose up -d
```

@copyright wedweb 2021