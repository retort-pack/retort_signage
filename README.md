# retort_signage
## Operations

### Setting Database.
 - connect to MySQL / MariaDB
 - create database retort_signage;
 - grant all privileges on retort_signage.* to 'USER_NAME'@'%' identigied by 'PASSWORD';

### Restore Database
 - mysql -u USER_NAME -p beer_menu < retort_signage_dump.sql

### Edit Credential
 - You have to Edit 'html/batch/credential.php.sample' and Move anywhere.
 - move to anywhere. You can ignore DocumentRoot.
 - You have to Edit 'html/batch/connect_to_db.php'. Be careful, Your Base Directory is 'html'.
