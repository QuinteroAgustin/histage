#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Section
#------------------------------------------------------------

CREATE TABLE Section(
        idSection  Int  Auto_increment  NOT NULL ,
        libSection Varchar (50) NOT NULL
	,CONSTRAINT Section_PK PRIMARY KEY (idSection)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Entreprise
#------------------------------------------------------------

CREATE TABLE Entreprise(
        idEntreprise         Int  Auto_increment  NOT NULL ,
        nomEntreprise        Varchar (50) NOT NULL ,
        serviceEntreprise    Varchar (50) NOT NULL ,
        missionEntreprise    Varchar (100) NOT NULL ,
        numAdrEntreprise     Int NOT NULL ,
        libAdrEntreprise     Varchar (50) NOT NULL ,
        codePostalEntreprise Int NOT NULL ,
        villeEntreprise      Varchar (50) NOT NULL ,
        telephoneEntreprise  Varchar (12) NOT NULL ,
        mailEntreprise       Varchar (50) NOT NULL ,
        siretEntreprise      Varchar (30) NOT NULL
	,CONSTRAINT Entreprise_PK PRIMARY KEY (idEntreprise)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: TypeIndicateur
#------------------------------------------------------------

CREATE TABLE TypeIndicateur(
        idTypeIndicateur  Int  Auto_increment  NOT NULL ,
        libTypeIndicateur Varchar (50) NOT NULL
	,CONSTRAINT TypeIndicateur_PK PRIMARY KEY (idTypeIndicateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Indicateur
#------------------------------------------------------------

CREATE TABLE Indicateur(
        idTypeIndicateur Int NOT NULL ,
        idIndicateur     Int NOT NULL ,
        libIndicateur    Varchar (200) NOT NULL
	,CONSTRAINT Indicateur_PK PRIMARY KEY (idTypeIndicateur,idIndicateur)

	,CONSTRAINT Indicateur_TypeIndicateur_FK FOREIGN KEY (idTypeIndicateur) REFERENCES TypeIndicateur(idTypeIndicateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: AnneeScolaire
#------------------------------------------------------------

CREATE TABLE AnneeScolaire(
        idAnneeScolaire  Int  Auto_increment  NOT NULL ,
        libAnneeScolaire Varchar (50) NOT NULL
	,CONSTRAINT AnneeScolaire_PK PRIMARY KEY (idAnneeScolaire)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Stage
#------------------------------------------------------------

CREATE TABLE Stage(
        idStage              Int  Auto_increment  NOT NULL ,
        titreStage           Varchar (50) NOT NULL ,
        descriptifStage      Varchar (100) NOT NULL ,
        dateDebutStage       Date NOT NULL ,
        dateFinStage         Date NOT NULL ,
        dureeHebdoStage      Int NOT NULL ,
        dateEvalStage        Date NOT NULL ,
        commentaireEvalStage Varchar (50) NOT NULL ,
        idEntreprise         Int NOT NULL ,
        idAnneeScolaire      Int NOT NULL
	,CONSTRAINT Stage_PK PRIMARY KEY (idStage)

	,CONSTRAINT Stage_Entreprise_FK FOREIGN KEY (idEntreprise) REFERENCES Entreprise(idEntreprise)
	,CONSTRAINT Stage_AnneeScolaire0_FK FOREIGN KEY (idAnneeScolaire) REFERENCES AnneeScolaire(idAnneeScolaire)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Role
#------------------------------------------------------------

CREATE TABLE Role(
        idRole  Int  Auto_increment  NOT NULL ,
        libRole Varchar (50) NOT NULL
	,CONSTRAINT Role_PK PRIMARY KEY (idRole)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Users
#------------------------------------------------------------

CREATE TABLE Users(
        idUser        Int  Auto_increment  NOT NULL ,
        mailUser      Varchar (60) NOT NULL ,
        nomUser       Varchar (50) NOT NULL ,
        prenomUser    Varchar (50) NOT NULL ,
        telephoneUser Varchar (12) NOT NULL ,
        mobileUser    Varchar (12) NOT NULL ,
        titreUser     Varchar (5) NOT NULL ,
        mdpUser       Varchar (255) NOT NULL ,
        idRole        Int NOT NULL
	,CONSTRAINT Users_PK PRIMARY KEY (idUser)

	,CONSTRAINT Users_Role_FK FOREIGN KEY (idRole) REFERENCES Role(idRole)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: Eleve
#------------------------------------------------------------

CREATE TABLE Eleve(
        idUser             Int NOT NULL ,
        dateNaissanceEleve Date NOT NULL ,
        dateRentreeEleve   Date NOT NULL ,
        numAdrEleve        Int NOT NULL ,
        villeAdrEleve      Varchar (50) NOT NULL ,
        libAdrEleve        Varchar (50) NOT NULL ,
        codePostalAdrEleve Int NOT NULL ,
        idSection          Int NOT NULL ,
        CONSTRAINT Eleve_PK PRIMARY KEY (idUser)

	,CONSTRAINT Eleve_Users_FK FOREIGN KEY (idUser) REFERENCES Users(idUser)
	,CONSTRAINT Eleve_Section0_FK FOREIGN KEY (idSection) REFERENCES Section(idSection)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: Enseignant
#------------------------------------------------------------

CREATE TABLE Enseignant(
        idUser              Int NOT NULL ,
        libMetierEnseignant Varchar (50) NOT NULL
	,CONSTRAINT Enseignant_PK PRIMARY KEY (idUser)

	,CONSTRAINT Enseignant_Users_FK FOREIGN KEY (idUser) REFERENCES Users(idUser)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Contact
#------------------------------------------------------------

CREATE TABLE Contact(
        idUser          Int NOT NULL ,
        statusContact   Varchar (1) NOT NULL ,
        fonctionContact Varchar (50) NOT NULL ,
        idEntreprise    Int NOT NULL
	,CONSTRAINT Contact_PK PRIMARY KEY (idUser)

	,CONSTRAINT Contact_Users_FK FOREIGN KEY (idUser) REFERENCES Users(idUser)
	,CONSTRAINT Contact_Entreprise0_FK FOREIGN KEY (idEntreprise) REFERENCES Entreprise(idEntreprise)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: concerner
#------------------------------------------------------------

CREATE TABLE concerner(
        idUser  Int NOT NULL ,
        idStage Int NOT NULL
	,CONSTRAINT concerner_PK PRIMARY KEY (idUser,idStage)

	,CONSTRAINT concerner_Users_FK FOREIGN KEY (idUser) REFERENCES Users(idUser)
	,CONSTRAINT concerner_Stage0_FK FOREIGN KEY (idStage) REFERENCES Stage(idStage)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: evaluer
#------------------------------------------------------------

CREATE TABLE evaluer(
        idTypeIndicateur       Int NOT NULL ,
        idIndicateur           Int NOT NULL ,
        idStage                Int NOT NULL ,
        repCategorieIndicateur Bool NOT NULL
	,CONSTRAINT evaluer_PK PRIMARY KEY (idTypeIndicateur,idIndicateur,idStage)

	,CONSTRAINT evaluer_Indicateur_FK FOREIGN KEY (idTypeIndicateur,idIndicateur) REFERENCES Indicateur(idTypeIndicateur,idIndicateur)
	,CONSTRAINT evaluer_Stage0_FK FOREIGN KEY (idStage) REFERENCES Stage(idStage)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: gerer
#------------------------------------------------------------

CREATE TABLE gerer(
        idSection Int NOT NULL ,
        idUser    Int NOT NULL ,
        isRs      Bool NOT NULL
	,CONSTRAINT gerer_PK PRIMARY KEY (idSection,idUser)

	,CONSTRAINT gerer_Section_FK FOREIGN KEY (idSection) REFERENCES Section(idSection)
	,CONSTRAINT gerer_Enseignant0_FK FOREIGN KEY (idUser) REFERENCES Enseignant(idUser)
)ENGINE=InnoDB;

