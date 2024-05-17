<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .result-container {
            background-color: #fff;
            border-radius: 10px;
            padding: 40px;
            margin: 0 auto;
            max-width: 600px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .result-container h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        .result-container p {
            margin: 10px 0;
            font-size: 18px;
        }
        .btn {
            padding: 10px 30px;
            font-size: 18px;
            border-radius: 25px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="result-container">
            <h1>Hasil Input Data Mahasiswa</h1>
            <p><strong>Nama:</strong> <?php echo $nama; ?></p>
            <p><strong>NPM:</strong> <?php echo $npm; ?></p>
            <p><strong>Angkatan:</strong> <?php echo $angkatan; ?></p>
            <p><strong>Kelas:</strong> <?php echo $kelas; ?></p>
            <p><strong>Alamat:</strong> <?php echo $alamat; ?></p>
            <p><strong>Mata Kuliah Favorit:</strong> <?php echo $mata_kuliah; ?></p>
            <div class="text-center mt-4">
            <button class="btn btn-primary" onclick="history.back()">Kembali</button>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
