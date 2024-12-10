CREATE TABLE berkasvalidasi (
    id INT PRIMARY KEY IDENTITY(1,1),
    nim VARCHAR(20) NOT NULL,
    mahasiswa_id INT NOT NULL,
    jenis_berkas VARCHAR(50) NOT NULL,
    file_path VARCHAR(255) NOT NULL,
    status VARCHAR(20) NOT NULL,
    tanggal_upload DATETIME NOT NULL
);

select * from Users;

ALTER TABLE Users
ADD prodi VARCHAR(100), 
    angkatan INT;

UPDATE Users
SET prodi = 'D-IV Sistem Informasi Bisnis', 
    angkatan = 24
WHERE id_user = 7;

UPDATE Users
SET angkatan = 23
WHERE id_user = 7;




