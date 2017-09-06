# PHP-Login-Example

A simple PHP + MySQL login example

### PHP development environment
- <a href="https://www.apachefriends.org/index.html">XAMPP</a>
- <a href="https://www.mamp.info/en/">MAMP</a>

### SQL Script
CREATE DATABASE loginExample

USE loginExample -- select created database

CREATE TABLE USERS( </br>
&emsp;&emsp;LOGIN VARCHAR(50), </br>
&emsp;&emsp;NAME VARCHAR(150), </br>
&emsp;&emsp;PASSWORD VARCHAR(100), </br>
&emsp;&emsp;ENABLE TINYINT(1)</br>
);

INSERT INTO USERS (LOGIN, NAME, PASSWORD, ENABLE) VALUES ('admin', 'Administrator', 'admin', 1);

### Data
- user: admin
- password: admin

