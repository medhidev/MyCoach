CREATE DATABASE mycoach;

-- LIEU
CREATE TABLE mycoach.Lieu
(
    NumSalle INT PRIMARY KEY,
    Adresse VARCHAR(100),
    Ville VARCHAR(50),
    CodePostale INT(5)
) ENGINE=InnoDB;

-- SPORT
CREATE TABLE mycoach.Sport
(
    NomSport VARCHAR(30),
    ID_sport INT AUTO_INCREMENT PRIMARY KEY
    -- ID sport: 
    -- 1 Musculation
    -- 2 Boxe
    -- 3 Athlétisme

) ENGINE=InnoDB;


-- SEANCE
CREATE TABLE mycoach.Seance
(
    ID_seance INT AUTO_INCREMENT PRIMARY KEY,
    NomSeance VARCHAR(100),
    Difficulte VARCHAR(20),
    Jour VARCHAR(10),
    Heure_Debut TIME,
    Heure_Fin TIME,
    NumSalle INT,
    ID_Sport INT,

    CONSTRAINT fk_numsalle FOREIGN KEY (NumSalle) REFERENCES Lieu(NumSalle),
    CONSTRAINT fk_idsport FOREIGN KEY (ID_sport) REFERENCES Sport(ID_sport)
) ENGINE=InnoDB;

-- UTILISATEUR
CREATE TABLE mycoach.utilisateur
(
    nom_utilisateur VARCHAR(50) PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(100),
    mot_de_passe VARCHAR(50)
) ENGINE=InnoDB;