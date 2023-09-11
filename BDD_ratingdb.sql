DROP TABLE avis;

CREATE TABLE avis (
    id SERIAL,
    departement VARCHAR(255) NOT NULL,
    promo VARCHAR(255) NOT NULL,
    module VARCHAR(255) NOT NULL,
    note INT NOT NULL CHECK (note BETWEEN 1 AND 5),
    commentaire VARCHAR(300) NOT NULL,
    etudiant VARCHAR(255) NOT NULL,
    date date
);

INSERT INTO avis (departement, promo, module, note, commentaire, etudiant, date)  VALUES ('Informatique', '2022', 'Programmation Web', 5,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et est molestie augue sodales sed.', 'Evan', NOW());
INSERT INTO avis (departement, promo, module, note, commentaire, etudiant, date)  VALUES ('Informatique', '2023', 'Programmation Java', 2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et est molestie augue sodales sed.', 'Analtone', NOW());
INSERT INTO avis (departement, promo, module, note, commentaire, etudiant, date)  VALUES ('Informatique', '2022', 'Programmation Python', 1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et est molestie augue sodales sed.', 'Quentin', NOW());
INSERT INTO avis (departement, promo, module, note, commentaire, etudiant, date)  VALUES ('Informatique', '2022', 'Programmation C', 3,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et est molestie augue sodales sed.', 'Tom', NOW());
INSERT INTO avis (departement, promo, module, note, commentaire, etudiant, date)  VALUES ('Informatique', '2022', 'Programmation SQL', 2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et est molestie augue sodales sed.', 'Romain', NOW());

