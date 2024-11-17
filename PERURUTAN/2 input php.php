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
            border-radius: 15px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
            width: 350px;
            border: 2px solid #ff99cc; /* Border pink */
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
   
    
                <?php

                if ($_GET) {
                    echo $_GET['nama'];
                    echo '  Dengan Email: ' . $_GET['email'];
                    $_GET['status'] = 'aktif';
                }

                ?>



    </body>
</table>


    <div class="login-container">
        <center>
    <div class="welcome-message2">Selamat Datang hafis ramadan nasution</div>
    <div class="welcome-message1"><h4>Di Program Project Perurutan Notasi Algoritma menghitung luas persegi panjang<h4></div>
    </center>

    <form method="POST" action="3 output.php">
        <label for="Masukkan Nilai P">Masukkan Nilai P:</label>
        <input type="text" id="Masukkan Nilai P" name="Masukkan Nilai P" required>

        <label for="Masukkan Nilai L">Masukkan Nilai L:</label>
        <input type="Masukkan Nilai L" id="Masukkan Nilai L" name="Masukkan Nilai L" required>

        <label for="Masukkan Nilai T">Masukkan Nilai T:</label>
        <input type="Masukkan Nilai T" id="Masukkan Nilai T" name="Masukkan Nilai T" required>

        <input type="submit" value="Login">
    </form>
</div>


</head>
</body>

</html>