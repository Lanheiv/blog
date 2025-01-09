DROP DATABASE IF EXISTS blog_ipb23; -- Izdzēst datu bāzi ja eksistē blog_ipb23 -- Izmanto lai ātri un bez kļūdām atjaunotu datu bāzi. --

	-- Izveido un iejiet --
CREATE DATABASE blog_ipb23;
USE blog_ipb23;

	-- Izveido tabulas --
CREATE TABLE post (
 id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 content VARCHAR(255) -- TEXT to izmanto garākai informācijai. --
);
CREATE TABLE categories (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	category_name VARCHAR(25) NOT NULL 
)

	-- Ievieto vērtības --
INSERT INTO post (content)
VALUES
("ZzZzZzZz"),("Buļba"),("game"),("died"),("zaļa zāle"),("zilas debesis");

INSERT INTO categories (category_name)
VALUES
("Svētki"), ("Mūzika"), ("Sports"),("Māksla");