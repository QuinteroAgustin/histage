#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Annee Scolaire
#------------------------------------------------------------

CREATE TABLE Annee_Scolaire(
        idAnneeScolaire   Int  Auto_increment  NOT NULL ,
        libAnneeScolaire  Varchar (50) NOT NULL
	,CONSTRAINT Annee_Scolaire_PK PRIMARY KEY (idAnneeScolaire)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Eleve
#------------------------------------------------------------

CREATE TABLE Eleve(
        idEleve            Int  Auto_increment  NOT NULL ,
        titreEleve         Varchar (3) NOT NULL ,
        nomEleve           Varchar (50) NOT NULL ,
        prenomEleve        Varchar (50) NOT NULL ,
        dateNaissanceEleve Date NOT NULL ,
        numAdrEleve        Int ,
        libAdrEleve        Varchar (50) NOT NULL ,
        codePostalAdrEleve Varchar (10) NOT NULL ,
        villeAdrEleve      Varchar (20) NOT NULL ,
        telephoneEleve     Varchar (15) NOT NULL ,
        mailEleve          Varchar (50) NOT NULL ,
        dateRentreeEleve   Date NOT NULL ,
        mdpEleve           Varchar (12) NOT NULL
	,CONSTRAINT Eleve_PK PRIMARY KEY (idEleve)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Entreprise
#------------------------------------------------------------

CREATE TABLE Entreprise(
        idEntreprise         Int  Auto_increment  NOT NULL ,
        nomEntreprise        Varchar (50) NOT NULL ,
        serviceEntreprise    Varchar (25) NOT NULL ,
        missionEntreprise    Varchar (100) NOT NULL ,
        numAdrEntreprise     Int ,
        libAdrEntreprise     Varchar (50) NOT NULL ,
        codePostalEntreprise Varchar (5) NOT NULL ,
        villeEntreprise      Varchar (50) NOT NULL ,
        telephoneEntreprise  Varchar (15) NOT NULL ,
        mailEntreprise       Varchar (50) NOT NULL ,
        siretEntreprise      Varchar (8) NOT NULL
	,CONSTRAINT Entreprise_PK PRIMARY KEY (idEntreprise)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Contact
#------------------------------------------------------------

CREATE TABLE Contact(
        idContact        Int  Auto_increment  NOT NULL ,
        titreContact     Varchar (3) NOT NULL ,
        nomContact       Varchar (50) NOT NULL ,
        prenomContact    Varchar (50) NOT NULL ,
        telMobileContact Varchar (15) NOT NULL ,
        telFixeContact   Varchar (15) NOT NULL ,
        mailContact      Varchar (100) NOT NULL ,
        statusContact    Varchar (1) NOT NULL COMMENT "(A)ctif (I)nactif"  ,
        fonctionContact  Varchar (50) NOT NULL ,
        idEntreprise     Int NOT NULL
	,CONSTRAINT Contact_PK PRIMARY KEY (idContact)

	,CONSTRAINT Contact_Entreprise_FK FOREIGN KEY (idEntreprise) REFERENCES Entreprise(idEntreprise)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Enseignant
#------------------------------------------------------------

CREATE TABLE Enseignant(
        idEnseignant        Int  Auto_increment  NOT NULL ,
        titreEnseignant     Varchar (3) NOT NULL ,
        nomEnseignant       Varchar (50) NOT NULL ,
        prenomEnseignant    Varchar (50) NOT NULL ,
        telephoneEnseignant Varchar (12) NOT NULL ,
        mailEnseignant      Varchar (50) NOT NULL ,
        mdpEnseignant       Varchar (12) NOT NULL ,
        isRsEnseignant      Bool NOT NULL
	,CONSTRAINT Enseignant_PK PRIMARY KEY (idEnseignant)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Stage
#------------------------------------------------------------

CREATE TABLE Stage(
        idEleve              Int NOT NULL ,
        idStage              Int NOT NULL ,
        titreStage           Varchar (50) NOT NULL ,
        descriptifStage      Varchar (100) NOT NULL ,
        dateDebutStage       Date NOT NULL ,
        dateFinStage         Date NOT NULL ,
        dureeHebdoStage      Int NOT NULL ,
        dateEvalStage        Date NOT NULL ,
        commentaireEvalStage Varchar (50) NOT NULL ,
        idEntreprise         Int NOT NULL ,
        idAnneeScolaire      Int NOT NULL ,
        idContact            Int NOT NULL ,
        idEnseignant         Int NOT NULL
	,CONSTRAINT Stage_PK PRIMARY KEY (idEleve,idStage)

	,CONSTRAINT Stage_Eleve_FK FOREIGN KEY (idEleve) REFERENCES Eleve(idEleve)
	,CONSTRAINT Stage_Entreprise0_FK FOREIGN KEY (idEntreprise) REFERENCES Entreprise(idEntreprise)
	,CONSTRAINT Stage_Annee_Scolaire1_FK FOREIGN KEY (idAnneeScolaire) REFERENCES Annee_Scolaire(idAnneeScolaire)
	,CONSTRAINT Stage_Contact2_FK FOREIGN KEY (idContact) REFERENCES Contact(idContact)
	,CONSTRAINT Stage_Enseignant3_FK FOREIGN KEY (idEnseignant) REFERENCES Enseignant(idEnseignant)
	,CONSTRAINT Stage_Contact_AK UNIQUE (idContact)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: typeIndicateur
#------------------------------------------------------------

CREATE TABLE typeIndicateur(
        idTypeIndicateur      Int  Auto_increment  NOT NULL ,
        libelleTypeIndicateur Varchar (25) NOT NULL
	,CONSTRAINT typeIndicateur_PK PRIMARY KEY (idTypeIndicateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Indicateur
#------------------------------------------------------------

CREATE TABLE Indicateur(
        idTypeIndicateur Int NOT NULL ,
        numeroIndic      Int NOT NULL ,
        libelleIndic     Bool NOT NULL
	,CONSTRAINT Indicateur_PK PRIMARY KEY (idTypeIndicateur,numeroIndic)

	,CONSTRAINT Indicateur_typeIndicateur_FK FOREIGN KEY (idTypeIndicateur) REFERENCES typeIndicateur(idTypeIndicateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: evaluer
#------------------------------------------------------------

CREATE TABLE evaluer(
        idTypeIndicateur Int NOT NULL ,
        numeroIndic      Int NOT NULL ,
        idEleve          Int NOT NULL ,
        idStage          Int NOT NULL
	,CONSTRAINT evaluer_PK PRIMARY KEY (idTypeIndicateur,numeroIndic,idEleve,idStage)

	,CONSTRAINT evaluer_Indicateur_FK FOREIGN KEY (idTypeIndicateur,numeroIndic) REFERENCES Indicateur(idTypeIndicateur,numeroIndic)
	,CONSTRAINT evaluer_Stage0_FK FOREIGN KEY (idEleve,idStage) REFERENCES Stage(idEleve,idStage)
)ENGINE=InnoDB;

