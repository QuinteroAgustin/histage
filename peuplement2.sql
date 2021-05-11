INSERT INTO Role(`idRole`,`libRole`)
VALUES
(1,'Admin'),
(2,'Enseignant'),
(3,'Eleve'),
(4,'Contact');

INSERT INTO Section(`idSection`,`libSection`)
VALUES
(1,'SIO1'),
(2,'SIO2'),
(3,'SN1'),
(4,'SN2'),
(5,'CCS1'),
(6,'CCS2'),
(7,'RPI'),
(8,'ESI1'),
(9,'ESI2');

INSERT INTO Users(`idUser`, `mailUser`,`nomUser`,`prenomUser`,`telephoneUser`,`mobileUser`,`titreUser`,`mdpUser`,`idRole`)
VALUES
(1,'yohan.marques@limayrac.fr','MARQUES','Yohan','0500000000','0624859002','M.','12345',1),
(2,'agustin.quintero@limayrac.fr','QUINTERO','Agustin','0500000000','0615614135','M.','12345',1),
(3,'christophe.puel@limayrac.fr','PUEL','Christophe','0500000000','0661264523','M.','12345',1),

(4,'akendengueph1@gmail.com','AKENDENGUE','Pierre-Honoré','0500000000','0668937013','M.','12345',3),
(5,'mathieuarmand988@gmail.com','ARMAND','Mathieu','0500000000','0620320486','M.','12345',3),
(6,'teo.augry@limayrac.fr','AUGRY','Téo','0500000000','0642905090','M.','12345',3),
(7,'handball.ballon@hotmail.fr','BERTRAND','Loïc','0500000000','0682778747','M.','12345',3),
(8,'gwena.bonnet81@gmail.com','BONNET','Gwénaël','0500000000','0604161969','M.','12345',3),
(9,'matdegramont@gmail.com','BOUBEEDEGRAMONT','Matthieu','0500000000','0652810576','M.','12345',3),
(10,'ytspana@gmail.com','BROTO','Jules','0500000000','0695370215','M.','12345',3),
(11,'adriencarles12@gmail.com','CARLES','Adrien','0500000000','0681751583','M.','12345',3),
(12,'romain.cazals@free.fr','CAZALS','Romain','0500000000','0781743672','M.','12345',3),
(13,'dclucas31@gmail.com','DALLA-COSTA','Lucas','0500000000','0698068166','M.','12345',3),
(14,'luc.dehez@gmail.com','DEHEZ','Luc','0500000000','0640185640','M.','12345',3),
(15,'damiendutertre31@gmail.com','DUTERTRE','Damien','0500000000','0661185028','M.','12345',3),
(16,'e.enjalbert12@gmail.com','ENJALBERT','Emma','0500000000','0783427578','Mme.','12345',3),
(17,'franco-loic@orange.fr','FRANCO','Loïc','0500000000','0671062564','M.','12345',3),
(18,'thomasfranquin@gmail.com','FRANQUIN','Thomas','0500000000','0662729865','M.','12345',3),
(19,'axel.gagnant@gmail.com','GAGNANT','Axel','0500000000','0624624934','M.','12345',3),
(20,'dydy97310@orange.fr','GOULT','Dylan','0500000000','0785585303','M.','12345',3),
(21,'hugoletort@outlook.fr','LETORT','Hugo','0500000000','0662648884','M.','12345',3),
(22,'survivorg811@gmail.com','MALGOUYRES','Guillaume','0500000000','0610042975','M.','12345',3),
(23,'paul.meyer0031@gmail.com','MEYER','Paul','0500000000','0602264233','M.','12345',3),
(24,'benjamin.michoux@hotmail.fr','MICHOUX','Benjamin','0500000000','0651144341','M.','12345',3),
(25,'achillemonteil31@gmail.com','MONTEIL','Achille','0500000000','0781706046','M.','12345',3),
(26,'david.peyrard33@gmail.com','PEYRARD','David','0500000000','0641326462','M.','12345',3),
(27,'arnaudrabhi@hotmail.fr','RABHI','Arnaud','0500000000','0645146987','M.','12345',3),
(28,'maryliasabatier@gmail.com','SABATIER','Marylia','0500000000','0782007284','Mme.','12345',3),
(29,'samathy.bryan@orange.fr','SAMATHY','Bryan','0500000000','0785563324','M.','12345',3),
(30,'charles.viala@limayrac.fr','VIALA','Charles','0500000000','0767021870','M.','12345',3),

