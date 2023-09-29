CREATE DATABASE mycoach;

CREATE TABLE mycoach.Lieu
(
    NumSalle INT PRIMARY KEY,
    Adresse VARCHAR(100),
    Ville VARCHAR(50),
    CodePostale INT(5)
) ENGINE=InnoDB;

-- 1 Musculation
-- 2 Boxe
-- 3 Athlétisme
CREATE TABLE mycoach.Sport
(
    NomSport VARCHAR(30),
    ID_sport INT AUTO_INCREMENT PRIMARY KEY

) ENGINE=InnoDB;

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