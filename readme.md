## To install WordPress in Docker using Docker Compose

The services necessary are MySQL(8.0), WordPress and phpmyadmin (optional). Im using external MySQL

```yaml
services:
  wpdb:
    container_name: wordpress-mysql
    image: mysql:8.0
    restart: always
    command: '--default-authentication-plugin=mysql_native_password'
    environment:
      MYSQL_ROOT_PASSWORD: examplerootpass
      MYSQL_DATABASE: exampledb
      MYSQL_USER: exampleuser
      MYSQL_PASSWORD: examplepassword
    ports:
      - '3306:3306'
    volumes:
      - ./db_data:/var/lib/mysql
  wordpress:
    container_name: wordpress  
    image: wordpress:latest
    restart: always
    environment:
      WORDPRESS_DB_NAME: exampledb
      WORDPRESS_DB_USER: exampleuser
      WORDPRESS_DB_PASSWORD: examplepassword
      WORDPRESS_DB_HOST: wpdb
    ports:
      - "80:80"
    depends_on:
      - wpdb
    volumes:
      ["./wp_data:/var/www/html"]
  phpmyadmin:
    container_name: wordpress-pma  
    image: phpmyadmin:latest
    restart: always
    environment:
      PMA_PORT: 3306
      PMA_HOST: wpdb
    ports:
      - "8000:80"
    depends_on:
      - wpdb
volumes:
  db_data:
  wp_data:

```