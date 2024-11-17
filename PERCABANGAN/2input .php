<!DOCTYPE html>

<html>

<head>

    <title>MENENTUKAN JENIS SEGI 4 BERDASARKAN SISI</title>
</head>

<body>
    <h4>Selamat datang <strong style="-webkit-text-fill-color: blue; text-transform:uppercase"> <?php echo $_GET['nama'] ?> </strong>di Program Project Percabangan Notasi Algoritma </h4>
    <p>Anda Login Sebagai : <?php if ($_GET) {
                                echo $_GET['nama'];
                                echo '  Dengan Email: ' . $_GET['email'];
                                $_GET['status'] = 'aktif';
                            }

                            ?></p>

    <form action="3output .php" method="post">
        <html>

        <head>
            <title>Menentukan Jenis persegi</title>
        </head>

        <body>
            <h2>Masukkan Nilai Inputan</h2>
            <form action="3output .php" method="post">
            <label for="Input jenis persegi">Input jenis persegi:</label>
  <input type="text" id="Input jenis persegi" name="Input jenis persegi" required><br><br>

  <form method="post">
    <label for="startDate">hitung persegi:</label>
    <input type="date" name="startDate" required><br><br>
    <label for="endDate">hasil:</label>
    <input type="date" name="endDate" required><br><br>


                <input type="submit" value="Input">
            </form>
        </body>

        </html>