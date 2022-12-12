-- Revan Fauzi Algifari
-- 120140049
-- Membuat Tabel
CREATE TABLE mahasiswa (
    id INT NOT NULL AUTO_INCREMENT,
    nim BIGINT NOT NULL,
    nama VARCHAR(50) NOT NULL,
    prodi VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
) Engine = InnoDB;
-- Memasukkan Data
INSERT INTO mahasiswa (nim, nama, prodi)
VALUES (120140049, "Revan Fauzi Algifari", "IF"),
    (120120030, "Azwendi Azwar", "TG"),
    (120140999, "Yves Saint Laurent", "IF"),
    (120250050, "Mustafa Zahri", "ME"),
    (120390089, "Muhammad Reihan Azhari", "TL"),
    (120390095, "M Ridwan Al Aziz", "TL"),
    (120110035, "Rangga Yuanas", "TF"),
    (120110222, "Stepehen Hawking", "TF"),
    (120120120, "Fajar Adivadilah", "TG"),
    (120120119, "Muhammad Agil Mutahari", "TG");
-- SELECT * FROM mahasiswa;