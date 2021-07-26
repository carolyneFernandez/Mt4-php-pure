
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DROP DATABASE IF EXISTS blog;
CREATE DATABASE blog;
USE blog;

CREATE TABLE Rol (
  id int  PRIMARY KEY , 
  name varchar(20) NOT NULL
);

CREATE TABLE Users (
  id int AUTO_INCREMENT PRIMARY KEY , 
  name varchar(50) NOT NULL,
  email varchar(100) NOT NULL, 
  password varchar(100) NOT NULL, 
  id_rol int NOT NULL,
  FOREIGN KEY(id_rol) REFERENCES Rol(id)
);

CREATE TABLE Article ( 
  id int AUTO_INCREMENT PRIMARY KEY,
  title varchar(100) NOT NULL,
  description varchar(1000) NOT NULL,
  date date NOT NULL, 
  id_author int NOT NULL,
  FOREIGN KEY(id_author) REFERENCES Users(id) 
);

CREATE TABLE `Commentary` ( 
  id int AUTO_INCREMENT PRIMARY KEY, 
  description varchar(150) NULL, 
  id_articles int(11) NULL,
  id_user int(11) NULL,
  Date datetime NULL, 
  FOREIGN KEY(id_user) REFERENCES Users(id), 
  FOREIGN KEY( id_articles) REFERENCES Article(id)
);

INSERT INTO `Users` (`id`, `name`, `email`, `password`, `rol`) VALUES (NULL, 'user1', 'user1@gmail.com', MD5('user'), '1');
INSERT INTO `Users` (`id`, `name`, `email`, `password`, `rol`) VALUES (NULL, 'user2', 'user2@gmail.com', MD5('user'), '0');


INSERT INTO `Article` (`id`, `title`, `description`, `date`, `id_Author`)
 VALUES (NULL, 'Article1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2021-07-27', '1');
INSERT INTO `Article` (`id`, `title`, `description`, `date`, `id_Author`) 
VALUES (NULL, 'Article2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2021-07-26', '1');

INSERT INTO `Commentary` (`id`, `description`, `id_articles`, `id_user`, `Date`) VALUES (NULL, "commentaire sur pour l\'article 1", '1', '1', '2021-07-26 22:23:50.000000');
INSERT INTO `Commentary` (`id`, `description`, `id_articles`, `id_user`, `Date`) VALUES (NULL, "commentaire sur pour l\'article 2", '2', '1', '2021-07-26 22:23:50.000000');