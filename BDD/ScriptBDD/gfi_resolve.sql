 DROP TABLE prestation;
 DROP TABLE contact;
 DROP TABLE client;
 DROP TABLE commercial;
--
-- Table structure for table commune
--
CREATE TABLE commercial (
  com_Id INT(10) NOT NULL,
  com_Nom VARCHAR(64) NOT NULL,
  com_Prenom VARCHAR(32) NOT NULL,
  com_Password VARCHAR(32) NOT NULL,
  com_Statut VARCHAR(16) NOT NULL,
  com_Mail VARCHAR(64) NOT NULL
);

CREATE TABLE client (
  cl_Id INT(10)  NOT NULL,
  cl_Nom VARCHAR(64) NOT NULL,
  cl_Desc VARCHAR(255)
);

CREATE TABLE contact (
  ctc_Id INT(10) NOT NULL,
  ctc_Nom VARCHAR(64) NOT NULL,
  ctc_Prenom VARCHAR(64) NOT NULL,
  ctc_Mail VARCHAR(64) NOT NULL,
  ctc_Phone CHAR(10) NOT NULL,
  ctc_Desc VARCHAR(255),
  ctc_cl_Id INT(10) NOT NULL
);

CREATE TABLE prestation (
  prest_Id INT(10) NOT NULL,
  prest_Titre VARCHAR(255) NOT NULL,
  prest_Date DATETIME NOT NULL,
  prest_Desc VARCHAR(255) NOT NULL,
  prest_DureeMois INT(10),
  prest_DureeFreq INT(10),
  prest_Consultant1 VARCHAR(64) NOT NULL,
  prest_Consultant2 VARCHAR(64),
  prest_Consultant3 VARCHAR(64),
  prest_Consultant4 VARCHAR(64),
  prest_Consultant5 VARCHAR(64),
  prest_Tarif FLOAT4(10,2) NOT NULL,
  prest_MKSF1 VARCHAR(255),
  prest_MKSF2 VARCHAR(255),
  prest_MKSF3 VARCHAR(255),
  prest_Statut VARCHAR(8) NOT NULL,
  prest_DateDep DATETIME NOT NULL,
  prest_Loc VARCHAR(255) NOT NULL
  ,
  prest_com_Id INT(10) NOT NULL,
  prest_cl_Id INT(10) NOT NULL
);





--
-- Clés & Indexes pour la table `commercial`
--
ALTER TABLE `commercial` MODIFY `com_Id` INT(10) AUTO_INCREMENT PRIMARY KEY;

--
-- Clés & Indexes pour la table `client`
--
-- ALTER TABLE `client` ADD PRIMARY KEY (cl_Id) AUTO_INCREMENT NOT NULL;
ALTER TABLE `client` MODIFY `cl_Id`  INT(10) AUTO_INCREMENT PRIMARY KEY;

--
-- Clés & Indexes pour la table `contact`
--
-- ALTER TABLE `contact`  ADD PRIMARY KEY (ctc_Id) AUTO_INCREMENT NOT NULL;
ALTER TABLE `contact` MODIFY `ctc_Id`  INT(10) AUTO_INCREMENT PRIMARY KEY;

ALTER TABLE `contact`
  ADD CONSTRAINT `fk_contact_client` FOREIGN KEY (ctc_cl_Id) REFERENCES client(cl_Id) ON DELETE CASCADE;

--
-- Clés & Indexes pour la table `prestation`
--
-- ALTER TABLE `prestation`  ADD PRIMARY KEY (prest_Id) AUTO_INCREMENT NOT NULL;
ALTER TABLE `prestation` MODIFY `prest_Id`  INT(10) AUTO_INCREMENT PRIMARY KEY;

ALTER TABLE `prestation`
  ADD CONSTRAINT `fk_prestattion_commercial` FOREIGN KEY (prest_com_Id) REFERENCES commercial(com_Id);

ALTER TABLE `prestation`
  ADD CONSTRAINT `fk_prestation_client` FOREIGN KEY (prest_cl_Id) REFERENCES client(cl_Id);


--
-- Jeu d'essai
--

INSERT INTO `commercial` (`com_Id`, `com_Nom`, `com_Prenom`, `com_Password`, `com_Statut`, `com_Mail`) VALUES
(1, 'Martin', 'Mathilde', 'ABCDEF', 'ADMIN', 'mathilde.martin@gfi.com'),
(2, 'Caraf', 'Jean', 'ABCDEF', 'ADMIN', 'jean.caraf@gfi.com'),
(3, 'Kergoat', 'Marc', 'ABCDEF', 'USER', 'marc.kergoat@gfi.com'),
(4, 'Rivière', 'Catherine', 'ABCDEF', 'USER', 'catherine.riviere@gfi.com'),
(5, 'Dubois', 'Maxime', 'ABCDEF', 'USER', 'maxime.dubois@gfi.com');


INSERT INTO `client` (`cl_Id`, `cl_Nom`, `cl_Desc`) VALUES
(1, 'Kalimantan SA', 'Import Export'),
(2, 'JKL SARL', 'Fabricant de claviers'),
(3, 'Kampus Corp', 'Fabricant de tentes');

INSERT INTO `contact` (`ctc_Id`, `ctc_Nom`, `ctc_Prenom`, `ctc_Mail`, `ctc_Desc`, `ctc_cl_Id`) VALUES
(1, 'Tham', 'Jean', 'jean.tham@kali.fr', 'sales manager', 1),
(2, 'Lutil', 'Nicolas', 'nicolas.lutil@kali.fr', 'project manager', 1),
(3, 'Lafrance', 'Felicia', 'felicia.lafrance@kali.fr', 'CEO', 1),
(4, 'Raguenes', 'Sandra', 'sandra.raguenes@jkl.fr', 'PDG', 2),
(5, 'Leon', 'Paul', 'paul.leon@kampus.com', 'DRH', 3);

INSERT INTO `prestation` (`prest_Id`,`prest_Titre`,`prest_Date`, `prest_Desc`, `prest_DureeMois`, `prest_DureeFreq`, `prest_Consultant1`, `prest_Consultant2`, `prest_Consultant3`, `prest_Consultant4`, `prest_Consultant5`, `prest_Tarif`, `prest_MKSF1`, `prest_MKSF2`, `prest_MKSF3`, `prest_Statut`, `prest_DateDep`, `prest_Loc`, `prest_com_Id`, `prest_cl_Id`) VALUES
(1, 'Maintenance Applicative site web GFI', '2017-10-06 12:00:00', 'Correction bug, etc,...', 3, 4, 'Matthieu', 'Damien', 'Kevin', 'Erwan', 'Andy', 5000, 'Prix', 'Efficacité', 'Délai', 'OPEN', '2017-10-10 09:00:00', 'Brest', 2, 3),
(2, 'MCO application facturation', '2017-10-02 15:00:00', 'Maintenance en Conditions opérationnelles application facturation', 12, 5, 'Matthieu', 'Damien', 'Kevin', 'Erwan', 'Andy', 90000, 'Prix', 'Efficacité', 'Délai', 'OPEN', '2019-01-01 09:00:00', 'Toulouse', 4, 1);
