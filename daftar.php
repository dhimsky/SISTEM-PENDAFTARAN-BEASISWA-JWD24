<?php
include 'controller/store.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css bootstrap online -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- costom css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper">
        <!-- mengambil kode navbar pada folder layouts -->
        <?php
            include "layouts/navigasi.php"
        ?>
        <div class="container mt-3 content">
            <h2 class="text-center mb-4 mt-4">Daftar Beasiswa</h2>
            <div class="card text-center">
                <div class="card-header">
                    Registrasi
                </div>
                <div class="card-body">
                    <form id="scholarshipForm" action="daftar.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="nim">NIM</label>
                                <input class="form-control" type="number" id="nim" name="nim" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="nama">NAMA LENGKAP</label>
                                <input class="form-control" type="text" id="nama" name="nama" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="email">EMAIL</label>
                                <input class="form-control" type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="nohp">NO. HP</label>
                                <input class="form-control" type="number" id="nohp" name="nohp" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="name">SEMESTER</label>
                                <select class="form-control" id="semester" name="semester" required>
                                <option value="">- Pilih Semester -</option>
                                <!-- mengambil variabel semester pada array -->
                                    <?php
                                        foreach($semester as $sms){
                                            echo "<option value='$sms'>$sms</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="ipk">IPK</label>
                                <input class="form-control" type="text" id="ipk" name="ipk" required readonly>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="jns_beasiswa">BEASISWA</label>
                                <select class="form-control" id="jns_beasiswa" name="jns_beasiswa" required disable>
                                <option value="">- Pilih Beasiswa -</option>
                                <!-- mengambil variabel beasiswa pada array -->
                                    <?php
                                        foreach($beasiswa as $bs){
                                            echo "<option value='$bs'>$bs</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="foto">Foto</label>
                                <input  class="form-control" type="file" id="foto" name="foto" accept=".jpg, .jpeg, .png" required disable>
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit" id="submitBtn" disable>Daftar</button>
                        <button class="btn btn-secondary" type="reset">Batal</button>
                    </form>
                </div>
                <div class="card-footer text-muted"></div>
            </div>
            
        </div>
        <!-- mengambil kode footer pada folder layout -->
        <?php
            include "layouts/footer.php";
        ?>
    </div>
    <script>
        // Data dummy NIM dan IPK
        const dummyData = [
            { nim: "210202031", ipk: "3.5" },
            { nim: "210202032", ipk: "2.9" },
            { nim: "210202033", ipk: "3.2" },
            { nim: "210202034", ipk: "2.1" },
            { nim: "210202035", ipk: "2.5" },
            { nim: "210202036", ipk: "3.6" },
            { nim: "210202037", ipk: "4.0" },
        ];

        document.getElementById('nim').addEventListener('input', function() {
            var nim = this.value;
            var ipkField = document.getElementById('ipk');
            
            // Cari data IPK berdasarkan NIM
            var match = dummyData.find(item => item.nim === nim);
            if (match) {
                ipkField.value = match.ipk;
            } else {
                ipkField.value = ''; // Kosongkan IPK jika NIM tidak ditemukan
            }
            
            // Disabling/enabling form elements based on IPK
            const ipk = parseFloat(ipkField.value);
            const elementsToToggle = ['jns_beasiswa', 'foto', 'submitBtn'];

            elementsToToggle.forEach(id => {
                document.getElementById(id).disabled = (ipk < 3);
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