(31,'gillesdecruzel@horus-solutions.org','DECRUZE','Gilles','0500000000','0500000000','M.','12345',4),
(32,'alexislapeze@gmail.com','LAPEZE','Alexis','0500000000','0500000000','M.','12345',4),
(33,'wbassot@saliege.fr','BASSOT','William','0500000000','0500000000','M.','12345',4),
(34,'alainygorra@yahoo.fr','YGORRA','Alain','0500000000','0650729570','M.','12345',4),
(35,'froger@adista.fr','ROGER','F','0547500406','0500000000','M.','12345',4),
(36,'cyril@davtech.info.fr','DAVANTFALCO','Cyril','0500000000','0500000000','M.','12345',4),
(37,'florian.giral@invisiart.fr','GIRAL','Florian','0500000000','0652640916','M.','12345',4),
(38,'marie@pixbulle.com','CICAL','Marie-Hélène','0500000000','0761911982','Mme.','12345',4),
(39,'b.lambert@mairie-blagnac.fr','LAMBERT','Bruno','0561717230','0500000000','M.','12345',4),
(40,'pierre.smeyers@orange.com','SMEYERS','Pierre','0500000000','0630072935','M.','12345',4),
(41,'nicolas.gary@icam.fr','GARY','Nicolas','0500000000','0689335169','M.','12345',4),
(42,'anthony@cortexinformatique.com','BRONNER','Anthony','0500000000','0661327225','M.','12345',4),
(43,'s.vendeville@anras.fr','VENDEVILLE','Sophie','0561807957','0500000000','Mme.','12345',4),
(44,'sitcom@sitcom.fr','DAHAN','Roni','0561149292','0500000000','M.','12345',4),
(45,'0500000000','VOGEL','Yvan','0500000000','0500000000','M.','12345',4),
(46,'home.skull@gmail.com','MUNOZ','Charlotte','0500000000','0675160016','Mme.','12345',4),
(47,'o.molina@ledepartement82sceinfor...fr','MOLINA','Olivier','0563918321','0500000000','M.','12345',4),
(48,'sylvain.galant@company.com','GALANT','Sylvain','0561007989','0500000000','M.','12345',4),
(49,'marie@pixbulle.com','CICAL','Marie-Hélène','0500000000','0761911982','Mme.','12345',4),
(50,'fabien.balet@ensiacet.fr','BALET','Fabien','0534323300','0500000000','M.','12345',4),
(51,'mbouvart@partitio.com','BOUVART','Manuel','0500000000','0500000000','M.','12345',4);


INSERT INTO enseignant(`idUser`,`libMetierEnseignant`)
VALUES
('3','BDD');

INSERT INTO gerer(idSection, idUser, isRs) VALUES
(1,3, 1),
(2,3, 1);

INSERT INTO contact (idUser, statusContact, fonctionContact, idEntreprise) VALUES
(31, 'A', 'NA', 1),
(32, 'A', 'NA', 2),
(33, 'A', 'NA', 3),
(34, 'A', 'NA', 4),
(35, 'A', 'NA', 5),
(36, 'A', 'NA', 6),
(37, 'A', 'NA', 7),
(38, 'A', 'NA', 8),
(39, 'A', 'NA', 9),
(40, 'A', 'NA', 10),
(41, 'A', 'NA', 11),
(42, 'A', 'NA', 12),
(43, 'A', 'NA', 13),
(44, 'A', 'NA', 14),
(45, 'A', 'NA', 15),
(46, 'A', 'NA', 13),
(47, 'A', 'NA', 16),
(48, 'A', 'NA', 17),
(49, 'A', 'NA', 13),
(50, 'A', 'NA', 18),
(51, 'A', 'NA', 2);

