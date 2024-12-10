CREATE TABLE berkas (
    id INT IDENTITY(1,1) PRIMARY KEY,
    nama VARCHAR(255),
    nim VARCHAR(20),
    prodi VARCHAR(100),
    bukti VARCHAR(255),
    status VARCHAR(50)
);

INSERT INTO berkas (nama, nim, prodi, bukti, status)
VALUES ('Bagas Satria YN', '2341760108', 'DIV SIB', 'bayarUKT.pdf', 'Sedang Proses'),
       ('Renald Agustinus', '2341760090', 'DIV SIB', 'bayarUKT.pdf', 'Sedang Proses'),
       ('Maharani Wirawan', '2341760111', 'DIV SIB', 'bayarUKT.pdf', 'Sedang Proses');

SELECT * FROM berkas;

CREATE TABLE status_pengajuan (
    id INT PRIMARY KEY IDENTITY(1,1),
    user_id INT NOT NULL,  -- Foreign key yang mengarah ke Users
    prodi VARCHAR(100) NOT NULL, -- Menambahkan kolom Prodi
    ukt_status VARCHAR(20) NOT NULL, -- Status UKT
    perpustakaan_status VARCHAR(20) NOT NULL, -- Status Perpustakaan
    kompen_status VARCHAR(20) NOT NULL, -- Status Kompen
    skripsi_status VARCHAR(20) NOT NULL, -- Status Skripsi
    jurnal_status VARCHAR(20) NOT NULL, -- Status Jurnal
    file_path VARCHAR(255) NULL, -- Mengganti 'file' dengan 'file_path'
    CONSTRAINT FK_user FOREIGN KEY (user_id) REFERENCES Users(id_user) -- Relasi ke tabel Users
);

EXEC sp_columns 'Users';

INSERT INTO status_pengajuan (user_id, prodi, ukt_status, perpustakaan_status, kompen_status, skripsi_status, jurnal_status, file_path)
VALUES (1, 'Teknologi Informasi', 'Tuntas', 'Sedang Proses', 'Tuntas', 'Tuntas', 'Sedang Proses', 'file.pdf');

SELECT * FROM Users WHERE id_user = 1;

INSERT INTO Users (id_user, name, username, password)
VALUES (1, 'Muhammad Wahyu', '2341760110', 'wahyu00');

SELECT * FROM status_pengajuan WHERE nim = 'your_nim_value';

SELECT * FROM Users WHERE nim = 'your_nim_value';

INSERT INTO Users (username, password, role, nim, name) 
VALUES ('2341760108', '$2y$10$t2ZngDNU80oLrckvoZWZuOMV70lUI91usCBqk9oTcJtdYfNnwbcAG', 'mahasiswa', '2341760108', 'Bagas Satria YN');


ALTER TABLE Users
ADD nim VARCHAR(20) NULL;

ALTER TABLE status_pengajuan
ADD nim VARCHAR(20) NULL;

INSERT INTO Users (username, password, role, nim, name) 
VALUES ('2341760108', '$2y$10$t2ZngDNU80oLrckvoZWZuOMV70lUI91usCBqk9oTcJtdYfNnwbcAG', 'mahasiswa', '2341760108', 'Bagas Satria YN');

INSERT INTO status_pengajuan (nim, ukt_status, perpustakaan_status, kompen_status, skripsi_status, jurnal_status)
VALUES ('2341760108', 'belum', 'belum', 'belum', 'belum', 'belum');

SELECT * FROM status_pengajuan WHERE nim = '2341760108';  -- Ganti dengan nim yang sesuai

INSERT INTO status_pengajuan (nim, ukt_status, perpustakaan_status, kompen_status, skripsi_status, jurnal_status, user_id)
VALUES (?, ?, ?, ?, ?, ?, ?);
