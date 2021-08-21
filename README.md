# Capstone - Wiki 

## Installing Wordpress
### 1.  Manual Install
### 2. Using Docker
    1. Download the docker-compose.yml file, and place it in a directory
    2. Run `docker-compose -d` in the same directory of the .yml file
    3. This will setup automatically the wordpress environment and run it.
    4. Access the Wordpress environment (Users and passwords can be updated in the .yml file)
|Service|Url|User|Password|Database Name|
|-------|-------|-----|-----|-----|
|MySql Database||root|password||
|||wordpress|wordpress|wordpress|
|phpmyadmin|https://localhost:8080||||
|Wordpress|https://localhost:8000|wordpress|wordpress||


       
