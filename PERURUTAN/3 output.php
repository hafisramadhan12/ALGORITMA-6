<?php
//Mulai
//Deklarasi,panjang,lebar,dan tinggi
$panjang =5;
$lebar =4;
$tinggi =3;
//Tentukan nilai panjang
//Tentukan nilai lebar
//Tentukan nilai tinggi
//Hitung volume dengan panjang dikali lebar dikali tinggi
$volume=$panjang*$lebar*$tinggi;
//Tampilkan hasil perkalian
//Selesai
?>

<style>
        /* Styling umum untuk body */
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe6f0; /* Warna latar belakang pink muda */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Container untuk form */
        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
            width: 350px;
            border: 2px solid #ff99cc; /* Border pink */
        }

        /* Container untuk form */
        .login-container2 {
            background-color: #fff;
            padding: 30px;
            width: 300px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
            border: 2px solid #ff99cc; /* Border pink */
            border-radius: 10px;
            color: #ff3399; /* Warna teks judul pink lebih tua */

        }
        
        /* Container untuk form */
        .login-container3 {
            color: #ff3399; /* Warna teks judul pink lebih tua */
            background-color: #fff;

        }
        /* Judul form */
        h2 {
            text-align: center;
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
<h2> Selamat hafis Kamu Berhasil Login</h2>

<div class="login-container2">
      <?php
echo "hasil volume balok adalah=". $volume;
?>
<p>
<a href="1 index.php">
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