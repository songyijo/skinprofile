-- init.sql

DROP DATABASE IF EXISTS skinprofiledb;
CREATE DATABASE skinprofiledb;

USE skinprofiledb;

-- create tables
CREATE TABLE USERS(
  uname VARCHAR(100) NOT NULL PRIMARY KEY,
  password VARCHAR(100) NOT NULL
);

-- ingredients that user should avoid
CREATE TABLE AVOID(
  uname VARCHAR(100) NOT NULL,
  ing VARCHAR(200) NOT NULL,
  FOREIGN KEY (uname) REFERENCES USERS(uname) ON DELETE CASCADE
);