INSERT INTO entreprise(idEntreprise, nomEntreprise, serviceEntreprise, missionEntreprise, numAdrEntreprise, libAdrEntreprise, codePostalEntreprise, villeEntreprise, telephoneEntreprise, mailEntreprise, siretEntreprise)
VALUES
(1,'HORUS SOLUTIONS', 'NA', 'NA', 0, 'Delta poste', 0, 'LIBREVILLE', '0500000000', 'gillesdecruzel@horus-solutions.org', '11111111111111'),
(2,'LAPEZE Alexis', 'NA', 'NA', 17, 'Impasse du cimetière Croix daurade B32', 31200, 'TOULOUSE', '0500000000', 'alexislapeze@gmail.com', '11111111111111'),
(3,'LYCEE SALIEGE', 'NA', 'NA', 3, 'Rue Georges Bernanos', 31130, 'BALMA', '0561247840', 'NA', '11111111111111'),
(4,'OFFICE NOTARIAL DE MAITREPAMBO', 'NA', 'NA', 51, 'Avenue de Toulouse', 31240, 'L UNION', '0686731943', 'philippe.pambo@notaires.fr', '11111111111111'),
(5,'ADISTA', 'NA', 'NA', 50, 'Rue Jean Bart Technoparc 6', 31670, 'LABEGE', '0547500406', 'froger@adista.fr', '11111111111111'),
(6,'DAVTECH', 'NA', 'NA', 81, 'Boulevard de Suisse', 31200, 'TOULOUSE', '0531614733', 'cyril@davtech.info.fr', '11111111111111'),
(7,'SASU INVIS ART', 'NA', 'NA', 1, 'Avenue Gustave Eiffel', 11100, 'NARBONNE', '0448160642', 'florian.giral@invisiart.fr', '11111111111111'),
(8,'PIXBULLE', 'NA', 'NA', 24, 'Av. du Grand Tétras', 31860, 'LABARTHE-SUR-LEZE', '0761911982', 'marie@pixbulle.com', '11111111111111'),
(9,'DIRECTION DES SYSTEMES D INFORMATION', 'NA', 'NA', 34, 'Ter rue Pasteur', 31700, 'BLAGNAC', '0561717200', 'b.lambert@mairie-blagnac.fr', '11111111111111'),
(10,'ORANGE S.A', 'NA', 'NA', 6, 'Avenue Albert Durand', 31706, 'BLAGNAC', '0534543131', '', '11111111111111'),
(11,'AIRBUS BLAGNAC', 'NA', 'NA', 1, ' Rond Point Maurice Bellonte', 31707, 'BLAGNAC CEDEX', '0500000000', 'NA', '11111111111111'),
(12,'GROUPE ICAM', 'NA', 'NA', 53, 'rue de la Boëtie', 75008, 'PARIS', '0153772220', '', '11111111111111'),
(13,'CORTEX INFORMATIQUE', 'NA', 'NA', 7, 'place commerciale de Jolimont', 31500, 'TOULOUSE', '0561489144', 'anthony@cortexinformatique.com', '11111111111111'),
(14,'ANRAS DITEP ST FRANCOIS', 'NA', 'NA', 36, 'avenue Maurice Bourges Maunoury', 31200, 'TOULOUSE', '0561807457', 's.vendeville@anras.fr', '11111111111111'),
(15,'SITCOM', 'NA', 'NA', 18, ' rue Pharaon', 31000, 'TOULOUSE', '0561149292', 'sitcom@sitcom.fr', '11111111111111'),
(16,'DAVTECH', 'NA', 'NA', 81, 'Boulevard de Suisse ', 31200, 'TOULOUSE', '0531614733', 'cyril@davtech.info.fr', '11111111111111'),
(17,'MARLINK SAS', 'NA', 'NA', 0, 'Aussaguel', 31450, 'ISSUS', '0561288888', 'NA', '11111111111111'),
(18,'HOME SKULL','NA','NA', 22, 'rue de la liberté Bâtiment B', 63599, 'ISSOIRE', '0675160016', 'home.skull@gmail.com', '11111111111111'),
(19,'CONSEIL DEPARTEMENTAL DUTARN ET GARONNE','NA','NA',100,'Boulevard Hubert GouzeBP 783',82013,'MONTAUBAN','0563920333','NA','11111111111111'),
(20,'EXM COMPAGNY','NA','NA',116,'Route d espagne Bal 513 - HELIOS 7',31100,'TOULOUSE','0561007989','sylvain.galant@company.com','11111111111111'),
(21,'INP ENSIACET','NA','NA',4,'rue Emile Monso',31030,'TOULOUSE','040534322158','fabien.balet@ensiacet.fr','11111111111111'),
(22,'PARTITIO','NA','NA',8,'rue Claude Marie Perroud',31100,'TOULOUSE','0534604294','mbouvart@partitio.com','11111111111111'),
(23,'Limayrac','NA','NA',50,'rue de limayrac',31400,'TOULOUSE','NA','NA','11111111111111');

