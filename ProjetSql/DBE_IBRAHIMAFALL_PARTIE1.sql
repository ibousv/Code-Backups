CREATE DATABASE db_ifall;

USE db_ifall;

CREATE TABLE Representant(NUM_REP int primary key,
NOM_REP varchar(255),AD_REP varchar(255),CP_REP int ,
VIL_REP varchar(255),AGE_REP int );

CREATE TABLE Departement(COD_DEP int PRIMARY KEY,
NOM_DEP varchar(255),CHEF_SECTEUR varchar(255));

CREATE TABLE Couvrir(NUM_REP int,COD_DEP int,
PRIMARY KEY(NUM_REP,COD_DEP),
FOREIGN KEY (NUM_REP) REFERENCES Representant(NUM_REP),
FOREIGN KEY (COD_DEP) REFERENCES Departement(COD_DEP));

CREATE TABLE Categorie(NUM_CAT int primary key,
NOM_CAT varchar(255),REMISE varchar(255));

CREATE TABLE Client(CODE_CLT int primary key,
NOM_CLT varchar(255),NUM_REP int,NUM_CAT int, 
FOREIGN KEY (NUM_REP) REFERENCES Representant(NUM_REP),
FOREIGN KEY (NUM_CAT) REFERENCES Categorie(NUM_CAT));

INSERT INTO Representant values
    (1,"DELMOTTE","18 rue Aristide Briand",75012,"PARIS",26),
      (2,"HINAUD","25 rue Martel",94120,"FONTENAY SOUS BOIS",31),
      (3,"LAPIERRE","89 rue Gaston berger",95100,"ARGENTEUIL",52),
      (4,"LATOUR","7 rue du Four",91700,"FLEURY MEROGIS",44),
      (5,"LEMOINE","5 rue Aubois",91700,"FLEURY MEROGIS",28),
      (6,"LEMOINE","12 route des Fiacres",93140,"BONDY",34);

INSERT INTO Departement values
    (75,"Paris","PONS"),
    (91,"Essonne","BERTRAND"),
    (92,"Haut de Seine","FISCHIER"),
    (93,"Seine Saint Denis","FISCHIER"),
    (94,"Val de Marne","BERTRAND"),
    (95,"Val d'Oise","BERTRAND");

INSERT INTO Couvrir values
    (1,75),
    (1,94),
    (2,93),
    (2,94),
    (3,91),
    (3,75),
    (4,95),
    (5,93),
    (5,91),
    (6,92),
    (6,95); 

INSERT INTO Categorie values
    (1,"ENTREPRISES","10%"),
    (2,"COLLECTIVITES","5%"),
    (3,"PARTICULIERS","0%");

INSERT INTO Client values
    (1,"BOCCARD",1,1),
    (2,"RALDI",2,1),
    (3,"PIERROL",2,3),
    (4,"ENGELI",2,3),
    (5,"ATR",4,2),
    (6,"PARTOLI",4,3);

SELECT CODE_CLT,NOM_CLT,NOM_REP from Client 
inner join Representant on Client.CODE_CLT = Representant.NUM_REP
WHERE NOM_REP like "%MOI%";

SELECT NOM_REP,AD_REP,VIL_REP,NOM_DEP from Couvrir
inner join Representant on Couvrir.NUM_REP = Representant.NUM_REP
inner join Departement on Couvrir.COD_DEP = Departement.COD_DEP 
WHERE NOM_DEP ="Val de Marne";

SELECT AVG(AGE_REP) from Representant
WHERE VIL_REP = 'PARIS';

SELECT CODE_CLT,NOM_CLT,NOM_CAT from Client
inner join Categorie on Client.NUM_CAT = Categorie.NUM_CAT
WHERE NOM_CAT = "COLLECTIVITES";

ALTER TABLE Departement
ADD COLUMN Ville varchar(255) not null;

UPDATE Departement
SET Ville = "Paris" WHERE COD_DEP = 75;

UPDATE Departement
SET Ville = "Fleury" WHERE COD_DEP = 91;

UPDATE Departement
SET Ville = "La Seine" WHERE COD_DEP = 92;

UPDATE Departement
SET Ville = "BONDY" WHERE COD_DEP = 93;

UPDATE Departement
SET Ville = "Fontenay" WHERE COD_DEP = 94;

UPDATE Departement
SET Ville = "Argenteuil" WHERE COD_DEP = 95;

SELECT NOM_REP,COUNT(Couvrir.NUM_REP) as 'Nombre de Departement'
from Couvrir inner join Representant USING (NUM_REP)
GROUP BY Representant.NUM_REP;