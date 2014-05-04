DROP DATABASE IF EXISTS AceTraining;
CREATE DATABASE AceTraining;

DROP TABLE IF EXISTS USERS;
DROP TABLE IF EXISTS USER_INFO;

CREATE USER 'register'@'localhost' IDENTIFIED BY 'register';
CREATE USER 'student'@'localhost' IDENTIFIED BY 'student';
CREATE USER 'tutor'@'localhost' IDENTIFIED BY 'tutor';
CREATE USER 'administrator'@'localhost' IDENTIFIED BY 'administrator';

CREATE TABLE USERS (
    id int not null auto_increment,
    username varchar(255),
    password varchar(255),
    category varchar(20),
    PRIMARY KEY (id),
    UNIQUE (username)
) ENGINE=InnoDB;

CREATE TABLE USER_INFO (
	id int not null auto_increment, 
	username varchar(255),
	address_1 varchar(255),
	address_2 varchar(255),
	city varchar(255),
	postcode varchar(20), 
	landline varchar(20),
	cellphone varchar(20),
	email varchar(255)
) ENGINE=InnoDB;


CREATE INDEX ID_INDEX ON USERS (ID);
CREATE INDEX USERNAME_INDEX ON USERS (USERNAME);

GRANT INSERT ON AceTraining.USERS to 'register'@'localhost';
FLUSH PRIVILEGES;
