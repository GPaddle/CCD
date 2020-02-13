SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE role (
  id int(11) NOT NULL,
  label varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO role (id, label) VALUES
(1, 'Caissier titulaire'),
(2, 'Caissier assistant'),
(3, 'Gestionnaire de vrac titulaire'),
(4, 'Gestionnaire de vrac assistant'),
(5, 'Chargé d\'accueil titulaire'),
(6, 'Chargé d\'accueil assistant');

CREATE TABLE user (
  id int(11) NOT NULL,
  nom varchar(30) CHARACTER SET utf8 NOT NULL,
  isAdmin boolean
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO user (id, nom) VALUES
(1, 'Cassandre'),
(2, 'Achille'),
(3, 'Calypso'),
(4, 'Bacchus'),
(5, 'Diane'),
(6, 'Clark'),
(7, 'Helene'),
(8, 'Jason'),
(9, 'Bruce'),
(10, 'Pénélope'),
(11, 'Ariane'),
(12, 'Lois');


create table creneau(
  id int AUTO_INCREMENT,
  jour int,
  semaine int,
  cycle int,
  debutHeure int,
  finHeure int,
  primary key(id)
);

insert into creneau (jour, semaine, cycle, debutHeure, finHeure) VALUES
  (3, 2, 1, 14, 17),
  (1, 2, 1, 8, 10),
  (4, 2, 1, 10, 12);

CREATE TABLE besoin(
	idCreneau int,
	idRole int,
	qte int
);

ALTER TABLE role
  ADD PRIMARY KEY (id);

ALTER TABLE user
  ADD PRIMARY KEY (id);

ALTER TABLE role
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE user
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
