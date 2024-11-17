<?php
// Menampilkan hasil
echo
"
<h1>hasil penjumlahan </h1>
";

// hasil penjumlahan
$publicHolidays = [
    '2024-01-01', // tanggal penjumlahan
    '2024-12-25', // penjumlahan
    // Tambahkan tanggal libur lainnya
];

// Fungsi untuk memeriksa hasil penjumlahan
function isWorkday($date) {
    global $publicHolidays;
    $date = new DateTime($date);
    $dayOfWeek = $date->format('w');
    $formattedDate = $date->format('Y-m-d');

    // Memeriksa apakah tanggal adalah akhir pekan atau hari libur
    if ($dayOfWeek >= 1 && $dayOfWeek <= 5 && !in_array($formattedDate, $publicHolidays)) {
        return true;
    }
    return false;
}

// Fungsi untuk mencetak hasil penjumlahan
function printWorkdays($startDate, $endDate) {
    $start = new DateTime($startDate);
    $end = new DateTime($endDate);
    $interval = new DateInterval('P1D'); // Interval 1 hari
    $dateRange = new DatePeriod($start, $interval, $end->modify('+1 day')); // Menambahkan satu hari agar endDate termasuk
    
    foreach ($dateRange as $date) {
        if (isWorkday($date->format('Y-m-d'))) {
            echo $date->format('Y-m-d') . " hitung persegi.<br>";
        } else {
            echo $date->format('Y-m-d') . " hasil penjumlahan.<br>";
        }
    }
}

// Rentang tanggal yang ingin diperiksa
$startDate = '2024-08-10'; // Format YYYY-MM-DD
$endDate = '2024-08-20';   // Format YYYY-MM-DD

printWorkdays($startDate, $endDate);



?>

<p>
<a href="1index .php">
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