INSERT INTO Eleve(`idUser`,`dateNaissanceEleve`,`dateRentreeEleve`,`numAdrEleve`,`villeAdrEleve`,`libAdrEleve`,`codePostalAdrEleve`,`idSection`)
VALUES
(1, '1998-08-31', '2021-05-10', 0, 'NA', 'NA', 31000, 1),
(2, '2001-01-11', '2021-05-10', 0, 'NA', 'NA', 31000, 1),
(4, '2001-08-18', '2021-05-10', 0, 'NA', 'NA', 31000, 1),
(5, '2000-12-18', '2021-01-04', 0, 'NA', 'NA', 31000, 1),
(6, '1999-07-28', '2021-01-04', 0, 'NA', 'NA', 31000, 1),
(7, '2002-06-12', '2021-05-10', 0, 'NA', 'NA', 31000, 1),
(8, '2001-10-15', '2021-05-10', 0, 'NA', 'NA', 31000, 1),
(9, '2000-09-13', '2021-01-02', 0, 'NA', 'NA', 31000, 1),
(10, '2002-03-12', '2021-05-10', 0, 'NA', 'NA', 31000, 1),
(11, '1998-02-17', '2021-05-10', 0, 'NA', 'NA', 31000, 1),
(12, '2002-08-27', '2021-05-10', 0, 'NA', 'NA', 31000, 1),
(13, '2001-03-23', '2021-01-04', 0, 'NA', 'NA', 31000, 1),
(14, '1995-08-07', '2021-01-25', 0, 'NA', 'NA', 31000, 1),
(15, '2001-03-08', '2021-05-10', 0, 'NA', 'NA', 31000, 1),
(16, '2001-10-20', '2021-01-04', 0, 'NA', 'NA', 31000, 1),
(17, '2000-11-26', '2021-01-04', 0, 'NA', 'NA', 31000, 1),
(18, '2001-08-07', '2021-01-04', 0, 'NA', 'NA', 31000, 1),
(19, '2000-10-16', '2021-01-04', 0, 'NA', 'NA', 31000, 1),
(20, '2001-01-10', '2021-01-04', 0, 'NA', 'NA', 31000, 1),
(21, '2000-05-26', '2021-01-04', 0, 'NA', 'NA', 31000, 1),
(22, '2000-05-26', '2021-01-04', 0, 'NA', 'NA', 31000, 1),
(23, '2001-06-20', '2021-01-04', 0, 'NA', 'NA', 31000, 1),
(24, '1998-12-10', '2021-01-04', 0, 'NA', 'NA', 31000, 1),
(25, '2002-02-22', '2021-05-10', 0, 'NA', 'NA', 31000, 1),
(26, '2001-01-08', '2021-05-10', 0, 'NA', 'NA', 31000, 1),
(27, '2000-07-14', '2021-01-04', 0, 'NA', 'NA', 31000, 1),
(28, '2002-09-29', '2021-05-10', 0, 'NA', 'NA', 31000, 1),
(29, '2001-01-16', '2021-05-10', 0, 'NA', 'NA', 31000, 1),
(30, '1996-12-29', '2021-01-04', 0, 'NA', 'NA', 31000, 1);

INSERT INTO anneescolaire(idAnneeScolaire, libAnneeScolaire) VALUES
(1, '2019-2020'),
(2, '2020-2021');

INSERT INTO typeindicateur(idTypeIndicateur, libTypeIndicateur) VALUES
(1, 'Evaluation du comportement'),
(2, 'Evaluation du travail realise'),
(3, 'Futur'),
(5, 'Epreuve E6'),
(6, 'Commentaires autres');

INSERT INTO indicateur(idTypeIndicateur, idIndicateur, libIndicateur) VALUES
(1, 1, 'Absences'),
(1, 2, 'Retards'),
(1, 3, 'Intégration au sein de l équipe'),
(2, 4, 'Autonomie'),
(2, 5, 'Adaptation'),
(2, 6, 'Réalisation satisfaisante'),
(2, 7, 'Curiosité'),
(3, 8, 'L’entreprise acceptera-t-elle cet étudiant en stage de 2ème année ? (durée de 6 à 8 semaines)'),
(3, 9, 'Si non en acceptera-t-elle un autre ?'),
(3, 10, 'L’entreprise acceptera-t-elle cet étudiant en stage de 1ème année ? (durée de 4 à 5 semaines) une année ultérieure'),
(4, 11, 'Le responsable acceptera-t-il de participer à l’épreuve E6 en tant que jury ?');

