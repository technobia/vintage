#!/usr/bin/env bash

make build
docker-compose -f docker-compose.yml up
docker cp vintage.sql vintage_mysql_1:/
docker cp init_db.sh vintage_mysql_1:/
docker exec vintage_mysql_1 /bin/bash init_db.sh