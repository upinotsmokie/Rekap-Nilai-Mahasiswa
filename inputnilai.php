<?php
require_once __DIR__ . "/koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim = $_POST['nim'];
    $namalengkap = $_POST['namalengkap'];
    $nilaiakhir = $_POST['nilaiakhir'];

    // Hitung Nilai Huruf dan Predikat otomatis
    if ($nilaiakhir <= 34.50) {
        $nilaihuruf = 'E'; $predikat = 'Tidak Lulus';
    } elseif ($nilaiakhir <= 50.50) {
        $nilaihuruf = 'D'; $predikat = 'Kurang Memuaskan';
    } elseif ($nilaiakhir <= 60.50) {
        $nilaihuruf = 'C'; $predikat = 'Cukup Memuaskan';
    } elseif ($nilaiakhir <= 80.50) {
        $nilaihuruf = 'B'; $predikat = 'Memuaskan';
    } else {
        $nilaihuruf = 'A'; $predikat = 'Sangat Memuaskan';
    }

    // Proses Upload Foto ke folder pilihan (misal folder 'img/' atau 'uploads/')
    $nama_file = $_FILES['foto']['name'];
    $tmp_file = $_FILES['foto']['tmp_name'];
    
    // Sesuaikan nama folder tujuan, jika Anda pakai folder 'img', ubah jadi 'img/'
    $dir = "img/"; 
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
    
    $target_file = $dir . basename($nama_file);
    
    if (move_uploaded_file($tmp_file, $target_file)) {
        $sql = "INSERT INTO nilaimahasiswa (nim, namalengkap, nilaiakhir, nilaihuruf, predikat, foto) 
                VALUES ('$nim', '$namalengkap', '$nilaiakhir', '$nilaihuruf', '$predikat', '$nama_file')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>
                    alert('Data dan foto berhasil ditambahkan!');
                    window.location.href = 'viewdata.php';
                  </script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Gagal mengupload foto!'); window.history.back();</script>";
    }
}
?>