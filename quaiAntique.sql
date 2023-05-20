-- Active: 1684320516575@@127.0.0.1@3306@quaiantiquestudi

-- ----------------------------------------

--
-- structure de la table 'pictureHome'
--

DROP TABLE IF EXISTS home;
CREATE TABLE IF NOT EXISTS home(
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL,
    src TEXT
);

--
-- déchargement des données de la table 'pictureHome'
--

INSERT INTO home (title, src)
VALUES
('salade césar', 'salade.jpg'),
('burger charolais', 'burgers.jpg'),
('pancakes', 'pancakes.jpg');

-- ------------------------------------------

--
-- structure de la table 'menu'
--

DROP TABLE IF EXISTS menu;
CREATE TABLE IF NOT EXISTS menu(
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(55) NOT NULL,
    description TEXT NOT NULL,
    price FLOAT NOT NULL
);

--
-- déchargement des données de la table 'menu'
--

INSERT INTO menu (title, description, price)
VALUES
('Formule déjeuner', 'Entrée ou plat + dessert', 15),
('Formule diner', 'Entrée + plat + dessert', 25),
('Salade césar', 'salade, émincés de poulet panés, lardons fumés, oeuf poché coulant, tomates, parmesan, croutons, sauce césar', 10),
('Salade mozza', 'salade, tomates, mozzarella en cube, lardons fumés, crouton, sauce à la moutarde', 12),
('Salade 3 fromages chaud', 'salade, tomates, chèvre chaud, brebis chaud, brie chaud, miel', 15),
('Burger charolais', 'steak, cantal, confit d\'oignons, sauce bourguignonne', 13),
('Burger savoyard', 'steak, galette de pomme de terre, fromage à raclette, tomates, sauces mayonnaise', 15),
('Burger montagnard', 'steak, fromage à fondue, bacon grillé, confit d\'oignons, sauce burger, salade, tomates, cornichons', 18),
('Tagliatelles carbonara', 'tagliatelles fraiches, poitrine fumée, crème fraîche, parmesan, jaune d\'oeuf', 15),
('Tagliatelles bolognaise', 'tagliatelles fraiches, boeuf haché, sauce tomate, fromage', 15),
('macaronis cèpes et foie gras', 'macaronis fraiches, cèpes, foie gras de canard, huile d\'olive', 20),
('steak tartare', 'boeuf haché, jaune d\'oeuf, moutarde, huile d\'olive, câpres, cornichons, oignon, mélanges d\'herbes', 18),
('faux-filet', 'faux filet finement coupé, sauce', 20),
('demi magret de canard', 'demi magret de canard, sauce échalotte miel et vinaigre', 22),
('moelleux au chocolat', 'chocolat noir, chantilly maison', 7),
('pancakes', 'pancakes maison, fruits rouges, sirop d\'érable', 8),
('île flottante', 'crème anglaise, oeuf frais', 8);

-- ------------------------------------------

--
-- structure de la table 'menu'
--

DROP TABLE IF EXISTS user;
CREATE TABLE IF NOT EXISTS user(
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(55) NOT NULL,
    surname VARCHAR(55),
    email VARCHAR(100),
    password TEXT,
    ip VARCHAR(20)
);

--
-- déchargement des données de la table 'menu'
--