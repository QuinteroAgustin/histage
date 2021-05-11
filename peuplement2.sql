INSERT INTO Role(`idRole`, `libRole`)
VALUES 
(1,'Admin'),
(2,'Enseignant'),
(3,'Eleve'),
(4,'Contact');

INSERT INTO Users(`idUser`,`mailUser`,`nomUser`,`prenomUser`,`telephoneUser`,`mobileUser`,`titreUser`,`mdpUser`,`idRole`)
VALUES
(1,'akendengueph1@gmail.com','AKENDENGUE',' Pierre-Honoré',NULL,'06 68 93 70 13','Monsieur','12345',3),
(2,'mathieuarmand988@gmail.com','ARMAND','Mathieu',NULL,'06 20 32 04 86 ','Monsieur','12345',3),
(3,'teo.augry@limayrac.fr','AUGRY','Téo',NULL,'06 42 90 50 90','Monsieur','12345',3),
(4,'handball.ballon@hotmail.fr','BERTRAND','Loïc',NULL,'06 82 77 87 47','Monsieur','12345',3),
(5,'gwena.bonnet81@gmail.com','BONNET','Gwénaël',NULL,'06 04 16 19 69','Monsieur','12345',3),
(6,'matdegramont@gmail.com','BOUBEE DE GRAMONT','Matthieu',NULL,'06 52 81 05 76','Monsieur','12345',3),
(7,'','','',NULL,'','Monsieur','12345',3),
(8,'','','',NULL,'','Monsieur','12345',3),
(9,'','','',NULL,'','Monsieur','12345',3),
(10,'','','',NULL,'','Monsieur','12345',3),
(11,'','','',NULL,'','Monsieur','12345',3),
(12,'','','',NULL,'','Monsieur','12345',3),
(13,'','','',NULL,'','Monsieur','12345',3),
(14,'','','',NULL,'','Monsieur','12345',3),
(15,'','','',NULL,'','Monsieur','12345',3),
(16,'','','',NULL,'','Monsieur','12345',3),
(17,'','','',NULL,'','Monsieur','12345',3),
(18,'','','',NULL,'','Monsieur','12345',3),
(19,'','','',NULL,'','Monsieur','12345',3),