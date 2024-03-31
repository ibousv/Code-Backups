CREATE DATABASE db_banque;

USE db_banque;

CREATE TABLE agence(agence_id int PRIMARY KEY,
nom varchar(255),
ville varchar(255),
actif varchar(255));

CREATE TABLE clients(code_cli varchar(255) PRIMARY KEY,
nomcomplet varchar(255),
tel int,
email varchar(255));

CREATE TABLE comptes(numcompte int PRIMARY KEY,
solde varchar(255),clt_code varchar(255),numagce int,
FOREIGN KEY(clt_code) REFERENCES clients(code_cli),
FOREIGN KEY(numagce) REFERENCES agence(agence_id));

CREATE TABLE emprunts(numero int PRIMARY KEY,
montant varchar(255),codecl varchar(255),
FOREIGN KEY(codecl) REFERENCES clients(code_cli));

INSERT INTO agence values
(1,"Agence_1","Dakar","4 350 000 FCFA"),
(2,"Agence_2","Dakar","4 350 000 FCFA"),
(3,"Agence_3","Louga","2 678 500 FCFA"),
(4,"Agence_4","Louga","2 678 500 FCFA"),
(5,"Agence_5","Ziguinchor","1 235 000 FCFA"),
(6,"Agence_6","Ziguinchor","1 235 000 FCFA");

INSERT INTO clients values
("cl001","client_1",771234567,"client1@example.com"),
("cl002","client_2",771264567,"client2@example.com"),
("cl003","client_3",771934567,"client3@example.com"),
("cl004","client_4",771034567,"client4@example.com"),
("cl005","client_5",771234067,"client5@example.com"),
("cl006","client_6",771204567,"client6@example.com"),
("cl007","client_7",761234567,"client7@example.com"),
("cl008","client_8",701234567,"client8@example.com"),
("cl009","client_9",770234567,"client9@example.com"),
("cl010","client_10",781234567,"client10@example.com"),
("cl011","client_11",761034569,"client11@example.com"),
("cl012","client_12",771234597,"client12@example.com"),
("cl013","client_13",779234567,"client13@example.com"),
("cl014","client_14",778234567,"client14@example.com"),
("cl015","client_15",771284567,"client15@example.com"),
("cl016","client_16",771238567,"client16@example.com"),
("cl017","client_17",771234807,"client17@example.com"),
("cl018","client_18",761234597,"client18@example.com"),
("cl019","client_19",701238567,"client19@example.com"),
("cl020","client_20",781209567,"client20@example.com"),
("cl021","client_21",781294567,"client21@example.com"),
("cl022","client_22",761230967,"client22@example.com"),
("cl023","client_23",769234567,"client23@example.com"),
("cl024","client_24",768234560,"client24@example.com"),
("cl026","client_26",701234589,"client26@example.com");


INSERT INTO comptes values
(1,"181,250 FCFA","cl001",1),(2,"181,250 FCFA","cl001",1),
(3,"362,500 FCFA","cl002",1),
(4,"362,500 FCFA","cl003",2),
(5,"362,500 FCFA","cl004",1),
(6,"362,500 FCFA","cl005",2),
(7,"362,500 FCFA","cl006",2),
(8,"181,250 FCFA","cl007",1),(9,"181,250 FCFA","cl007",1),
(10,"362,500 FCFA","cl008",2),
(11,"362,500 FCFA","cl009",1),
(12,"181,250 FCFA","cl010",2),(13,"181,250 FCFA","cl010",2),
(14,"181,250 FCFA","cl011",1),(15,"181,250 FCFA","cl011",1),
(16,"362,500 FCFA","cl012",2),
(17,"382,643 FCFA","cl013",3),
(18,"191,3215 FCFA","cl014",4),(19,"191,3215 FCFA","cl014",4),
(20,"382,643 FCFA","cl015",3),
(21,"191,3215 FCFA","cl016",3),(22,"191,3215 FCFA","cl016",3),
(23,"382,643 FCFA","cl017",4),
(24,"382,643 FCFA","cl018",3),
(25,"382,643 FCFA","cl019",4),
(26,"205,833 FCFA","cl020",5),
(27,"205,833 FCFA","cl021",6),
(28,"205,833 FCFA","cl022",5),
(29,"205,833 FCFA","cl023",5),
(30,"205,833 FCFA","cl024",6),
(31,"102,9165 FCFA","cl026",5),(32,"102,9165 FCFA","cl026",5);

INSERT INTO emprunts values
(1,"1 255 000 FCFA","cl001"),
(2,"375 500 FCFA ","cl020"),
(3,"55 000 FCFA","cl012"),
(5,"162 000, 5 FCFA ","cl015"),
(4,"135 800, 5 FCFA","cl021");



UPDATE agence 
SET actif =REPLACE("4 350 000 FCFA","4 350 000","5 660 000")
WHERE agence_id <= 2;

UPDATE agence 
SET actif = "2 840 500 FCFA" WHERE
agence_id >= 3 AND agence_id <= 4;

UPDATE agence 
SET actif = "1 746 300,5 FCFA" WHERE
agence_id >= 5;