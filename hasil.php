<?php
include 'koneksi.php'; // Menghubungkan file koneksi untuk terhubung ke database

$sql = "SELECT * FROM mahasiswa ORDER BY created_at DESC"; // Query SQL untuk mengambil semua data dari tabel beasiswa
$result = $conn->query($sql); // Menjalankan query dan menyimpan hasilnya dalam variabel $result
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper">
        <?php
            include "layouts/navigasi.php"
        ?>
        <div class="container mt-3 content">
            <a href="cetak.php" type="button" class="btn btn-secondary btn-sm mb-3">Cetak</a>
            <table class="table">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">FOTO</th>
                        <th scope="col">NIM</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">NO. HP</th>
                        <th scope="col">SEMESTER</th>
                        <th scope="col">IPK</th>
                        <th scope="col">JNS BEASISWA</th>
                        <th scope="col">STATUS</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if ($result->num_rows > 0) { // Mengecek apakah ada data yang ditemukan
                    $no = 1; // Inisialisasi nomor urut
                    while($row = $result->fetch_assoc()) { // Mengambil data baris per baris
                        echo "<tr class='text-center'>
                                <td>" . $no++ . "</td>
                                <td><img src='uploads/" . $row['foto'] . "' alt='Foto' width='50'></td>
                                <td>" . $row['nim'] . "</td>
                                <td class='text-left'>" . $row['nama'] . "</td>
                                <td>" . $row['email'] . "</td>
                                <td>" . $row['nohp'] . "</td>
                                <td>" . $row['semester'] . "</td>
                                <td>" . $row['ipk'] . "</td>
                                <td>" . $row['jns_beasiswa'] . "</td>
                                <td>" . $row['status_ajuan'] . "</td>
                            </tr>";
                    }
                } else {
                    // Pesan jika tidak ada data
                    echo "<tr><td colspan='14'>Tidak ada data</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
        <?php
            include "layouts/footer.php";
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>