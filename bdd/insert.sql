--
-- Données Emploie du temps
--

-- Lieu
INSERT INTO lieu
VALUES (105, "37 rue Merly", "Toulouse", 31800),
(204, "31 rue Sebastient", "Paris", 75000);

-- Sport
INSERT INTO sport(NomSport)
VALUES ("Musculation"),
("Athlétisme"),
("Boxe");

-- Seance
INSERT INTO seance(NomSeance, Difficulte, Jour, Heure_Debut, Heure_Fin, NumSalle, ID_Sport)
VALUES ("Entraînement SQUAT", "Normale", "Lundi", '15:10:00', '16:20:00', 105, 2),
("Cardio Vélo + Abdos", "Difficile", "Mercredi", '16:30:00', '18:50:00', 204, 1);