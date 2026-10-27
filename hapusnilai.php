<?php
require_once __DIR__ . "/koneksi.php";

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    
    // Ambil data foto untuk dihapus dari folder penyimpanan (opsional agar tidak menumpuk)
    $query_foto = mysqli_query($conn, "SELECT foto FROM nilaimahasiswa WHERE nim = '$nim'");
    $data = mysqli_fetch_assoc($query_foto);
    if ($data && !empty($data['foto']) && file_exists("uploads/" . $data['foto'])) {
        unlink("uploads/" . $data['foto']);
    }

    // Query hapus data
    $sql = "DELETE FROM nilaimahasiswa WHERE nim = '$nim'";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href = 'viewdata.php';
              </script>";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    header("Location: viewdata.php");
}
?>