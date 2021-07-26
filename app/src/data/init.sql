
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DROP DATABASE IF EXISTS blog;
CREATE DATABASE blog;
USE blog;

CREATE TABLE Users (
  id int PRIMARY KEY, 
  name varchar(50) NOT NULL,
  email varchar(100) NOT NULL, 
  password varchar(100) NOT NULL, 
  rol int(1) NOT NULL COMMENT '1:admin 0:user' 
);

CREATE TABLE Article ( 
  id int PRIMARY KEY,
  title varchar(100) NOT NULL,
  description varchar(1000) NOT NULL,
  date date NOT NULL, 
  id_Author int NOT NULL,
  FOREIGN KEY(id_Author) REFERENCES Users(id) 
);

CREATE TABLE `Commentary` ( 
  id int NOT NULL, 
  description varchar(150) NULL, 
  id_articles int(11) NULL,
  id_user int(11) NULL,
  Date datetime NULL, 
  FOREIGN KEY(id_user) REFERENCES Users(id), 
  FOREIGN KEY( id_articles) REFERENCES Article(id)
);
