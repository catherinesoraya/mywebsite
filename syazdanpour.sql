show databases;
use heroku_e707007638085c8;

CREATE TABLE user (
email VARCHAR(32) NOT NULL PRIMARY KEY,
username VARCHAR(16) NOT NULL,
password VARCHAR(16) NOT NULL
);

CREATE TABLE forum (
username VARCHAR(16) DEFAULT 'anonymous',
title VARCHAR(32) NOT NULL,
body VARCHAR(64) NOT NULL,
date_created DATE
);

CREATE TABLE photos (
name VARCHAR(16) NOT NULL,
file_name VARCHAR(16) NOT NULL,
description VARCHAR(64) NOT NULL
);





