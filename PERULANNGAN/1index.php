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
            background-color: #00ffff; /* Warna latar hijau stabilo */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Container untuk form */
        .login-container {
            background-color: #0000ff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
            width: 350px;
            border: 2px solid #ff99cc; 
        }

        /* Judul form */
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #000000; 
        }

        /* Style untuk input */
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0 16px 0;
            border: 2px solid #ff99cc; /* Border pink muda */
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 16px;
            background-color: #000000; /* Warna latar belakang input pink muda */
        }

/* Style untuk input */
input[type="text"], input[type="Input Email"] {
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
    </style>
  
</head>
<body>
<div class="login-container">

<h2>Identifikasi Pengguna(Login)</h2>
<form method="GET" action="2input.php">

<label for="Input Nama">Input Nama:</label>
  <input type="text" id="Input Nama" name="Input Nama" required><br><br>
  
  <label for="Input Email">Input Email:</label>
  <input type="Input Email" id="Input Email" name="Input Email" required><br><br>
  
  <input type="submit" value="Login">
</form>

</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
// Simulasi data pengguna yang terdaftar di sistem (untuk contoh ini hardcoded)
$users = [
    'user1' => 'hafis',    
    'user2' => 'hafisramadannasution@gmail.com',    
];

}

?>