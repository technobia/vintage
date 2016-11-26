#!/usr/bin/env bash

/usr/bin/mysqld_safe &
sleep 5
mysql -u root vintage < vintage.sql
