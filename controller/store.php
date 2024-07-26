<?php
include './koneksi.php'; // Menghubungkan file koneksi untuk terhubung ke database

$beasiswa = array("Beasiswa Pertamina", "Beasiswa KIPK", "Beasiswa Bidikmisi");
sort($beasiswa);

$semester = array("1", "2", "3", "4", "5", "6", "7", "8");
sort($semester);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $semester = $_POST['semester'];
    $ipk = $_POST['ipk'];
    $jns_beasiswa = $_POST['jns_beasiswa'];
    $foto = $_FILES['foto'];

    // Upload foto
    $foto = $_FILES['foto']['name'];
    $target = "uploads/" . basename($foto);
    $imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
    $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');

    // melakukan penyimpanan data bisa kondisi terpenuhi
    if (in_array($imageFileType, $allowedTypes) && move_uploaded_file($_FILES['foto']['tmp_name'], $target)) {
        $stmt = $conn->prepare("INSERT INTO mahasiswa (foto, nim, nama, email, nohp, semester, ipk, jns_beasiswa) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $foto, $nim, $nama, $email, $nohp, $semester, $ipk, $jns_beasiswa);
        // jika berhasil akan diarahkan ke halaman hasil
        if ($stmt->execute()) {
            echo "New record created successfully";
            header("Location: hasil.php");
        } else {
            // jika gagal akan muncul error
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        // jika field foto tidak sesuai format akan muncul error
        echo "Failed to upload image";
    }
    
}
?>