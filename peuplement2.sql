INSERT INTO Role(`idRole`,`libRole`)
VALUES
(1,'Admin'),
(2,'Enseignant'),
(3,'Eleve'),
(4,'Contact');

INSERT INTO Users(`mailUser`,`nomUser`,`prenomUser`,`telephoneUser`,`mobileUser`,`titreUser`,`mdpUser`,`idRole`)
VALUES
('yohan.marques@limayrac.fr','MARQUES','Yohan','0500000000','0624859002','M.','12345',1),
('agustin.quintero@limayrac.fr','QUINTERO','Agustin','0500000000','0615614135','M.','12345',1),
('christophe.puel@limayrac.fr','PUEL','Christophe','0500000000','0661264523','M.','12345',1),

('akendengueph1@gmail.com','AKENDENGUE','Pierre-Honoré','0500000000','0668937013','M.','12345',3),
('mathieuarmand988@gmail.com','ARMAND','Mathieu','0500000000','0620320486','M.','12345',3),
('teo.augry@limayrac.fr','AUGRY','Téo','0500000000','0642905090','M.','12345',3),
('handball.ballon@hotmail.fr','BERTRAND','Loïc','0500000000','0682778747','M.','12345',3),
('gwena.bonnet81@gmail.com','BONNET','Gwénaël','0500000000','0604161969','M.','12345',3),
('matdegramont@gmail.com','BOUBEEDEGRAMONT','Matthieu','0500000000','0652810576','M.','12345',3),
('ytspana@gmail.com','BROTO','Jules','0500000000','0695370215','M.','12345',3),
('adriencarles12@gmail.com','CARLES','Adrien','0500000000','0681751583','M.','12345',3),
('romain.cazals@free.fr','CAZALS','Romain','0500000000','0781743672','M.','12345',3),
('dclucas31@gmail.com','DALLA-COSTA','Lucas','0500000000','0698068166','M.','12345',3),
('luc.dehez@gmail.com','DEHEZ','Luc','0500000000','0640185640','M.','12345',3),
('e.enjalbert12@gmail.com','ENJALBERT','Emma','0500000000','0783427578','Mme.','12345',3),
('franco-loic@orange.fr','FRANCO','Loïc','0500000000','0671062564','M.','12345',3),
('thomasfranquin@gmail.com','FRANQUIN','Thomas','0500000000','0662729865','M.','12345',3),
('axel.gagnant@gmail.com','GAGNANT','Axel','0500000000','0624624934','M.','12345',3),
('dydy97310@orange.fr','GOULT','Dylan','0500000000','0785585303','M.','12345',3),
('hugoletort@outlook.fr','LETORT','Hugo','0500000000','0662648884','M.','12345',3),
('survivorg811@gmail.com','MALGOUYRES','Guillaume','0500000000','0610042975','M.','12345',3),
('paul.meyer0031@gmail.com','MEYER','Paul','0500000000','0602264233','M.','12345',3),
('benjamin.michoux@hotmail.fr','MICHOUX','Benjamin','0500000000','0651144341','M.','12345',3),
('achillemonteil31@gmail.com','MONTEIL','Achille','0500000000','0781706046','M.','12345',3),
('david.peyrard33@gmail.com','PEYRARD','David','0500000000','0641326462','M.','12345',3),
('arnaudrabhi@hotmail.fr','RABHI','Arnaud','0500000000','0645146987','M.','12345',3),
('maryliasabatier@gmail.com','SABATIER','Marylia','0500000000','0782007284','Mme.','12345',3),
('samathy.bryan@orange.fr','SAMATHY','Bryan','0500000000','0785563324','M.','12345',3),
('charles.viala@limayrac.fr','VIALA','Charles','0500000000','0767021870','M.','12345',3),

('gillesdecruzel@horus-solutions.org','DECRUZE','Gilles','0500000000','0500000000','M.','12345',4),
('alexislapeze@gmail.com','LAPEZE','Alexis','0500000000','0500000000','M.','12345',4),
('wbassot@saliege.fr','BASSOT','William','0500000000','0500000000','M.','12345',4),
('alainygorra@yahoo.fr','YGORRA','Alain','0500000000','0650729570','M.','12345',4),
('froger@adista.fr','ROGER','F','0547500406','0500000000','M.','12345',4),
('cyril@davtech.info.fr','DAVANTFALCO','Cyril','0500000000','0500000000','M.','12345',4),
('florian.giral@invisiart.fr','GIRAL','Florian','0500000000','0652640916','M.','12345',4),
('marie@pixbulle.com','CICAL','Marie-Hélène','0500000000','0761911982','Mme.','12345',4),
('b.lambert@mairie-blagnac.fr','LAMBERT','Bruno','0561717230','0500000000','M.','12345',4),
('pierre.smeyers@orange.com','SMEYERS','Pierre','0500000000','0630072935','M.','12345',4),
('nicolas.gary@icam.fr','GARY','Nicolas','0500000000','0689335169','M.','12345',4),
('anthony@cortexinformatique.com','BRONNER','Anthony','0500000000','0661327225','M.','12345',4),
('s.vendeville@anras.fr','VENDEVILLE','Sophie','0561807957','0500000000','Mme.','12345',4),
('sitcom@sitcom.fr','DAHAN','Roni','0561149292','0500000000','M.','12345',4),
('0500000000','VOGEL','Yvan','0500000000','0500000000','M.','12345',4),
('home.skull@gmail.com','MUNOZ','Charlotte','0500000000','0675160016','Mme.','12345',4),
('o.molina@ledepartement82sceinfor...fr','MOLINA','Olivier','0563918321','0500000000','M.','12345',4),
('sylvain.galant@company.com','GALANT','Sylvain','0561007989','0500000000','M.','12345',4),
('marie@pixbulle.com','CICAL','Marie-Hélène','0500000000','0761911982','Mme.','12345',4),
('fabien.balet@ensiacet.fr','BALET','Fabien','0534323300','0500000000','M.','12345',4),
('mbouvart@partitio.com','BOUVART','Manuel','0500000000','0500000000','M.','12345',4);

INSERT INTO enseignant(`idUser`,`libMetierEnseignant`)
VALUES
('3','BDD');