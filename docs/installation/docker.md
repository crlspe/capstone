## WordPress - Docker Compose - Installation 
1. Install docker from https://docs.docker.com/engine/install/
2. Download the [docker-compose.yml](https://github.com/crlspe/capstone/blob/master/docs/installation/docker-compose.yml) file, and place in the local directory. This directory will contain the WrodPress files afeter installation. 
3. Run in the terminal "docker-compose up" in the same directory of the .yml file
4. This will setup automatically the wordpress environment and run it.
5. Access the Wordpress environment (Users and passwords can be updated in the .yml file)


## Results 

|Service|Url|User|Password|Database Name|
|-------|-------|-----|-----|-----|
|MySql Database||root|password||
|||wordpress|wordpress|wordpress|
|phpmyadmin|http://localhost:8080||||
|Wordpress|http://localhost:8000|wordpress|wordpress||

