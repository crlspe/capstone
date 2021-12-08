### Source-Code Summary
- The bulk of the work done for this project is located on the directory "ceon-theme/" (Custom WordPress theme built for CEON). 
- By downloading the zip file of this repository you will have access to containing the code base of this theme.
- In the WordPress intallation please navigate to /wp-content/themes/ and place the theme folder in it. 

# Project Website URL (GitHub Pages)
https://github.com/crlspe/capstone


# Capstone - Source-code WIKI  

## Installing Wordpress Environment Locally
### I. Option 1: [Manual Installation](https://github.com/crlspe/capstone/blob/master/docs/installation/manual.md)

       
### II. Option 2: [Docker Containers Installation](https://github.com/crlspe/capstone/blob/master/docs/installation/docker.md)
   

-------------------------------
## Setting Up the CEON Template 
### I. Option 1: Manual (expert)
   1. Copy the `ceon-theme` folder in the `wp-content/themes/` of the WordPress installation
   2. Login into the WordPress Admin Dashboard
   3. Select the option "Appearance" and then "Themes" in the left sidebar menu.
   4. Activate the CEON Netweavers Theme.
   5. To Restore the required WordPress Data restore the MySQL Database Dump of the repo folder `database` 
   6. Run `mysql -u root -p password < ksu_ceon_netweavers_mysqldump_11-29-21.sql`
   7. Install the following Plugins
        - Modern Events Calendar Lite by Webnus
        - Advanced Custom Fields by Delicious Brains
        - Custom Post Type UI by WebDevStudios (Optional but recommended)
        - Forminator by WPMU DEV
        
   
### II. Option 2: Restore the Latest Backup (recommended)
   1. Login into the WordPress Admin Dashboard
   2. Install and Activate the plugin "All-in-One WP Migration" by ServMask 
   3. Select "Import" under the All-in-One WP Migration menu option.
   4. Import the latest backup in the folder "backups"
   5. WordPress `User: wordpress Password: wordpress` 
   6. Please update the password after installation.
