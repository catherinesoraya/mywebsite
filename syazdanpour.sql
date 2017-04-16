

CREATE TABLE user (
email VARCHAR(32) NOT NULL PRIMARY KEY,
username VARCHAR(16) NOT NULL,
password VARCHAR(64) NOT NULL
);

CREATE TABLE forum (
username VARCHAR(16) DEFAULT 'anonymous',
title VARCHAR(32) NOT NULL,
body VARCHAR(64) NOT NULL,
date_created DATE
);

show databases;
use heroku_e707007638085c8;
delete from forum where title = '';
select * from forum;

