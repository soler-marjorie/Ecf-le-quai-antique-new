-- Active: 1684320516575@@127.0.0.1@3306@quaiantiquestudi

-- ----------------------------------------

--
-- structure de la table 'pictureHome'
--

DROP TABLE IF EXISTS home;
CREATE TABLE IF NOT EXISTS home(
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL
);

--
-- déchargement des données de la table 'pictureHome'
--

INSERT INTO home (title)
VALUES
('salade.jpg'),
('burger.jpg'),
('pancakes.jpg');

-- ------------------------------------------