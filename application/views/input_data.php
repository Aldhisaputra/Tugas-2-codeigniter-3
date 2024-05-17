<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        form {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin: 0 auto;
            max-width: 500px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        textarea {
            height: 100px;
            resize: vertical;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            font-size: 12px;
            margin-top: -5px;
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Input Data Mahasiswa</h1>
        <?php echo form_open(base_url('mahasiswa/tampilkan_data'), array('method' => 'post')); ?>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <?php echo form_input('nama', set_value('nama'), array('class' => 'form-control')); ?>
            <?php echo form_error('nama', '<div class="error">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="npm">NPM:</label>
            <?php echo form_input('npm', set_value('npm'), array('class' => 'form-control')); ?>
            <?php echo form_error('npm', '<div class="error">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="angkatan">Angkatan:</label>
            <?php echo form_input('angkatan', set_value('angkatan'), array('class' => 'form-control')); ?>
            <?php echo form_error('angkatan', '<div class="error">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="kelas">Kelas:</label>
            <?php echo form_input('kelas', set_value('kelas'), array('class' => 'form-control')); ?>
            <?php echo form_error('kelas', '<div class="error">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <?php echo form_textarea('alamat', set_value('alamat'), array('class' => 'form-control')); ?>
            <?php echo form_error('alamat', '<div class="error">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="mata_kuliah">Mata Kuliah Favorit:</label>
            <?php echo form_input('mata_kuliah', set_value('mata_kuliah'), array('class' => 'form-control')); ?>
            <?php echo form_error('mata_kuliah', '<div class="error">', '</div>'); ?>
        </div>
        <?php echo form_submit('submit', 'Tampilkan', array('class' => 'btn btn-primary')); ?>
        <?php echo form_close(); ?>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
