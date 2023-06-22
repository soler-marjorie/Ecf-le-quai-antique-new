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
    formule VARCHAR(55) NOT NULL,
    plat VARCHAR(55) NOT NULL,
    title VARCHAR(55) NOT NULL,
    description TEXT NOT NULL,
    price FLOAT NOT NULL
);

--
-- déchargement des données de la table 'menu'
--

INSERT INTO menu (formule, plat, title, description, price)
VALUES
('Les menus', 'Nos formules', 'Formule déjeuner', 'Entrée ou plat + dessert', 15),
('Les menus', 'Nos formules', 'Formule diner', 'Entrée + plat + dessert', 25),
('Les entrées', 'Nos salades', 'Salade césar', 'salade, émincés de poulet panés, lardons fumés, oeuf poché coulant, tomates, parmesan, croutons, sauce césar', 10),
('Les entrées', 'Nos salades', 'Salade mozza', 'salade, tomates, mozzarella en cube, lardons fumés, crouton, sauce à la moutarde', 12),
('Les entrées', 'Nos salades', 'Salade 3 fromages chaud', 'salade, tomates, chèvre chaud, brebis chaud, brie chaud, miel', 15),
('Les plats', 'Nos burgers', 'Burger charolais', 'steak, cantal, confit d\'oignons, sauce bourguignonne', 13),
('Les plats', 'Nos burgers', 'Burger savoyard', 'steak, galette de pomme de terre, fromage à raclette, tomates, sauces mayonnaise', 15),
('Les plats', 'Nos burgers','Burger montagnard', 'steak, fromage à fondue, bacon grillé, confit d\'oignons, sauce burger, salade, tomates, cornichons', 18),
('Les plats', 'Nos pâtes', 'Tagliatelles carbonara', 'tagliatelles fraiches, poitrine fumée, crème fraîche, parmesan, jaune d\'oeuf', 15),
('Les plats', 'Nos pâtes', 'Tagliatelles bolognaise', 'tagliatelles fraiches, boeuf haché, sauce tomate, fromage', 15),
('Les plats', 'Nos pâtes', 'macaronis cèpes et foie gras', 'macaronis fraiches, cèpes, foie gras de canard, huile d\'olive', 20),
('Les plats', 'Nos viandes', 'steak tartare', 'boeuf haché, jaune d\'oeuf, moutarde, huile d\'olive, câpres, cornichons, oignon, mélanges d\'herbes', 18),
('Les plats', 'Nos viandes', 'faux-filet', 'faux filet finement coupé, sauce', 20),
('Les plats', 'Nos viandes', 'demi magret de canard', 'demi magret de canard, sauce échalotte miel et vinaigre', 22),
('Les desserts', 'Nos sucrés', 'moelleux au chocolat', 'chocolat noir, chantilly maison', 7),
('Les desserts', 'Nos sucrés', 'pancakes', 'pancakes maison, fruits rouges, sirop d\'érable', 8),
('Les desserts', 'Nos sucrés', 'île flottante', 'crème anglaise, oeuf frais', 8);

-- ------------------------------------------

--
-- structure de la table 'user'
--

DROP TABLE IF EXISTS user;
CREATE TABLE IF NOT EXISTS user(
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(55) NOT NULL,
    surname VARCHAR(55),
    email VARCHAR(100),
    password TEXT,
    role VARCHAR(25)
);

--
-- déchargement des données de la table 'user'
--

INSERT INTO user (name, surname, email, password, role)
VALUES
('mina', 'lechat', 'lechatmina@exemple.fr', 'moonbinleloup', 'admin'),
('levento', 'barbare', 'leventobarbare@exemple.com', 'marcheDanslanuit', 'user');

-- ------------------------------------------

--
-- structure de la table 'Contact'
--

DROP TABLE IF EXISTS contact;
CREATE TABLE IF NOT EXISTS contact(
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(55) NOT NULL,
    surname VARCHAR(55),
    email VARCHAR(100),
    object VARCHAR(150),
    message TEXT
);

--
-- déchargement des données de la table 'Contact'
--

INSERT INTO contact (name, surname, email, object, message)
VALUES
('mina', 'lechat', 'lechatmina@exemple.fr', 'le test objet', 'le test message');

-- ------------------------------------------

--
-- structure de la table 'Horaires'
--

DROP TABLE IF EXISTS schedules;
CREATE TABLE IF NOT EXISTS schedules(
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    jours VARCHAR(15) NOT NULL,
    horairesMatin VARCHAR(15) NOT NULL,
    horairesAprem VARCHAR(15) NOT NULL
);

--
-- déchargement des données de la table 'Horaires'
--

INSERT INTO schedules (jours, horairesMatin, horairesAprem)
VALUES
('lundi', "12:00-14:00", "19:00-22:00"),
('mardi', "12:00-14:00", "19:00-22:00"),
('mercredi', "fermé", ""),
('jeudi', "12:00-14:00", "19:00-22:00"),
('vendredi', "", "19:00-23:00"),
('samedi', "12:00-14:00", "19:00-22:00"),
('dimanche', "12:00-14:00", "");


-- ------------------------------------------

--
-- structure de la table 'Booking'
--

DROP TABLE IF EXISTS booking;
CREATE TABLE IF NOT EXISTS booking(
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    surname VARCHAR(50),
    email VARCHAR(50),
    nbrPersonnes INT,
    allergies VARCHAR(50),
    date DATE,
    moment VARCHAR(10),
    schedules TIME
);


-- ------------------------------------------

--
-- structure de la table 'Allergy'
--

DROP TABLE IF EXISTS allergy;
CREATE TABLE IF NOT EXISTS allergy(
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50)
);

--
-- déchargement des données de la table 'Allergy'
--

INSERT INTO Allergy (name)
VALUES
("aucune"),
("gluten"),
("fruits de mer"),
("poisson"),
("arachides"),
("lactose"),
("soja"),
("fruit à coque");

-- ------------------------------------------

--
-- structure de la table 'days'
--

DROP TABLE IF EXISTS day;
CREATE TABLE IF NOT EXISTS day(
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50)
);

--
-- déchargement des données de la table 'days'
--

INSERT INTO day (name)
VALUES
("Midi"),
("Soir");

-- ------------------------------------------

--
-- structure de la table 'moment'
--

DROP TABLE IF EXISTS momentMorning;
CREATE TABLE IF NOT EXISTS momentMorning(
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    time VARCHAR(250)
);

--
-- déchargement des données de la table 'moment'
--

INSERT INTO momentMorning (time)
VALUES
("12:00"),
("12:15"),
("12:30"),
("12:45"),
("13:00");

-- ------------------------------------------

--
-- structure de la table 'moment'
--

DROP TABLE IF EXISTS momentNight;
CREATE TABLE IF NOT EXISTS momentNight(
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    time VARCHAR(250)
);

--
-- déchargement des données de la table 'moment'
--

INSERT INTO momentNight (time)
VALUES
("19:00"),
("19:15"), 
("19:30"), 
("19:45"), 
("20:00"), 
("20:15"), 
("20:30"), 
("20:45"), 
("21:00");