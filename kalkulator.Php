<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kalkulator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
        }
        .calculator {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #e9e9e9;
            border-radius: 5px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            color: #4CAF50;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Hasil Perhitungan</h1>
    <div class="calculator">
        <?php
        // Mendapatkan nilai dari form
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operasi = $_POST['operasi'];
        
        // Inisialisasi variabel hasil
        $hasil = 0;
        $simbol = '';
        
        // Melakukan operasi berdasarkan pilihan user
        if ($operasi == 'tambah') {
            $hasil = $angka1 + $angka2;
            $simbol = '+';
        } elseif ($operasi == 'kurang') {
            $hasil = $angka1 - $angka2;
            $simbol = '-';
        } elseif ($operasi == 'kali') {
            $hasil = $angka1 * $angka2;
            $simbol = '×';
        } elseif ($operasi == 'bagi') {
            // Mengecek pembagian dengan nol
            if ($angka2 != 0) {
                $hasil = $angka1 / $angka2;
                $simbol = '÷';
            } else {
                $hasil = "Tidak bisa dibagi dengan nol";
            }
        }
        
        // Menampilkan hasil
        echo "<div class='result'>";
        echo "<h3>Hasil:</h3>";
        if (is_numeric($hasil)) {
            echo "<p>$angka1 $simbol $angka2 = $hasil</p>";
        } else {
            echo "<p>$hasil</p>";
        }
        echo "</div>";
        ?>
        
        <a href="kalkulator.html">Kembali ke Kalkulator</a>
    </div>
</body>
</html>