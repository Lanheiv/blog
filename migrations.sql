DROP DATABASE IF EXISTS blog_ipb23; -- Izdzēst datu bāzi ja eksistē blog_ipb23 -- Izmanto lai ātri un bez kļūdām atjaunotu datu bāzi. --

	-- Izveido datubāzi --
CREATE DATABASE blog_ipb23;
USE blog_ipb23;

	-- Izveido table --
CREATE TABLE posts (
 id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 content VARCHAR(255) -- TEXT to izmanto garākai informācijai. --
);

	-- Ievieto datus --
INSERT INTO posts (content)
VALUES
("Konstantīn nošaujies"),("Mazāk par 2 nedēļām līdz brīvlaikam");

	-- Apskata datus --
SELECT * FROM posts;


	-- Izveido table --
CREATE TABLE categories (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	category_name VARCHAR(25) NOT NULL 
)

	-- Ievieto datus --
INSERT INTO categories (category_name)
VALUES
("Svētki"), ("Mūzika"), ("Sports");