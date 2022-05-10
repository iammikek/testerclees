/* create databases */
CREATE DATABASE IF NOT EXISTS `dusk_test`;

create user 'sail' identified by 'ChangeMe' password expire;

/* give access to database */
GRANT ALL PRIVILEGES ON dusk_test.* TO 'sail'@'%';
