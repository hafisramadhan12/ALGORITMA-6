<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna</title>
    <style>
    /* Styling umum untuk body */
        body {
            font-family: Arial, sans-serif;
            background-color: #00ffff; /* Warna latar belakang pink muda */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 110vh;
            margin: 0;
        }

        /* Container untuk form */
        .login-container {
            background-color: #0000ff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
            width: 350px;
            border: 2px solid #000000; /* Border pink */
        }

        /* Judul form */
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #ff3399; /* Warna teks judul pink lebih tua */
        }

       
        
        /* Style untuk input */
        input[type="text"], input[type="Masukkan Nilai P"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0 16px 0;
            border: 2px solid #ff99cc; /* Border pink muda */
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 16px;
            background-color: #fff0f5; /* Warna latar belakang input pink muda */
        }

/* Style untuk input */
input[type="text"], input[type="Masukkan Nilai L"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0 16px 0;
            border: 2px solid #ff99cc; /* Border pink muda */
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 16px;
            background-color: #fff0f5; /* Warna latar belakang input pink muda */
        }

        /* Style untuk input */
input[type="text"], input[type="Masukkan Nilai T"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0 16px 0;
            border: 2px solid #ff99cc; /* Border pink muda */
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 16px;
            background-color: #fff0f5; /* Warna latar belakang input pink muda */
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

        /* Kalimat Selamat Datang Di Paling atas*/
        .welcome-message2 {
            font-size: 20px;
            color: #ff1493; /* Pink yang cerah */
            font-weight: bold;
            margin-bottom: 20px;
        }

 /* Kalimat Selamat Datang Di Paling atas*/
 .welcome-message1 {
            font-size: 20px;
            color: #ff1493; /* Pink yang cerah */
            margin-bottom: 20px;
        }
</style>

<body>

    <strong style="-webkit-text-fill-color: blue; text-transform:uppercase"></strong> 
   
    
               

</head>
<body>
<div class="login-container">
        <center>
    <div class="welcome-message2">Selamat Datang hafis</div>
    <div class="welcome-message1"><h4>Di Program Project Perulangan Notasi Algoritma hafis ramadhan nasution<h4></div>
    </center>

<strong style="-webkit-text-fill-color: blue; text-transform:uppercase"></strong> 

<form method="GET" action="3output.php">

  <label for="Input Perulangan hafis">Input Perulangan hafis:</label>
  <input type="text" id="Input Perulangan hafis" name="IInput Perulangan hafis" required><br><br>
  
  
</form>

<body>
<form method="POST" action="3output.php">
        <label for="jumlah">Pilih berapa kali akan diulang:</label><br><br>
        <select id="jumlah" name="jumlah" min="1" required>
            <!-- Loop jumlah 1 sampai 2000 -->
            <!-- Kamu juga bisa menggunakan script untuk mengisi jumlah secara otomatis -->
            <option value=""> --- Pilih Jumlah ---</option>
            <!-- Pilihan jumlah dari 1 hingga 2000 -->
            <script>
                for (let i = 1; i <= 2000; i++) {
                    document.write('<option value="' + i + '">' + i + '</option>');
                }
            </script>

    
            </script><br><br>
        </select>
        <input type="submit" value="Proses ->">
    </form>


</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
// Simulasi data pengguna yang terdaftar di sistem (untuk contoh ini hardcoded)
$InputHariKerja = [
    'Input Perulangan Meylisa' => 'Meylisa Eka Putry',     

];
}