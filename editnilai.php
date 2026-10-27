<?php
require_once __DIR__ . "/koneksi.php";

if (isset($_POST['update'])) {
    $nim = $_POST['nim'];
    $namalengkap = $_POST['namalengkap'];
    $nilaiakhir = $_POST['nilaiakhir'];

    // Hitung ulang nilai huruf dan predikat otomatis
    if ($nilaiakhir <= 34.50) {
        $nilaihuruf = 'E';
        $predikat = 'Tidak Lulus';
    } elseif ($nilaiakhir <= 50.50) {
        $nilaihuruf = 'D';
        $predikat = 'Kurang Memuaskan';
    } elseif ($nilaiakhir <= 60.50) {
        $nilaihuruf = 'C';
        $predikat = 'Cukup Memuaskan';
    } elseif ($nilaiakhir <= 80.50) {
        $nilaihuruf = 'B';
        $predikat = 'Memuaskan';
    } else {
        $nilaihuruf = 'A';
        $predikat = 'Sangat Memuaskan';
    }

    // Cek apakah user mengupload foto baru
    if (!empty($_FILES['foto']['name'])) {
        $nama_file = $_FILES['foto']['name'];
        $tmp_file = $_FILES['foto']['tmp_name'];
        $dir = "img/";

        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        $target_file = $dir . basename($nama_file);
        if (move_uploaded_file($tmp_file, $target_file)) {
            $sql = "UPDATE nilaimahasiswa SET namalengkap='$namalengkap', nilaiakhir='$nilaiakhir', nilaihuruf='$nilaihuruf', predikat='$predikat', foto='$nama_file', modified_at=NOW() WHERE nim='$nim'";
        }
    } else {
        $sql = "UPDATE nilaimahasiswa SET namalengkap='$namalengkap', nilaiakhir='$nilaiakhir', nilaihuruf='$nilaihuruf', predikat='$predikat', modified_at=NOW() WHERE nim='$nim'";
    }

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Data berhasil diubah!');
                window.location.href = 'viewdata.php';
              </script>";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else {
    header("Location: viewdata.php");
}
?>