<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail - Status UKT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <?php include('css.php') ?>
</head>
<body>  
    <div class="container-fluid"> <!-- Container fluid untuk full-width layout -->
       
      <header class="fixed-top bg-light shadow" style="margin-left: 17.5%; width: 75%;">
        <?php include('../layouts/header.php'); ?>
      </header>

        <div class="row">
            <aside class="col-md-2 bg-light sidebar">
                <?php include('../layouts/sidebar.php') ?>
            </aside>

            <main class="pt-20 offset-md-2 "> <!-- Menambahkan offset -->
    <section class="status-section">
        <h3>Status UKT</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tahun Akademik</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>2023/2024 Ganjil</td>
                    <td>Lunas</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2023/2024 Genap</td>
                    <td>Lunas</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2024/2025 Ganjil</td>
                    <td>Lunas</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>2024/2025 Genap</td>
                    <td>Lunas</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>2025/2026 Ganjil</td>
                    <td>Lunas</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>2025/2026 Genap</td>
                    <td>Lunas</td>
                </tr>
            </tbody>
        </table>
       
    </section>
</main>


        <footer class="fixed-bottom bg-light shadow" style="margin-left: 17.5%; width: 75%;">
            <?php include('../layouts/footer.php'); ?>
        </footer>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
