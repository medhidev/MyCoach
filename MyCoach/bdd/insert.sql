INSERT INTO lieu
VALUES (105, "37 rue Merly", "Toulouse", 31800),
(204, "31 rue Sebastient", "Paris", 75000);

INSERT INTO sport(NomSport)
VALUES ("Musculation"),
("Athlétisme"),
("Boxe");

INSERT INTO seance(NomSeance, Difficulte, Jour, Heure_Debut, Heure_Fin, NumSalle, ID_Sport)
VALUES ("Entraînement SQUAT", "Normale", "Lundi", '15:10:00', '16:20:00', 105, 2),
("Cardio Vélo + Abdos", "Difficile", "Mercredi", '16:30:00', '18:50:00', 204, 1);

-- SELECT seance.NomSeance, seance.Jour, seance.Heure, lieu.NumSalle, lieu.Adresse, lieu.Ville, lieu.CodePostale, sport.NomSport
-- FROM seance, lieu, sport
-- WHERE lieu.NumSalle = seance.NumSalle AND seance.ID_seance = sport.ID_sport 