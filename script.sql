CREATE DATABASE loginExample

USE loginExample -- select created database

CREATE TABLE USERS( 
  LOGIN VARCHAR(50), 
  NAME VARCHAR(150), 
  PASSWORD VARCHAR(100), 
  ENABLE TINYINT(1)
);

INSERT INTO USERS (LOGIN, NAME, PASSWORD, ENABLE) VALUES ('admin', 'Administrator', 'admin', 1);