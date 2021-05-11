CREATE TABLE Role(
   idRole INT  Auto_increment  NOT NULL,
   libRole VARCHAR(50),
   PRIMARY KEY(idRole)
);

CREATE TABLE AnneeScolaire(
   idAnneeScolaire Int  Auto_increment  NOT NULL,
   libAnneeScolaire VARCHAR(50),
   PRIMARY KEY(idAnneeScolaire)
);

CREATE TABLE Entreprise(
   idEntreprise Int  Auto_increment  NOT NULL,
   nomEntreprise VARCHAR(50),
   serviceEntreprise VARCHAR(25),
   missionEntreprise VARCHAR(100),
   numAdrEntreprise INT,
   libAdrEntreprise VARCHAR(50),
   codePostalEntreprise VARCHAR(10),
   villeEntreprise VARCHAR(50),
   telephoneEntreprise VARCHAR(15),
   mailEntreprise VARCHAR(50),
   siretEntreprise VARCHAR(30),
   PRIMARY KEY(idEntreprise)
);

CREATE TABLE typeIndicateur(
   idTypeIndicateur Int  Auto_increment  NOT NULL,
   libelleTypeIndicateur VARCHAR(50),
   PRIMARY KEY(idTypeIndicateur)
);

CREATE TABLE Section(
   idSection Int  Auto_increment  NOT NULL,
   libSection VARCHAR(50),
   PRIMARY KEY(idSection)
);

CREATE TABLE Users(
   idUser Int  Auto_increment  NOT NULL,
   mailUser VARCHAR(50),
   nomUser VARCHAR(50),
   prenomUser VARCHAR(50),
   telephoneUser VARCHAR(12),
   mobileUser VARCHAR(15),
   titreUser VARCHAR(50),
   mdpUser VARCHAR(255),
   idRole INT NOT NULL,
   PRIMARY KEY(idUser),
   FOREIGN KEY(idRole) REFERENCES Role(idRole)
);

CREATE TABLE Stages(
   idStage Int  Auto_increment  NOT NULL,
   titreStage VARCHAR(50),
   descriptifStage VARCHAR(100),
   dateDebutStage DATE,
   dateFinStage DATE,
   dureeHebdoStage INT,
   deteEvalStage DATE,
   commentaireEvalStage VARCHAR(50),
   idAnneeScolaire INT NOT NULL,
   idEntreprise INT NOT NULL,
   PRIMARY KEY(idStage),
   FOREIGN KEY(idAnneeScolaire) REFERENCES AnneeScolaire(idAnneeScolaire),
   FOREIGN KEY(idEntreprise) REFERENCES Entreprise(idEntreprise)
);

CREATE TABLE Eleve(
   idUser INT,
   dateNaissanceEleve DATE,
   numAdrEleve INT,
   villeAdrEleve VARCHAR(20),
   dateRentreeEleve DATE,
   libAdrELeve VARCHAR(50),
   codePostalAdrEleve VARCHAR(10),
   idSection INT NOT NULL,
   PRIMARY KEY(idUser),
   FOREIGN KEY(idUser) REFERENCES Users(idUser),
   FOREIGN KEY(idSection) REFERENCES Section(idSection)
);

CREATE TABLE Contact(
   idUser INT,
   statusContact VARCHAR(1),
   fonctionContact VARCHAR(50),
   idEntreprise INT NOT NULL,
   PRIMARY KEY(idUser),
   FOREIGN KEY(idUser) REFERENCES Users(idUser),
   FOREIGN KEY(idEntreprise) REFERENCES Entreprise(idEntreprise)
);

CREATE TABLE Enseignant(
   idUser INT,
   libMetierEnseignant VARCHAR(50),
   PRIMARY KEY(idUser),
   FOREIGN KEY(idUser) REFERENCES Users(idUser)
);

CREATE TABLE Indicateur(
   idTypeIndicateur INT,
   numeroIndic INT,
   libelleIndic VARCHAR(50),
   PRIMARY KEY(idTypeIndicateur, numeroIndic),
   FOREIGN KEY(idTypeIndicateur) REFERENCES typeIndicateur(idTypeIndicateur)
);

CREATE TABLE concerner(
   idUser INT,
   idStage INT,
   PRIMARY KEY(idUser, idStage),
   FOREIGN KEY(idUser) REFERENCES Users(idUser),
   FOREIGN KEY(idStage) REFERENCES Stages(idStage)
);

CREATE TABLE evaluer(
   idStage INT,
   idTypeIndicateur INT,
   numeroIndic INT,
   repCategorieIndic Bool NOT NULL,
   PRIMARY KEY(idStage, idTypeIndicateur, numeroIndic),
   FOREIGN KEY(idStage) REFERENCES Stages(idStage),
   FOREIGN KEY(idTypeIndicateur, numeroIndic) REFERENCES Indicateur(idTypeIndicateur, numeroIndic)
);

CREATE TABLE gerer(
   idUser INT,
   idSection INT,
   isRs Bool NOT NULL,
   PRIMARY KEY(idUser, idSection),
   FOREIGN KEY(idUser) REFERENCES Enseignant(idUser),
   FOREIGN KEY(idSection) REFERENCES Section(idSection)
);
