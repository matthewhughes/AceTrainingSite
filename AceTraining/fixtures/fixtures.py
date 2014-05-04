#!/usr/bin/env python

import pymysql

conn = pymysql.connect(host='localhost', port=8889, user='root', passwd='root', db='AceTraining', autocommit=True)

dropUserInfoTable = 'DROP TABLE IF EXISTS user_info'

dbUserInfoTable = ''' CREATE TABLE USER_INFO(
	id int, 
	username varchar(255) not null, 
	forename varchar(50),
	surname varchar(50),
	address_1 varchar(255), 
	address_2 varchar(255), 
	phone_number varchar(20), 
	email_address varchar(255),
	primary key (id) 
	)
'''

dropUserTable = 'DROP TABLE IF EXISTS USERS'

dbUsersTable = ''' CREATE TABLE USERS (
	id int auto_increment,
	username varchar(255) not null,
	password varchar(255) not null,
	category varchar(30),
	PRIMARY KEY (username),
	FOREIGN KEY (id) 
    REFERENCES user_info (id)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    FOREIGN KEY (username) 
    REFERENCES USER_INFO (username)
    ON DELETE CASCADE
    ON UPDATE CASCADE
	)
'''

def main():
	print conn
	cursor = conn.cursor()
	cursor.execute(dropUserInfoTable)
	cursor.execute(dbUserInfoTable)
	cursor.execute(dropUserTable)
	cursor.execute(dbUsersTable)


if __name__ == '__main__':
	main()