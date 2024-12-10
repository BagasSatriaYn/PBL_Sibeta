SELECT * FROM status_pengajuan WHERE nim = '2341760108';

INSERT INTO status_pengajuan (nim, ukt_status, perpustakaan_status, kompen_status, skripsi_status, jurnal_status)
VALUES ('2341760108', 'tuntas', 'tuntas', 'tuntas', 'tuntas', 'tuntas');

EXEC sp_columns status_pengajuan;

INSERT INTO status_pengajuan (user_id, nim, prodi, ukt_status, perpustakaan_status, kompen_status, skripsi_status, jurnal_status)
VALUES (1, '2341760108', 'Teknologi Informasi', 'tuntas', 'tuntas', 'tuntas', 'tuntas', 'tuntas');

SELECT * FROM Users;


INSERT INTO Users (nim, username, password, role, name)
VALUES ('2341760108', '2341760108', '$2y$10$t2ZngDNU80oLrckvoZWZuOMV70lUI91usCBqk9oTcJtdYfNnwbcAG', 'mahasiswa', 'Bagas Satria');

SELECT * FROM Users;
SELECT * FROM Users WHERE nim = '2341760108';
DELETE FROM Users WHERE nim = '2341760108' AND id_user != 3;

INSERT INTO status_pengajuan (user_id, nim, prodi, ukt_status, perpustakaan_status, kompen_status, skripsi_status, jurnal_status)
VALUES (2003, '2341760108', 'Teknologi Informasi', 'tuntas', 'tuntas', 'tuntas', 'tuntas', 'tuntas');

SELECT * FROM status_pengajuan WHERE nim = '2341760108';

ALTER TABLE Users
ADD email VARCHAR(100) NULL;




UPDATE Users
SET email = 'renald@gmail.com'
WHERE id_user = 4;

UPDATE Users
SET email = 'quennadynar@gmail.com'
WHERE id_user = 5;

UPDATE Users
SET email = 'niriza@gmail.com'
WHERE id_user = 6;

UPDATE Users
SET email = 'maharani@gmail.com'
WHERE id_user = 7;

UPDATE Users
SET nim = '2341760108'
WHERE id_user = 3;

UPDATE Users
SET nim = '2341760090'
WHERE id_user = 4;

UPDATE Users
SET nim = '2341760109'
WHERE id_user = 5;

UPDATE Users
SET nim = '2341760072'
WHERE id_user = 6;

UPDATE Users
SET nim = '2341760111'
WHERE id_user = 7;

CREATE TABLE Mahasiswa (
    id INT PRIMARY KEY IDENTITY(1,1),
    nim VARCHAR(15) NOT NULL,
    prodi VARCHAR(100),
    jenis_kelamin VARCHAR(10),
    no_telepon VARCHAR(20),
    email VARCHAR(100),
    alamat TEXT,
    FOREIGN KEY (nim) REFERENCES Users(nim)  -- Menggunakan NIM yang ada di tabel Users
);
ALTER TABLE Users
ADD CONSTRAINT UNIQUE_nim UNIQUE (nim);

