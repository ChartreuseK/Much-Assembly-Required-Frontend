# Much-Assembly-Required-Frontend
Files for https://muchassemblyrequired.com/ frontend.

Requires a PHP environnment and a MySQL server (Database installation script: [database.sql](https://github.com/simon987/Much-Assembly-Required-Frontend/blob/master/database.sql)).

Easiest way to configure the database:
```bash
$ pwd
~/Much-Assembly-Required-Frontend/
$ mysql -u root -p
Enter password:  # type your MySQL root user password

MariaDB [(none)]>
MariaDB [(none)]> CREATE DATABASE mar;
MariaDB [(none)]> GRANT ALL PRIVILEGES ON mar.* to 'mar'@'localhost' identified by 'mar';
MariaDB [(none)]> FLUSH PRIVILEGES;
MariaDB [(none)]> USE mar;
MariaDB [mar]> \. database.sql
MariaDB [(none)]> exit
Bye
$ # if '\. database.sql' failed you were not in the right directory. make sure you are in the repo root directory
$ # before running these commands
```
Make sure to change the configuration in /include/config.php.    
> Tough if you used the snippet above there is nothing to change (except the title if you want)

More information about the game [here.](https://github.com/simon987/Much-Assembly-Required)   
HTML template by ajlkn  
Pixel art for the 'Factory' sprite by harveydentmd   
