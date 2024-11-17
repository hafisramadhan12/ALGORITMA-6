<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    

<style>
        /* Container untuk form */
        .login-container2 {
            
            color: #00ffff; /* Warna teks judul pink lebih tua */

        }
        /* Judul form */
        h2 {
            margin-bottom: 30px;
            color: #ff3399; /* Warna teks judul pink lebih tua */
        }

        
        /* Style untuk tombol */
        input[type="submit"] {
            width: 100%;
            background-color: #ff66b2; /* Warna pink cerah */
            color: white;
            padding: 14px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        /* Hover effect untuk tombol */
        input[type="submit"]:hover {
            background-color: #ff3399; /* Warna pink lebih tua */
        }

        /* Styling untuk label */
        label {
            font-size: 14px;
            color: #cc0066; /* Warna label pink tua */
        }

        /* Media query untuk tampilan mobile */
        @media (max-width: 600px) {
            .login-container {
                width: 100%;
                padding: 20px;
            }
        }
        </style>
        <div class="login-container">
        </head>
  <body>
<h2> Selamat hafis Kamu Berhasil Login</h2>

<div class="login-container2">
      
<?php
$jumlah = $_POST['jumlah'];
//Mulai
//Iniliasisasi variabel i dengan nilai 1.
//Lakukan perulangan selama i kurang dari atau sama dengan 1000:
//Cetak nilai i
//Akhiri perulangan
//Selesai
?>
<?php
// Perulangan untuk menampilkan "Nama saya M"
for ($i = 1; $i <= $jumlah; $i++) {
      echo "Nama saya hafis ke " . $i . "<br>";
}
?>

<body>
<h1> Hasil Perulangan sebanyak <?php echo $_POST['jumlah'];?> kali</h1>
<p>
<a href="03 index perulangan meylisa .php" >
      <button>Kembali ke Input</button>
</a>
</p>

<p>atau kembali ke : </p>
<a href="http://localhost/">
      <button>Localhost</button>
</a>
<a href="../">
      <button>Folder Awal</button>
</a>
<br><br><strong>By hafisramadannasution</strong=";
</body>
  </html> 