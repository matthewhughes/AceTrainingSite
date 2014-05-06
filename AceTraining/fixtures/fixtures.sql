DROP TABLE IF EXISTS USERS;
DROP TABLE IF EXISTS USER_INFO;
DROP TABLE IF EXISTS COURSE;
DROP TABLE IF EXISTS REGISTEREDUSERS;

FLUSH PRIVILEGES;

DROP USER 'register'@'localhost';
DROP USER 'student'@'localhost';
DROP USER 'tutor'@'localhost';
DROP USER 'administrator'@'localhost';

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
    category varchar(20),
	address_1 varchar(255),
	address_2 varchar(255),
	city varchar(255),
	postcode varchar(20), 
	landline varchar(20),
	cellphone varchar(20),
	email varchar(255),
    PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE COURSE (
    course_id int not null auto_increment,
    course_name varchar(255),
    tutor_name varchar(255),
    description text,
    room_number varchar(10),
    UNIQUE (course_name),
    primary key(course_id)
) ENGINE=InnoDB;

CREATE TABLE REGISTEREDUSERS(
    id int not null auto_increment,
    student_id varchar(255),
    course_name varchar(255),
    approved BOOLEAN NOT NULL DEFAULT 0,
    PRIMARY KEY (id)
) ENGINE=InnoDB;

INSERT INTO USERS (username, password, category) VALUES ('student', 'password', 'student');
INSERT INTO USERS (username, password, category) VALUES ('administrator', 'password', 'administrator');
INSERT INTO USERS (username, password, category) VALUES ('tutor', 'password', 'tutor');
INSERT INTO USER_INFO(username, category) values ('student', 'student');
INSERT INTO USER_INFO(username, category) values ('administrator', 'administrator');
INSERT INTO USER_INFO(username, category) values ('tutor', 'tutor');

INSERT INTO USERS (username, password) VALUES ('test1', 'password');
INSERT INTO USERS (username, password) VALUES ('test2', 'password');
INSERT INTO USERS (username, password) VALUES ('test3', 'password');
INSERT INTO COURSE (course_name, tutor_name, description, room_number) values ('Databases', 'tutor', 'Databases and stuff', 'FML111');
INSERT INTO COURSE (course_name, tutor_name, description, room_number) values ('Computers', 'tutor', 'Computers and stuff', 'FML111');



CREATE INDEX ID_INDEX ON USERS (ID);
CREATE INDEX USERNAME_INDEX ON USERS (USERNAME);

GRANT INSERT ON AceTraining.USERS to 'register'@'localhost';
GRANT SELECT ON AceTraining.USERS to 'register'@'localhost';

FLUSH PRIVILEGES;
