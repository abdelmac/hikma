CREATE TABLE Capitales (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nom_capitale VARCHAR(100),
    Pays VARCHAR(100),
    Nombre_habitants INT
);


INSERT INTO Capitales (Nom_capitale, Pays, Nombre_habitants) VALUES ('Paris', 'France', 2243833);

INSERT INTO Capitales (Nom_capitale, Pays, Nombre_habitants) VALUES ('Londres', 'Royaume-Uni', 8908081);

INSERT INTO Capitales (Nom_capitale, Pays, Nombre_habitants) VALUES ('Berlin', 'Allemagne', 3769495);