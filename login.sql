/****** Script for SelectTopNRows command from SSMS  ******/
SELECT TOP (1000) [id_user]
      ,[username]
      ,[password]
      ,[role]
  FROM [sibeta].[dbo].[Users]

  ALTER TABLE [sibeta].[dbo].[Users] ADD [name] NVARCHAR(50);

  UPDATE [sibeta].[dbo].[Users]
SET [name] = 'Bagas Satria'
WHERE [username] = '2341760108';

SELECT [username], [name] 
FROM [sibeta].[dbo].[Users] 
WHERE [username] = '2341760108';

UPDATE [sibeta].[dbo].[Users]
SET [name] = 'Renald Agustinus'
WHERE [username] = '2341760090';

UPDATE [sibeta].[dbo].[Users]
SET [name] = 'Quuenadhynar Azarine D.A'
WHERE [username] = '2341760109';

UPDATE [sibeta].[dbo].[Users]
SET [name] = 'Niriza Lailaumi H'
WHERE [username] = '2341760072';

UPDATE [sibeta].[dbo].[Users]
SET [name] = 'Maharani Wirawan'
WHERE [username] = '2341760111';

SELECT [username], [name] 
FROM [sibeta].[dbo].[Users];

UPDATE [sibeta].[dbo].[Users]
SET [name] = 'Admin'
WHERE [username] = 'adminTI';