INSERT INTO Stage(`idStage`,`titreStage`,`descriptifStage`,`dateDebutStage`,`dateFinStage`,`dureeHebdoStage`,`dateEvalStage`,`commentaireEvalStage`,`idEntreprise`,`idAnneeScolaire`)
VALUES
(1,'NA','NA','2021-05-10','2021-06-20',35,'2021-08-08','NA',1,2),
(2,'NA','NA','2021-01-04','2021-02-12',35,'2021-08-08','NA',2,2),
(3,'NA','NA','2021-01-04','2021-02-12',35,'2021-08-08','NA',3,2),
(4,'NA','NA','2021-05-10','2021-06-24',35,'2021-08-08','NA',4,2),
(5,'NA','NA','2021-05-10','2021-06-24',35,'2021-08-08','NA',5,2),
(6,'NA','NA','2021-01-02','2021-02-12',35,'2021-08-08','NA',6,2),
(7,'NA','NA','2021-05-10','2021-06-24',35,'2021-08-08','NA',7,2),
(8,'NA','NA','2021-05-10','2021-06-24',35,'2021-08-08','NA',8,2),
(9,'NA','NA','2021-05-10','2021-06-24',35,'2021-08-08','NA',9,2),
(10,'NA','NA','2021-01-04','2021-02-12',35,'2021-08-08','NA',10,2),
(11,'NA','NA','2021-01-25','2021-02-26',35,'2021-08-08','NA',11,2),
(12,'NA','NA','2021-05-10','2021-06-24',35,'2021-08-08','NA',12,2),
(13,'NA','NA','2021-01-04','2021-01-29',35,'2021-08-08','NA',13,2),
(14,'NA','NA','2021-01-04','2021-02-12',35,'2021-08-08','NA',14,2),
(15,'NA','NA','2021-01-04','2021-02-12',35,'2021-08-08','NA',15,2),
(16,'NA','NA','2021-01-04','2021-02-12',35,'2021-08-08','NA',13,2),
(17,'NA','NA','2021-01-04','2021-02-12',35,'2021-08-08','NA',16,2),
(18,'NA','NA','2021-01-04','2021-02-12',35,'2021-08-08','NA',17,2),
(19,'NA','NA','2021-01-04','2021-02-12',35,'2021-08-08','NA',13,2),
(20,'NA','NA','2021-01-04','2021-02-12',35,'2021-08-08','NA',18,2),
(21,'NA','NA','2021-01-04','2021-02-12',35,'2021-08-08','NA',2,2),
(22,'NA','NA','2021-05-10','2021-06-24',35,'2021-08-08','NA',19,2),
(23,'NA','NA','2021-05-10','2021-06-24',35,'2021-08-08','NA',20,2),
(24,'NA','NA','2021-01-04','2021-02-12',35,'2021-08-08','NA',13,2),
(25,'NA','NA','2021-05-10','2021-06-24',35,'2021-08-08','NA',8,2),
(26,'NA','NA','2021-05-10','2021-06-24',35,'2021-08-08','NA',21,2),
(27,'NA','NA','2021-01-04','2021-02-12',35,'2021-08-08','NA',22,2),
(28,'NA','NA','2021-05-10','2021-06-24',35,'2021-08-08','NA',23,2),
(29,'NA','NA','2021-05-10','2021-06-24',35,'2021-08-08','NA',23,2);

INSERT INTO concerner(idUser, idStage) VALUES
(4, 1),
(5, 2),
(6, 3),
(7, 4),
(8, 5),
(9, 6),
(10, 7),
(11, 8),
(12, 9),
(13, 10),
(14, 11),
(15, 12),
(16, 13),
(17, 14),
(18, 15),
(19, 16),
(20, 17),
(21, 18),
(22, 19),
(23, 20),
(24, 21),
(25, 22),
(26, 23),
(27, 24),
(28, 25),
(29, 26),
(30, 27),
(1, 28),
(2, 29);