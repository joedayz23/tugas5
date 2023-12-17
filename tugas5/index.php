<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Data NIM</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil NIM dari formulir
    $nim = $_POST["nim"];

    // Menampilkan jumlah karakter dalam NIM
    echo "<p>1. Jumlah karakter dalam NIM Anda adalah: " . strlen($nim) . " karakter</p>";

    // Menentukan tahun angkatan
    $tahun_angkatan = substr($nim, 0, 2);
    echo "<p>2. Tahun angkatan Anda adalah: 20$tahun_angkatan</p>";

    // Menentukan prodi
    $kode_prodi = substr($nim, 4, 2);
    $prodi = "";
    switch ($kode_prodi) {
        case "53":
            $prodi = "Teknik Informatika";
            break;
        case "55":
            $prodi = "Sistem Informasi";
            break;
        case "51":
            $prodi = "Teknik Industri";
            break;
        case "85":
            $prodi = "Magister Teknologi Informasi";
            break;
        case "51":
            $prodi = "Ilmu Hukum";
            break;
        case "52":
            $prodi = "Sastra Inggris";
            break;
        case "51":
            $prodi = "Manajemen";
            break;
        case "52":
            $prodi = "Akuntansi";
            break;
        case "31":
            $prodi = "Manajemen Informatika";
            break;
        case "34":
            $prodi = "Keuangan Perbankan";
            break;
        default:
            $prodi = "Tidak Diketahui";
    }

    echo "<p>3. Prodi Anda adalah: $prodi</p>";

    // Menentukan fakultas
    $kode_fakultas = substr($nim, 2, 2);
    $fakultas = "";
    switch ($kode_fakultas) {
        case "01":
            $fakultas = "FTII";
            break;
        case "02":
            $fakultas = "FHB";
            break;
        case "05":
            $fakultas = "FEB";
            break;
        case "08":
            $fakultas = "VOKASI";
            break;
        default:
            $fakultas = "Tidak Diketahui";
    }

    echo "<p>4. Fakultas Anda adalah: $fakultas</p>";
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="nim">Masukkan NIM Anda:</label>
    <input type="text" id="nim" name="nim" required>
    <button type="submit">Proses</button>
</form>

</body>
</html>
