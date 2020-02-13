SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `role`;
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

DROP TABLE IF EXISTS `user`;
CREATE TABLE user (
  id int(11) NOT NULL,
  nom varchar(30) CHARACTER SET utf8 NOT NULL,
  mdp varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  mail varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  isAdmin boolean DEFAULT false
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO user (id, nom,mdp,mail,isAdmin) VALUES
(1, 'Cassandre','$2y$10$8fU9ac6GKTEf5bxFkJTMEexzyZGA.XBdshyqhTGF8/wRWSTp.ErMi','',false),
(2, 'Achille','$2y$10$8fU9ac6GKTEf5bxFkJTMEexzyZGA.XBdshyqhTGF8/wRWSTp.ErMi','',false),
(3, 'Calypso','$2y$10$8fU9ac6GKTEf5bxFkJTMEexzyZGA.XBdshyqhTGF8/wRWSTp.ErMi','',false),
(4, 'Bacchus','$2y$10$8fU9ac6GKTEf5bxFkJTMEexzyZGA.XBdshyqhTGF8/wRWSTp.ErMi','',false),
(5, 'Diane','$2y$10$8fU9ac6GKTEf5bxFkJTMEexzyZGA.XBdshyqhTGF8/wRWSTp.ErMi','',false),
(6, 'Clark','$2y$10$8fU9ac6GKTEf5bxFkJTMEexzyZGA.XBdshyqhTGF8/wRWSTp.ErMi','',false),
(7, 'Helene','$2y$10$8fU9ac6GKTEf5bxFkJTMEexzyZGA.XBdshyqhTGF8/wRWSTp.ErMi','',false),
(8, 'Jason','$2y$10$8fU9ac6GKTEf5bxFkJTMEexzyZGA.XBdshyqhTGF8/wRWSTp.ErMi','',false),
(9, 'Bruce','$2y$10$8fU9ac6GKTEf5bxFkJTMEexzyZGA.XBdshyqhTGF8/wRWSTp.ErMi', '',false),
(10, 'Pénélope','$2y$10$8fU9ac6GKTEf5bxFkJTMEexzyZGA.XBdshyqhTGF8/wRWSTp.ErMi','',false),
(11, 'Ariane','$2y$10$8fU9ac6GKTEf5bxFkJTMEexzyZGA.XBdshyqhTGF8/wRWSTp.ErMi','',true),
(12, 'Lois','$2y$10$8fU9ac6GKTEf5bxFkJTMEexzyZGA.XBdshyqhTGF8/wRWSTp.ErMi','',true);

DROP TABLE IF EXISTS `creneau`;
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
  (3, 2, 653, 10, 12),
  (3, 2, 653, 18.5, 20),
  (1, 2, 653, 18.5, 20),
  (1, 3, 653, 8, 10),
  (4, 4, 653, 10, 12);

DROP TABLE IF EXISTS `besoin`;
CREATE TABLE besoin(
  id int AUTO_INCREMENT,
	idCreneau int,
	idRole int,
	qte int,
  PRIMARY KEY (id)
);

ALTER TABLE role
  ADD PRIMARY KEY (id);

ALTER TABLE user
  ADD PRIMARY KEY (id);

ALTER TABLE role
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE user
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

DROP TABLE IF EXISTS `InscriptionBesoin`;
create table InscriptionBesoin(
    idUser int,
    idBesoin int,
    FOREIGN KEY (idUser) REFERENCES user(id),
    FOREIGN KEY (idBesoin) REFERENCES besoin(id)
    );