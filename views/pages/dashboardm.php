<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Simpel</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f4f4f4;
    }
    .container {
      display: flex;
      gap: 20px;
    }
    .box {
      width: 200px;
      height: 100px;
      background-color: #007bff;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 8px;
      text-decoration: none;
      font-size: 16px;
      font-weight: bold;
      transition: transform 0.2s, background-color 0.2s;
    }
    .box:hover {
      background-color: #0056b3;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <div class="container">
    <a href="#status-pengajuan" class="box">Status Pengajuan</a>
    <a href="#upload-berkas" class="box">Upload Berkas</a>
  </div>
</body>
</html>
