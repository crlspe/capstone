### To View Our Code 
The bulk of the work done for this project was done on the custom template we built for CEON. You can find this template by downloading the zip file containing the code base (we will be turning in the zip file to d2l to make it convenient to view the codebase as well). Under the zip folder please navigate to /wp-content/themes/ceon-template/ to view the template files which makup the customizations to the ceon website. 

# GITHUB Repository 
https://github.com/crlspe/capstone

# Capstone - Source code WIKI  

## Installing The Wordpress Environment
### I. Option 1: Manual Install
    1. Follow the tutorial: 
       https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-20-04
### II. Using Docker
    1. Install docker from https://docs.docker.com/engine/install/
    2. Download the docker-compose.yml file, and place it in a directory
    3. Run in the terminal "docker-compose up" in the same directory of the .yml file
    4. This will setup automatically the wordpress environment and run it.
    5. Access the Wordpress environment (Users and passwords can be updated in the .yml file)

|Service|Url|User|Password|Database Name|
|-------|-------|-----|-----|-----|
|MySql Database||root|password||
|||wordpress|wordpress|wordpress|
|phpmyadmin|http://localhost:8080||||
|Wordpress|http://localhost:8000|wordpress|wordpress||

-------------------------------
## Setting Up the CEON Template 
### I. Option 1: Manual
   1. Copy the "ceon-template" folder in the "wp-content/themes/" of the WordPress installation
   2. Login into the WordPress Admin Dashboard
   3. Select the option "Appearance" and then "Themes" in the left sidebar menu.
   4. Activate the CEON Netweavers Theme.
   5. To Restore the required WordPress Data restore the MySQL Database Dump of the repo folder "mysqldumps" 
   6. Run "mysql -u root -p password < ksu_ceon_netweavers_mysqldump_11-29-21.sql" 
   
### II. Option 2: Restore the Latest Backup
   1. Login into the WordPress Admin Dashboard
   2. Install and Activate the plugin "All-in-One WP Migration" by ServMask 
   3. Select "Import" under the All-in-One WP Migration menu option.
   4. Import the file provided in the repo folder "full-backup"



