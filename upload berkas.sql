/****** Script for SelectTopNRows command from SSMS  ******/
SELECT TOP (1000) [id]
      ,[nim]
      ,[mahasiswa_id]
      ,[jenis_berkas]
      ,[file_path]
      ,[status]
      ,[tanggal_upload]
  FROM [sibeta].[dbo].[berkasvalidasi]

  select * from berkasvalidasi;

  drop table berkasvalidasi;

CREATE TABLE berkasvalidasi (
    id INT IDENTITY(1,1) PRIMARY KEY,
    user_id INT NOT NULL,
    jenis_berkas VARCHAR(255) NOT NULL,
    file_path VARCHAR(255) NOT NULL,
    status VARCHAR(50) DEFAULT 'pending',
    tanggal_upload DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    nim VARCHAR(20) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES Users(id_user) ON DELETE CASCADE
);

SELECT COLUMN_NAME, IS_NULLABLE 
FROM INFORMATION_SCHEMA.COLUMNS 
WHERE TABLE_NAME = 'berkasvalidasi' AND COLUMN_NAME = 'nim';

ALTER TABLE berkasvalidasi
ADD admin_note TEXT;

SELECT * FROM status_pengajuan;

